<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NlogNskills6 Controller
 *
 * @property \App\Model\Table\NlogNskills6Table $NlogNskills6
 */
class NlogNskills6Controller extends AppController
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
        $nlogNskills6 = $this->paginate($this->NlogNskills6);

        $this->set(compact('nlogNskills6'));
        $this->set('poi',$this->Auth->User('role'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills6']);
    }

    /**
     * View method
     *
     * @param string|null $id Nlog Nskills6 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nlogNskills6 = $this->NlogNskills6->get($id, [
            'contain' => ['Nursings']
        ]);

        $this->set('nlogNskills6', $nlogNskills6);
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills6']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nlogNskills6 = $this->NlogNskills6->newEntity();
        if ($this->request->is('post')) {
            $nlogNskills6 = $this->NlogNskills6->patchEntity($nlogNskills6, $this->request->data);
            if ($this->NlogNskills6->save($nlogNskills6)) {
                $this->Flash->success(__('The nlog nskills6 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills6 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills6->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills6', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills6']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nlog Nskills6 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nlogNskills6 = $this->NlogNskills6->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nlogNskills6 = $this->NlogNskills6->patchEntity($nlogNskills6, $this->request->data);
            if ($this->NlogNskills6->save($nlogNskills6)) {
                $this->Flash->success(__('The nlog nskills6 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills6 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills6->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills6', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills6']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nlog Nskills6 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nlogNskills6 = $this->NlogNskills6->get($id);
        if ($this->NlogNskills6->delete($nlogNskills6)) {
            $this->Flash->success(__('The nlog nskills6 has been deleted.'));
        } else {
            $this->Flash->error(__('The nlog nskills6 could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

     public function qnskills6($nursing_id = null, $nursing_name = null, $nursing_no = null){

        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);
        $this->set('wee3',$nursing_id);
        $this->set('wee4',$this->Auth->User('id'));

        $conditions11 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Taking and handling over shift report']];
        $user11 = $this->NlogNskills6->find('all',['conditions'=>$conditions11])->first();
        $this->set('user11',$user11);

        $conditions12 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Writing the clients report']];
        $user12 = $this->NlogNskills6->find('all',['conditions'=>$conditions12])->first();
        $this->set('user12',$user12);

        $conditions13 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Indenting ward supplies']];
        $user13 = $this->NlogNskills6->find('all',['conditions'=>$conditions13])->first();
        $this->set('user13',$user13);

        $conditions14 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Inventory of Dangerous Drug']];
        $user14 = $this->NlogNskills6->find('all',['conditions'=>$conditions14])->first();
        $this->set('user14',$user14);

        $conditions15 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Client care during admission and emergency']];
        $user15 = $this->NlogNskills6->find('all',['conditions'=>$conditions15])->first();
        $this->set('user15',$user15);

        $conditions16 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Managing clients discharges']];
        $user16 = $this->NlogNskills6->find('all',['conditions'=>$conditions16])->first();
        $this->set('user16',$user16);

        $conditions17 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Neurovascular assessment']];
        $user17 = $this->NlogNskills6->find('all',['conditions'=>$conditions17])->first();
        $this->set('user17',$user17);

        $conditions21 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Instillation of ear drops']];
        $user21 = $this->NlogNskills6->find('all',['conditions'=>$conditions21])->first();
        $this->set('user21',$user21);

        $conditions22 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Within interdisciplinary health team']];
        $user22 = $this->NlogNskills6->find('all',['conditions'=>$conditions22])->first();
        $this->set('user22',$user22);

        $conditions23 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Client - Nurse therapeutic skills']];
        $user23 = $this->NlogNskills6->find('all',['conditions'=>$conditions23])->first();
        $this->set('user23',$user23);

        $conditions31 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill6_Name'=>'Insertion of intravenous line']];
        $user31 = $this->NlogNskills6->find('all',['conditions'=>$conditions31])->first();
        $this->set('user31',$user31);

        $nlogNskill6 = $this->NlogNskills6->newEntity();
        if ($this->request->is('post')) {
            $nlogNskill6 = $this->NlogNskills6->patchEntity($nlogNskill6, $this->request->data);
            if ($this->NlogNskills6->save($nlogNskill6)) {
                $this->Flash->success(__('The nlog nskill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The nlog nskill could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('nlogNskill6'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills6']);

    }
}
