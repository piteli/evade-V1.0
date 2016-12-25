<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NlogNskills5 Controller
 *
 * @property \App\Model\Table\NlogNskills5Table $NlogNskills5
 */
class NlogNskills5Controller extends AppController
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
        $nlogNskills5 = $this->paginate($this->NlogNskills5);

        $this->set(compact('nlogNskills5'));
        $this->set('poi',$this->Auth->User('role'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills5']);
    }

    /**
     * View method
     *
     * @param string|null $id Nlog Nskills5 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nlogNskills5 = $this->NlogNskills5->get($id, [
            'contain' => ['Nursings']
        ]);

        $this->set('nlogNskills5', $nlogNskills5);
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills5']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nlogNskills5 = $this->NlogNskills5->newEntity();
        if ($this->request->is('post')) {
            $nlogNskills5 = $this->NlogNskills5->patchEntity($nlogNskills5, $this->request->data);
            if ($this->NlogNskills5->save($nlogNskills5)) {
                $this->Flash->success(__('The nlog nskills5 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills5 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills5->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills5', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills5']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nlog Nskills5 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nlogNskills5 = $this->NlogNskills5->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nlogNskills5 = $this->NlogNskills5->patchEntity($nlogNskills5, $this->request->data);
            if ($this->NlogNskills5->save($nlogNskills5)) {
                $this->Flash->success(__('The nlog nskills5 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills5 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills5->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills5', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills5']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nlog Nskills5 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nlogNskills5 = $this->NlogNskills5->get($id);
        if ($this->NlogNskills5->delete($nlogNskills5)) {
            $this->Flash->success(__('The nlog nskills5 has been deleted.'));
        } else {
            $this->Flash->error(__('The nlog nskills5 could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function qnskills5($nursing_id = null, $nursing_name = null, $nursing_no = null){

        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);
        $this->set('wee3',$nursing_id);
         $this->set('wee4',$this->Auth->User('id'));

         $conditions11 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Care of client with peritoneal dialysis']];
        $user11 = $this->NlogNskills5->find('all',['conditions'=>$conditions11])->first();
        $this->set('user11',$user11);

        $conditions12 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Insertion of urinary catheter']];
        $user12 = $this->NlogNskills5->find('all',['conditions'=>$conditions12])->first();
        $this->set('user12',$user12);

        $conditions13 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Skeletal traction']];
        $user13 = $this->NlogNskills5->find('all',['conditions'=>$conditions13])->first();
        $this->set('user13',$user13);

        $conditions14 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Neurovascular assessment']];
        $user14 = $this->NlogNskills5->find('all',['conditions'=>$conditions14])->first();
        $this->set('user14',$user14);

        $conditions21 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Instillation of ear drops']];
        $user21 = $this->NlogNskills5->find('all',['conditions'=>$conditions21])->first();
        $this->set('user21',$user21);

        $conditions22 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Throat swab']];
        $user22 = $this->NlogNskills5->find('all',['conditions'=>$conditions22])->first();
        $this->set('user22',$user22);

        $conditions23 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Nasal swab']];
        $user23 = $this->NlogNskills5->find('all',['conditions'=>$conditions23])->first();
        $this->set('user23',$user23);

        $conditions24 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Blood transfusion']];
        $user24 = $this->NlogNskills5->find('all',['conditions'=>$conditions24])->first();
        $this->set('user24',$user24);

        $conditions31 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Eye swabbing']];
        $user31 = $this->NlogNskills5->find('all',['conditions'=>$conditions31])->first();
        $this->set('user31',$user31);

        $conditions32 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Instllation of eye drops']];
        $user32 = $this->NlogNskills5->find('all',['conditions'=>$conditions32])->first();
        $this->set('user32',$user32);

        $conditions33 = ['AND'=>['nursing_id'=>$nursing_id],['nskill5_Name'=>'Instillation of eye ointment']];
        $user33 = $this->NlogNskills5->find('all',['conditions'=>$conditions33])->first();
        $this->set('user33',$user33);

        $conditions34 = ['AND'=>['nursing_id'=>$nursing_id],['nskill5_Name'=>'Visual acuity examination']];
        $user34 = $this->NlogNskills5->find('all',['conditions'=>$conditions34])->first();
        $this->set('user34',$user34);

        $conditions41 = ['AND'=>['nursing_id'=>$nursing_id],['nskill5_Name'=>'Neurological of unconscious clients']];
        $user41 = $this->NlogNskills5->find('all',['conditions'=>$conditions41])->first();
        $this->set('user41',$user11);

        $conditions42 = ['AND'=>['nursing_id'=>$nursing_id],['nskill5_Name'=>'Neorological examination']];
        $user42 = $this->NlogNskills5->find('all',['conditions'=>$conditions42])->first();
        $this->set('user42',$user42);

        $conditions43 = ['AND'=>['nursing_id'=>$nursing_id],['nskill5_Name'=>'Glass gow Coma Slace']];
        $user43 = $this->NlogNskills5->find('all',['conditions'=>$conditions43])->first();
        $this->set('user43',$user43);

        $conditions51 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill5_Name'=>'Home visiting on post-natal mother']];
        $user51 = $this->NlogNskills5->find('all',['conditions'=>$conditions51])->first();
        $this->set('user51',$user51);

    

        $nlogNskill5 = $this->NlogNskills5->newEntity();
        if ($this->request->is('post')) {
            $nlogNskill5 = $this->NlogNskills5->patchEntity($nlogNskill5, $this->request->data);
            if ($this->NlogNskills5->save($nlogNskill5)) {
                $this->Flash->success(__('The nlog nskill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskill could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('nlogNskill5'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills5']);

    }
}
