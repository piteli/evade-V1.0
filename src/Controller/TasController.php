<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tas Controller
 *
 * @property \App\Model\Table\TasTable $Tas
 */
class TasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        
        $tas = $this->paginate($this->Tas);

        $this->set(compact('tas'));
        $this->set('_serialize', ['tas']);
    }

    /**
     * View method
     *
     * @param string|null $id Ta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ta = $this->Tas->get($id, [
            'contain' => ['Tas']
        ]);

        $this->set('ta', $ta);
        $this->set('_serialize', ['ta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    





        $ta = $this->Tas->newEntity();
        if ($this->request->is('post')) {
            $ta = $this->Tas->patchEntity($ta, $this->request->data);
            if ($this->Tas->save($ta)) {
                $this->Flash->success(__('The ta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ta could not be saved. Please, try again.'));
            }
        }
        $tas = $this->Tas->Tas->find('list', ['limit' => 200]);
        $this->set(compact('ta', 'tas'));
        $this->set('_serialize', ['ta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ta = $this->Tas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ta = $this->Tas->patchEntity($ta, $this->request->data);
            if ($this->Tas->save($ta)) {
                $this->Flash->success(__('The ta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ta could not be saved. Please, try again.'));
            }
        }
        $tas = $this->Tas->Tas->find('list', ['limit' => 200]);
        $this->set(compact('ta', 'tas'));
        $this->set('_serialize', ['ta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ta = $this->Tas->get($id);
        if ($this->Tas->delete($ta)) {
            $this->Flash->success(__('The ta has been deleted.'));
        } else {
            $this->Flash->error(__('The ta could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
