<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AreaskillAttributes Controller
 *
 * @property \App\Model\Table\AreaskillAttributesTable $AreaskillAttributes
 */
class AreaskillAttributesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Nursings']
        ];
        $areaskillAttributes = $this->paginate($this->AreaskillAttributes);

        $this->set(compact('areaskillAttributes'));
        $this->set('_serialize', ['areaskillAttributes']);
    }

    /**
     * View method
     *
     * @param string|null $id Areaskill Attribute id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areaskillAttribute = $this->AreaskillAttributes->get($id, [
            'contain' => ['Nursings']
        ]);

        $this->set('areaskillAttribute', $areaskillAttribute);
        $this->set('_serialize', ['areaskillAttribute']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
   /* public function add()
    {
        $areaskillAttribute = $this->AreaskillAttributes->newEntity();
        if ($this->request->is('post')) {
            $areaskillAttribute = $this->AreaskillAttributes->patchEntity($areaskillAttribute, $this->request->data);
            if ($this->AreaskillAttributes->save($areaskillAttribute)) {
                $this->Flash->success(__('The areaskill attribute has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The areaskill attribute could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->AreaskillAttributes->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('areaskillAttribute', 'nursings'));
        $this->set('_serialize', ['areaskillAttribute']);
    }  */

    /**
     * Edit method
     *
     * @param string|null $id Areaskill Attribute id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($Attribute_Id = null)
    {
        $areaskillAttribute = $this->AreaskillAttributes->get($Attribute_Id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areaskillAttribute = $this->AreaskillAttributes->patchEntity($areaskillAttribute, $this->request->data);
            if ($this->AreaskillAttributes->save($areaskillAttribute)) {
                $this->Flash->success(__('The areaskill attribute has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The areaskill attribute could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->AreaskillAttributes->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('areaskillAttribute', 'nursings'));
        $this->set('_serialize', ['areaskillAttribute']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Areaskill Attribute id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areaskillAttribute = $this->AreaskillAttributes->get($id);
        if ($this->AreaskillAttributes->delete($areaskillAttribute)) {
            $this->Flash->success(__('The areaskill attribute has been deleted.'));
        } else {
            $this->Flash->error(__('The areaskill attribute could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function areaskill($nursing_id = null, $nursing_name = null, $nursing_no = null)
    {
        
     /*   $users = $this->AreaskillAttributes->get($nursing_name, [
            'contain' => []
        ]);

        $this->set('users', $users);
        $this->set('_serialize', ['users']);
      */
        $this->set('wee',$nursing_name);
        $this->set('wee2',$nursing_no);
        $this->set('wee3',$nursing_id);
        $this->set('dong',$this->Auth->User('role'));
       // $id = $this->request->query('nursing_name');
      //  $this->set('wee',$id);    
                
      //  $posts = $this->set('posts', $this->AreaskillAttributes->save($nursing_name));

     //   $message = array("Message"=>array("nursing_name"=>$nursing_name,"nursing_sem"=>$nursing_sem));
     //   $this->Message->save($message);


        $areaskill = $this->AreaskillAttributes->newEntity();
        if ($this->request->is('post')) {
            $areaskill = $this->AreaskillAttributes->patchEntity($areaskill, $this->request->data);
            if ($this->AreaskillAttributes->save($areaskill)) {
                $this->Flash->success(__('The evaluation has been saved.'));
                return $this->redirect(['controller' => 'users','action' => 'ci2']);
            } else {
                $this->Flash->error(__('The evaluation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areaskill'));

        $areaskill2 = $this->AreaskillAttributes->newEntity();
        if ($this->request->is('post')) {
            $areaskill2 = $this->AreaskillAttributes->patchEntity($areaskill2, $this->request->data);
            if ($this->AreaskillAttributes->save($areaskill2)) {
                $this->Flash->success(__('The evaluation has been saved.'));
                return $this->redirect(['controller' => 'users','action' => 'ci2']);
            } else {
                $this->Flash->error(__('The evaluation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areaskill2'));

        $this->set('_serialize', ['areaskillAttributes']);
    }
}
