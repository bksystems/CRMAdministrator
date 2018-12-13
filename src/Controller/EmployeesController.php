<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 *
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OrganizationOffices', 'EmployeePositions', 'StatusEmployees']
        ];
        $employees = $this->paginate($this->Employees);

        $this->set(compact('employees'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['OrganizationOffices', 'EmployeePositions', 'StatusEmployees', 'Users']
        ]);

        $this->set('employee', $employee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $organizationOffices = $this->Employees->OrganizationOffices->find('list', ['limit' => 200]);
        $employeePositions = $this->Employees->EmployeePositions->find('list', ['limit' => 200]);
        $statusEmployees = $this->Employees->StatusEmployees->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'organizationOffices', 'employeePositions', 'statusEmployees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $organizationOffices = $this->Employees->OrganizationOffices->find('list', ['limit' => 200]);
        $employeePositions = $this->Employees->EmployeePositions->find('list', ['limit' => 200]);
        $statusEmployees = $this->Employees->StatusEmployees->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'organizationOffices', 'employeePositions', 'statusEmployees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function ajaxGetDirectionsAll($id = null){
        $organizationDirections = $this->Employees->OrganizationOffices->OrganizationSubdirections->OrganizationDirections
        ->find('list')
        ->where(['enabled' => 1]);
        $this->set(compact('organizationDirections'));
        $this->set('_serialize', ['organizationDirections']);
    }

    public function ajaxGetSubdirections($id = null){
        $organizationSubdirections = $this->Employees->OrganizationOffices->OrganizationSubdirections
        ->find('list')
        ->where(['OrganizationSubdirections.organization_direction_id' => $id]);
        $this->set(compact('organizationSubdirections'));
        $this->set('_serialize', ['organizationSubdirections']);
    }

    public function ajaxGetOffices($id = null){
        $organizationOffices = $this->Employees->OrganizationOffices
        ->find('list')
        ->where(['OrganizationOffices.organization_subdirection_id' => $id]);
        $this->set(compact('organizationOffices'));
        $this->set('_serialize', ['organizationOffices']);
    }

}
