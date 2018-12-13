<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StatusUsers Controller
 *
 * @property \App\Model\Table\StatusUsersTable $StatusUsers
 *
 * @method \App\Model\Entity\StatusUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $statusUsers = $this->paginate($this->StatusUsers);

        $this->set(compact('statusUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Status User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusUser = $this->StatusUsers->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('statusUser', $statusUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusUser = $this->StatusUsers->newEntity();
        if ($this->request->is('post')) {
            $statusUser = $this->StatusUsers->patchEntity($statusUser, $this->request->getData());
            if ($this->StatusUsers->save($statusUser)) {
                $this->Flash->success(__('The status user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status user could not be saved. Please, try again.'));
        }
        $this->set(compact('statusUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Status User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusUser = $this->StatusUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusUser = $this->StatusUsers->patchEntity($statusUser, $this->request->getData());
            if ($this->StatusUsers->save($statusUser)) {
                $this->Flash->success(__('The status user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status user could not be saved. Please, try again.'));
        }
        $this->set(compact('statusUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Status User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusUser = $this->StatusUsers->get($id);
        if ($this->StatusUsers->delete($statusUser)) {
            $this->Flash->success(__('The status user has been deleted.'));
        } else {
            $this->Flash->error(__('The status user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
