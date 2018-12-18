<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Organizations Controller
 *
 * @property \App\Model\Table\OrganizationsTable $Organizations
 *
 * @method \App\Model\Entity\Organization[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        /*$this->paginate = [
            'contain' => ['TypeOrganizations']
        ];*/
        //$organizations = $this->paginate($this->Organizations);

        $organizationsFilter = $this->Organizations->find()
        ->select([
            'id' => 'Organizations.id',
            'name' => 'Organizations.name',
            'name_level' => 'o.name',
            'type_organization' => 't.type',
            'type_organization_id' => 't.id',
            'enabled' => 'Organizations.enabled',
            'description' => 'Organizations.description',
        ])
        ->join([
            'o' => [
                'table' => 'organizations',
                'type' => 'LEFT',
                'conditions' => 'Organizations.organization_id = o.id' 
            ]
        ])
        ->join([
            t => [
                'table' => 'type_organizations',
                'type' => 'INNER',
                'conditions' => 'Organizations.type_organization_id  = t.id'
            ]
        ])
        ->order([
            'o.name' => 'ASC'
        ]);

        $organizations = $this->paginate($organizationsFilter);

        $this->set(compact('organizations'));
    }

    /**
     * View method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organization = $this->Organizations->get($id, [
            'contain' => ['TypeOrganizations', 'Organizations']
        ]);

        $this->set('organization', $organization);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organization = $this->Organizations->newEntity();
        if ($this->request->is('post')) {
            $organization = $this->Organizations->patchEntity($organization, $this->request->getData());
            if ($this->Organizations->save($organization)) {
                $this->Flash->success(__('The organization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization could not be saved. Please, try again.'));
        }
        $typeOrganizations = $this->Organizations->TypeOrganizations->find('list', ['limit' => 200]);
        $organizations = $this->Organizations->find('list', ['limit' => 200]);
        $this->set(compact('organization', 'typeOrganizations', 'organizations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organization = $this->Organizations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organization = $this->Organizations->patchEntity($organization, $this->request->getData());
            if ($this->Organizations->save($organization)) {
                $this->Flash->success(__('The organization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization could not be saved. Please, try again.'));
        }
        $typeOrganizations = $this->Organizations->TypeOrganizations->find('list', ['limit' => 200]);
        $this->set(compact('organization', 'typeOrganizations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organization = $this->Organizations->get($id);
        if ($this->Organizations->delete($organization)) {
            $this->Flash->success(__('The organization has been deleted.'));
        } else {
            $this->Flash->error(__('The organization could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getOrganizationAll(){
        $organizations = $this->Organizations->find()
        ->select([
            'id' => 'Organizations.id',
            'name' => 'Organizations.name',
            'namePadre' => 'o.name',
        ])
        ->join([
            'o' => [
                'table' => 'organizations',
                'type' => 'LEFT',
                'conditions' => 'Organizations.organization_id = o.id' 
            ]
        ]);

        $this->set(compact('organizations'));
        $this->set('_serialize', ['organizations']);
    }
}
