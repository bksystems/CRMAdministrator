<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RolsPermissions Controller
 *
 * @property \App\Model\Table\RolsPermissionsTable $RolsPermissions
 *
 * @method \App\Model\Entity\RolsPermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolsPermissionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rols', 'Permissions']
        ];
        $rolsPermissions = $this->paginate($this->RolsPermissions);

        $this->set(compact('rolsPermissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Rols Permission id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolsPermission = $this->RolsPermissions->get($id, [
            'contain' => ['Rols', 'Permissions']
        ]);

        $this->set('rolsPermission', $rolsPermission);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolsPermission = $this->RolsPermissions->newEntity();
        if ($this->request->is('post')) {
            $rolsPermission = $this->RolsPermissions->patchEntity($rolsPermission, $this->request->getData());
            if ($this->RolsPermissions->save($rolsPermission)) {
                $this->Flash->success(__('The rols permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rols permission could not be saved. Please, try again.'));
        }
        $rols = $this->RolsPermissions->Rols->find('list', ['limit' => 200]);
        $permissions = $this->RolsPermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('rolsPermission', 'rols', 'permissions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rols Permission id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolsPermission = $this->RolsPermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolsPermission = $this->RolsPermissions->patchEntity($rolsPermission, $this->request->getData());
            if ($this->RolsPermissions->save($rolsPermission)) {
                $this->Flash->success(__('The rols permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rols permission could not be saved. Please, try again.'));
        }
        $rols = $this->RolsPermissions->Rols->find('list', ['limit' => 200]);
        $permissions = $this->RolsPermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('rolsPermission', 'rols', 'permissions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rols Permission id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolsPermission = $this->RolsPermissions->get($id);
        if ($this->RolsPermissions->delete($rolsPermission)) {
            $this->Flash->success(__('The rols permission has been deleted.'));
        } else {
            $this->Flash->error(__('The rols permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
