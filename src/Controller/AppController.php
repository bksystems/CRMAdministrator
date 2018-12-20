<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');

        $this->loadComponent('Flash');

        $this->loadComponent('Auth',[
            'loginRedirect' => [
                'controller' => 'Pages',
                'action' => 'home'
            ],
            'logoutRedirect' => [
                'controller' => 'users',
                'action' => 'login'
            ],
            'authenticate' => [
                'Form' => [
                    'passwordHasher' => [
                        'className' => 'Legacy'
                    ],
                    'fields' => [
                        'username' => 'username', 
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ]    
       ]);
    }

    
    public function isAuthorized($user = null)
    {
        if($this->Auth->user()){
            $rol_id = $this->Auth->user('rol_id');  
            $this->loadModel('Rols');
            $rol = $this->Rols->get($rol_id);
            if($rol['id'] > 0 && $rol['enabled'] == true){
                if($rol['name'] == 'SAdmin'){
                    return true;
                }else{
                    if($this->validatePermissions($this->Auth->user('id'), $rol_id)){
                        return true;
                    }else{
                        
                        $controller = $this->request->params['controller'];
                        //$action = $this->request->params['action'];
                        $this->Flash->warning(__('El usuario no cuenta con premisos para esta sección de: ' . $controller )); 
                        //$this->Flash->warning(__('El usuario no cuenta con premisos para esta sección. ' . 'Controller = ' . $controller . ' - Action = ' . $action));      
                        $this->redirect(['controller' => 'Pages', 'action' => 'home']);
                    }
                }
            }else{
                $this->redirect($this->Auth->logout());
                $this->Flash->error(__('El usuario no cuenta con rol habilitado, por favor contactar al administrador. '));
                return false;
            }
        } 

    }

    public function validatePermissions($user_id, $rol_id){
        $this->loadModel('Permissions');
        $this->loadModel('RolsPermissions');

        $controller = $this->request->params['controller'];
        $action = $this->request->params['action'];

        $permission = $this->Permissions->find('all')
            ->where([
                'AND' => [['controller' => $controller], ['action' => $action]]
            ])
            ->toArray();

        if($permission){
            $rol_permission = $this->RolsPermissions->find('all')
                ->where([
                    'AND' => [['rol_id' => $rol_id], 'permission_id' => $permission[0]['id']]
                ])
                ->toArray();
                if($rol_permission){
                    return true;
                }else{
                    return false;
                }
        }else{
            return false;
        }
    }

    public function beforeFilter(Event $event)
    {
        if($this->Auth->user()){
            $this->loadModel('Employees');
            //$this->Auth->allow(['index','view', 'add', 'edit']);
            $this->set(['loggedIn' => $this->Auth->user(), 
                'employee_login' => $this->Employees->get($this->Auth->user('id'))
            ]);
            $this->isAuthorized();
        }
    }


}

?>
