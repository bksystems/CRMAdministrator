<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeOrganizations Controller
 *
 * @property \App\Model\Table\TypeOrganizationsTable $TypeOrganizations
 *
 * @method \App\Model\Entity\TypeOrganization[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeOrganizationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typeOrganizations = $this->paginate($this->TypeOrganizations);

        $this->set(compact('typeOrganizations'));
    }

    /**
     * View method
     *
     * @param string|null $id Type Organization id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeOrganization = $this->TypeOrganizations->get($id, [
            'contain' => ['Organizations']
        ]);

        $this->set('typeOrganization', $typeOrganization);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeOrganization = $this->TypeOrganizations->newEntity();
        if ($this->request->is('post')) {
            $typeOrganization = $this->TypeOrganizations->patchEntity($typeOrganization, $this->request->getData());
            if ($this->TypeOrganizations->save($typeOrganization)) {
                $this->Flash->success(__('The type organization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type organization could not be saved. Please, try again.'));
        }
        $this->set(compact('typeOrganization'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Organization id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeOrganization = $this->TypeOrganizations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeOrganization = $this->TypeOrganizations->patchEntity($typeOrganization, $this->request->getData());
            if ($this->TypeOrganizations->save($typeOrganization)) {
                $this->Flash->success(__('The type organization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type organization could not be saved. Please, try again.'));
        }
        $this->set(compact('typeOrganization'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Organization id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeOrganization = $this->TypeOrganizations->get($id);
        if ($this->TypeOrganizations->delete($typeOrganization)) {
            $this->Flash->success(__('The type organization has been deleted.'));
        } else {
            $this->Flash->error(__('The type organization could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
