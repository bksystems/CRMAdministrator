<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Rols', 'StatusUsers']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Employees', 'Rols', 'StatusUsers']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }


        $users = $this->Users
            ->find()
            ->select(['Users.employee_id'])
            ->where(['status_employee_id' => 1]);

        $employees = $this->Users->Employees->find('list', ['limit' => 200])
            ->where(['is_employee_system' => 1, 'id NOT IN' => $users]);

        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $statusUsers = $this->Users->StatusUsers->find('list', ['limit' => 200]);
        $this->set(compact('user', 'employees', 'rols', 'statusUsers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $employees = $this->Users->Employees->find('list', ['limit' => 200])
            ->where(['is_employee_system' => 1]);
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $statusUsers = $this->Users->StatusUsers->find('list', ['limit' => 200]);
        $this->set(compact('user', 'employees', 'rols', 'statusUsers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login(){
        $this->viewBuilder()->setLayout('layout_login');
        //$this->viewBuilder()->setLayout(false);
        if($this->request->is('post')){
            $user = $this->Auth->Identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->set(__('Usuario o contraseña incorrecto'),['element' => 'error']);
        }
    }

    public function logout()
    {
        $session = $this->request->session();
        $session->destroy();
        return $this->redirect($this->Auth->logout());
    }


}
