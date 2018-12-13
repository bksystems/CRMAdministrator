<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TestFields Controller
 *
 * @property \App\Model\Table\TestFieldsTable $TestFields
 *
 * @method \App\Model\Entity\TestField[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestFieldsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $testFields = $this->paginate($this->TestFields);

        $this->set(compact('testFields'));
    }

    /**
     * View method
     *
     * @param string|null $id Test Field id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testField = $this->TestFields->get($id, [
            'contain' => []
        ]);

        $this->set('testField', $testField);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testField = $this->TestFields->newEntity();
        if ($this->request->is('post')) {
            $testField = $this->TestFields->patchEntity($testField, $this->request->getData());
            if ($this->TestFields->save($testField)) {
                $this->Flash->success(__('The test field has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test field could not be saved. Please, try again.'));
        }
        $this->set(compact('testField'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Test Field id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testField = $this->TestFields->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testField = $this->TestFields->patchEntity($testField, $this->request->getData());
            if ($this->TestFields->save($testField)) {
                $this->Flash->success(__('The test field has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test field could not be saved. Please, try again.'));
        }
        $this->set(compact('testField'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Test Field id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testField = $this->TestFields->get($id);
        if ($this->TestFields->delete($testField)) {
            $this->Flash->success(__('The test field has been deleted.'));
        } else {
            $this->Flash->error(__('The test field could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
