<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployeePositions Controller
 *
 * @property \App\Model\Table\EmployeePositionsTable $EmployeePositions
 *
 * @method \App\Model\Entity\EmployeePosition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeePositionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $employeePositions = $this->paginate($this->EmployeePositions);

        $this->set(compact('employeePositions'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee Position id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeePosition = $this->EmployeePositions->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('employeePosition', $employeePosition);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeePosition = $this->EmployeePositions->newEntity();
        if ($this->request->is('post')) {
            $employeePosition = $this->EmployeePositions->patchEntity($employeePosition, $this->request->getData());
            if ($this->EmployeePositions->save($employeePosition)) {
                $this->Flash->success(__('The employee position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee position could not be saved. Please, try again.'));
        }
        $this->set(compact('employeePosition'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee Position id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeePosition = $this->EmployeePositions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeePosition = $this->EmployeePositions->patchEntity($employeePosition, $this->request->getData());
            if ($this->EmployeePositions->save($employeePosition)) {
                $this->Flash->success(__('The employee position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee position could not be saved. Please, try again.'));
        }
        $this->set(compact('employeePosition'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee Position id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeePosition = $this->EmployeePositions->get($id);
        if ($this->EmployeePositions->delete($employeePosition)) {
            $this->Flash->success(__('The employee position has been deleted.'));
        } else {
            $this->Flash->error(__('The employee position could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
