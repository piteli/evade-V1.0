<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pelajar Controller
 *
 * @property \App\Model\Table\PelajarTable $Pelajar
 */
class PelajarController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students']
        ];
        $pelajar = $this->paginate($this->Pelajar);

        $this->set(compact('pelajar'));
        $this->set('_serialize', ['pelajar']);
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
        $pelajar = $this->Pelajar->get($id, [
            'contain' => ['Students']
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
        $pelajar = $this->Pelajar->newEntity();
        if ($this->request->is('post')) {
            $pelajar = $this->Pelajar->patchEntity($pelajar, $this->request->data);
            if ($this->Pelajar->save($pelajar)) {
                $this->Flash->success(__('The pelajar has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pelajar could not be saved. Please, try again.'));
            }
        }
        $students = $this->Pelajar->Students->find('list', ['limit' => 200]);
        $this->set(compact('pelajar', 'students'));
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
        $pelajar = $this->Pelajar->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pelajar = $this->Pelajar->patchEntity($pelajar, $this->request->data);
            if ($this->Pelajar->save($pelajar)) {
                $this->Flash->success(__('The pelajar has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pelajar could not be saved. Please, try again.'));
            }
        }
        $students = $this->Pelajar->Students->find('list', ['limit' => 200]);
        $this->set(compact('pelajar', 'students'));
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
        $pelajar = $this->Pelajar->get($id);
        if ($this->Pelajar->delete($pelajar)) {
            $this->Flash->success(__('The pelajar has been deleted.'));
        } else {
            $this->Flash->error(__('The pelajar could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
