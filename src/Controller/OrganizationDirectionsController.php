<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrganizationDirections Controller
 *
 * @property \App\Model\Table\OrganizationDirectionsTable $OrganizationDirections
 *
 * @method \App\Model\Entity\OrganizationDirection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationDirectionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $organizationDirections = $this->paginate($this->OrganizationDirections);

        $this->set(compact('organizationDirections'));
    }

    /**
     * View method
     *
     * @param string|null $id Organization Direction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizationDirection = $this->OrganizationDirections->get($id, [
            'contain' => ['OrganizationSubdirections']
        ]);

        $this->set('organizationDirection', $organizationDirection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizationDirection = $this->OrganizationDirections->newEntity();
        if ($this->request->is('post')) {
            $organizationDirection = $this->OrganizationDirections->patchEntity($organizationDirection, $this->request->getData());
            if ($this->OrganizationDirections->save($organizationDirection)) {
                $this->Flash->success(__('The organization direction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization direction could not be saved. Please, try again.'));
        }
        $this->set(compact('organizationDirection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization Direction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizationDirection = $this->OrganizationDirections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizationDirection = $this->OrganizationDirections->patchEntity($organizationDirection, $this->request->getData());
            if ($this->OrganizationDirections->save($organizationDirection)) {
                $this->Flash->success(__('The organization direction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization direction could not be saved. Please, try again.'));
        }
        $this->set(compact('organizationDirection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization Direction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizationDirection = $this->OrganizationDirections->get($id);
        if ($this->OrganizationDirections->delete($organizationDirection)) {
            $this->Flash->success(__('The organization direction has been deleted.'));
        } else {
            $this->Flash->error(__('The organization direction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getDirectionsAll(){
        $organization_directions = $this->OrganizationDirections->find('all');
        $this->set(compact('organization_directions'));
        $this->set('_serialize', ['organization_directions']);
    }
}
