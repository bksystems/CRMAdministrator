<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrganizationOffices Controller
 *
 * @property \App\Model\Table\OrganizationOfficesTable $OrganizationOffices
 *
 * @method \App\Model\Entity\OrganizationOffice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationOfficesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OrganizationSubdirections', 'OrganizationTypes']
        ];
        $organizationOffices = $this->paginate($this->OrganizationOffices);

        $this->set(compact('organizationOffices'));
    }

    /**
     * View method
     *
     * @param string|null $id Organization Office id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizationOffice = $this->OrganizationOffices->get($id, [
            'contain' => ['OrganizationSubdirections', 'OrganizationTypes']
        ]);

        $this->set('organizationOffice', $organizationOffice);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizationOffice = $this->OrganizationOffices->newEntity();
        if ($this->request->is('post')) {
            $organizationOffice = $this->OrganizationOffices->patchEntity($organizationOffice, $this->request->getData());
            if ($this->OrganizationOffices->save($organizationOffice)) {
                $this->Flash->success(__('The organization office has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization office could not be saved. Please, try again.'));
        }
        $organizationDirections = $this->OrganizationOffices->OrganizationSubdirections->OrganizationDirections->find('list', ['limit' => 200]);
        $organizationSubdirections = $this->OrganizationOffices->OrganizationSubdirections->find('list', ['limit' => 200]);
        $organizationTypes = $this->OrganizationOffices->OrganizationTypes->find('list', ['limit' => 200]);
        $this->set(compact('organizationOffice', 'organizationDirections', 'organizationSubdirections', 'organizationTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization Office id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizationOffice = $this->OrganizationOffices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizationOffice = $this->OrganizationOffices->patchEntity($organizationOffice, $this->request->getData());
            if ($this->OrganizationOffices->save($organizationOffice)) {
                $this->Flash->success(__('The organization office has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization office could not be saved. Please, try again.'));
        }
        $organizationDirections = $this->OrganizationOffices->OrganizationSubdirections->OrganizationDirections->find('list', ['limit' => 200]);
        $organizationSubdirections = $this->OrganizationOffices->OrganizationSubdirections->find('list', ['limit' => 200]);
        $organizationTypes = $this->OrganizationOffices->OrganizationTypes->find('list', ['limit' => 200]);
        $this->set(compact('organizationOffice', 'organizationDirections', 'organizationSubdirections', 'organizationTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization Office id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizationOffice = $this->OrganizationOffices->get($id);
        if ($this->OrganizationOffices->delete($organizationOffice)) {
            $this->Flash->success(__('The organization office has been deleted.'));
        } else {
            $this->Flash->error(__('The organization office could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function ajaxGetSubdirections($id = null){
        $organizationSubdirections = $this->OrganizationOffices->OrganizationSubdirections
        ->find('list')
        ->where(['OrganizationSubdirections.organization_direction_id' => $id]);
        $this->set(compact('organizationSubdirections'));
        $this->set('_serialize', ['organizationSubdirections']);
    }

   public function getOfficesAll(){
        $organization_offices_all = $this->OrganizationOffices->find()
        ->select([
            'id' => 'OrganizationOffices.id',
            'cost_center' => 'OrganizationOffices.cost_center',
            'name' => 'OrganizationOffices.name',
            'type' => 't.type',
            'description' => 'OrganizationOffices.description',
            'enabled' => 'OrganizationOffices.enabled',
            'subdirection_id' => 's.id',
            'subdirection_name' => 's.name'
        ])
        ->join([
            's' => [
                'table' => 'organization_subdirections',
                'type' => 'INNER',
                'conditions' => 'OrganizationOffices.organization_subdirection_id = s.id' 
            ]
        ])
        ->join([
            't' => [
                'table' => 'organization_types',
                'type' => 'INNER',
                'conditions' => 'OrganizationOffices.organization_type_id = t.id'
            ]
        ]);

        $this->set(compact('organization_offices_all'));
        $this->set('_serialize', ['organization_offices_all']);
    }

}
