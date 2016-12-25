<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pelajars Controller
 *
 * @property \App\Model\Table\PelajarsTable $Pelajars
 */
class PelajarsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pelajars']
        ];
        $pelajars = $this->paginate($this->Pelajars);

        $this->set(compact('pelajars'));
        $this->set('_serialize', ['pelajars']);
    }

    /**
     * View method
     *
     * @param string|null $id Pelajar id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pelajar = $this->Pelajars->get($id, [
            'contain' => ['Pelajars']
        ]);

        $this->set('pelajar', $pelajar);
        $this->set('_serialize', ['pelajar']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pelajar = $this->Pelajars->newEntity();
        if ($this->request->is('post')) {
            $pelajar = $this->Pelajars->patchEntity($pelajar, $this->request->data);
            if ($this->Pelajars->save($pelajar)) {
                $this->Flash->success(__('The pelajar has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pelajar could not be saved. Please, try again.'));
            }
        }
        $pelajars = $this->Pelajars->Pelajars->find('list', ['limit' => 200]);
        $this->set(compact('pelajar', 'pelajars'));
        $this->set('_serialize', ['pelajar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pelajar id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pelajar = $this->Pelajars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pelajar = $this->Pelajars->patchEntity($pelajar, $this->request->data);
            if ($this->Pelajars->save($pelajar)) {
                $this->Flash->success(__('The pelajar has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pelajar could not be saved. Please, try again.'));
            }
        }
        $pelajars = $this->Pelajars->Pelajars->find('list', ['limit' => 200]);
        $this->set(compact('pelajar', 'pelajars'));
        $this->set('_serialize', ['pelajar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pelajar id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pelajar = $this->Pelajars->get($id);
        if ($this->Pelajars->delete($pelajar)) {
            $this->Flash->success(__('The pelajar has been deleted.'));
        } else {
            $this->Flash->error(__('The pelajar could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
