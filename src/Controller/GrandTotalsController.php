<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GrandTotals Controller
 *
 * @property \App\Model\Table\GrandTotalsTable $GrandTotals
 */
class GrandTotalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $grandTotals = $this->paginate($this->GrandTotals);

        $this->set(compact('grandTotals'));
        $this->set('_serialize', ['grandTotals']);
    }

    /**
     * View method
     *
     * @param string|null $id Grand Total id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grandTotal = $this->GrandTotals->get($id, [
            'contain' => []
        ]);

        $this->set('grandTotal', $grandTotal);
        $this->set('_serialize', ['grandTotal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grandTotal = $this->GrandTotals->newEntity();
        if ($this->request->is('post')) {
            $grandTotal = $this->GrandTotals->patchEntity($grandTotal, $this->request->data);
            if ($this->GrandTotals->save($grandTotal)) {
                $this->Flash->success(__('The grand total has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grand total could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('grandTotal'));
        $this->set('_serialize', ['grandTotal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Grand Total id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grandTotal = $this->GrandTotals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grandTotal = $this->GrandTotals->patchEntity($grandTotal, $this->request->data);
            if ($this->GrandTotals->save($grandTotal)) {
                $this->Flash->success(__('The grand total has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grand total could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('grandTotal'));
        $this->set('_serialize', ['grandTotal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Grand Total id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grandTotal = $this->GrandTotals->get($id);
        if ($this->GrandTotals->delete($grandTotal)) {
            $this->Flash->success(__('The grand total has been deleted.'));
        } else {
            $this->Flash->error(__('The grand total could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
