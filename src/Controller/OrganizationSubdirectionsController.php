<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrganizationSubdirections Controller
 *
 * @property \App\Model\Table\OrganizationSubdirectionsTable $OrganizationSubdirections
 *
 * @method \App\Model\Entity\OrganizationSubdirection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationSubdirectionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OrganizationDirections']
        ];
        $organizationSubdirections = $this->paginate($this->OrganizationSubdirections);

        $this->set(compact('organizationSubdirections'));
    }

    /**
     * View method
     *
     * @param string|null $id Organization Subdirection id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizationSubdirection = $this->OrganizationSubdirections->get($id, [
            'contain' => ['OrganizationDirections']
        ]);

        $this->set('organizationSubdirection', $organizationSubdirection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizationSubdirection = $this->OrganizationSubdirections->newEntity();
        if ($this->request->is('post')) {
            $organizationSubdirection = $this->OrganizationSubdirections->patchEntity($organizationSubdirection, $this->request->getData());
            if ($this->OrganizationSubdirections->save($organizationSubdirection)) {
                $this->Flash->success(__('The organization subdirection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization subdirection could not be saved. Please, try again.'));
        }
        $organizationDirections = $this->OrganizationSubdirections->OrganizationDirections->find('list', ['limit' => 200]);
        $this->set(compact('organizationSubdirection', 'organizationDirections'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization Subdirection id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizationSubdirection = $this->OrganizationSubdirections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizationSubdirection = $this->OrganizationSubdirections->patchEntity($organizationSubdirection, $this->request->getData());
            if ($this->OrganizationSubdirections->save($organizationSubdirection)) {
                $this->Flash->success(__('The organization subdirection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization subdirection could not be saved. Please, try again.'));
        }
        $organizationDirections = $this->OrganizationSubdirections->OrganizationDirections->find('list', ['limit' => 200]);
        $this->set(compact('organizationSubdirection', 'organizationDirections'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization Subdirection id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizationSubdirection = $this->OrganizationSubdirections->get($id);
        if ($this->OrganizationSubdirections->delete($organizationSubdirection)) {
            $this->Flash->success(__('The organization subdirection has been deleted.'));
        } else {
            $this->Flash->error(__('The organization subdirection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getSubdirectionsAll(){
        $organization_subdirecctions_all = $this->OrganizationSubdirections->find()
        ->select([
            'id' => 'OrganizationSubdirections.id',
            'name' => 'OrganizationSubdirections.name',
            'description' => 'OrganizationSubdirections.description',
            'enabled' => 'OrganizationSubdirections.enabled',
            'direction_id' => 'd.id',
            'direction_name' => 'd.name'
        ])
        ->join([
            'd' => [
                'table' => 'organization_directions',
                'type' => 'INNER',
                'conditions' => 'OrganizationSubdirections.organization_direction_id = d.id' 
            ]
        ]);
        $this->set(compact('organization_subdirecctions_all'));
        $this->set('_serialize', ['organization_subdirecctions_all']);
    }

}
