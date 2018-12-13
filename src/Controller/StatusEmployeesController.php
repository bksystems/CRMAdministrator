<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StatusEmployees Controller
 *
 * @property \App\Model\Table\StatusEmployeesTable $StatusEmployees
 *
 * @method \App\Model\Entity\StatusEmployee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusEmployeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $statusEmployees = $this->paginate($this->StatusEmployees);

        $this->set(compact('statusEmployees'));
    }

    /**
     * View method
     *
     * @param string|null $id Status Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusEmployee = $this->StatusEmployees->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('statusEmployee', $statusEmployee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusEmployee = $this->StatusEmployees->newEntity();
        if ($this->request->is('post')) {
            $statusEmployee = $this->StatusEmployees->patchEntity($statusEmployee, $this->request->getData());
            if ($this->StatusEmployees->save($statusEmployee)) {
                $this->Flash->success(__('The status employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status employee could not be saved. Please, try again.'));
        }
        $this->set(compact('statusEmployee'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Status Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusEmployee = $this->StatusEmployees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusEmployee = $this->StatusEmployees->patchEntity($statusEmployee, $this->request->getData());
            if ($this->StatusEmployees->save($statusEmployee)) {
                $this->Flash->success(__('The status employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status employee could not be saved. Please, try again.'));
        }
        $this->set(compact('statusEmployee'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Status Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusEmployee = $this->StatusEmployees->get($id);
        if ($this->StatusEmployees->delete($statusEmployee)) {
            $this->Flash->success(__('The status employee has been deleted.'));
        } else {
            $this->Flash->error(__('The status employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
