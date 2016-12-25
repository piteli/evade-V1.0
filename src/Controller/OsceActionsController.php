<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OsceActions Controller
 *
 * @property \App\Model\Table\OsceActionsTable $OsceActions
 */
class OsceActionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
    
        $osceActions = $this->paginate($this->OsceActions);

        $this->set(compact('osceActions'));
        $this->set('_serialize', ['osceActions']);
    }

    /**
     * View method
     *
     * @param string|null $id Osce Action id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $osceAction = $this->OsceActions->get($id, [
        ]);

        $this->set('osceAction', $osceAction);
        $this->set('_serialize', ['osceAction']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $osceAction = $this->OsceActions->newEntity();
        if ($this->request->is('post')) {
            $osceAction = $this->OsceActions->patchEntity($osceAction, $this->request->data);
            if ($this->OsceActions->save($osceAction)) {
                $this->Flash->success(__('The osce action has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The osce action could not be saved. Please, try again.'));
            }
        }
        $acts = $this->OsceActions->find('list', ['limit' => 200]);
        $this->set(compact('osceAction'));
        $this->set('_serialize', ['osceAction']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Osce Action id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $osceAction = $this->OsceActions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $osceAction = $this->OsceActions->patchEntity($osceAction, $this->request->data);
            if ($this->OsceActions->save($osceAction)) {
                $this->Flash->success(__('The osce action has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The osce action could not be saved. Please, try again.'));
            }
        }
        $acts = $this->OsceActions->find('list', ['limit' => 200]);
        $this->set(compact('osceAction'));
        $this->set('_serialize', ['osceAction']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Osce Action id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $osceAction = $this->OsceActions->get($id);
        if ($this->OsceActions->delete($osceAction)) {
            $this->Flash->success(__('The osce action has been deleted.'));
        } else {
            $this->Flash->error(__('The osce action could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
