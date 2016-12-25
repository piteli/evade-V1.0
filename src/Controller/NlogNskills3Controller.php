<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NlogNskills3 Controller
 *
 * @property \App\Model\Table\NlogNskills3Table $NlogNskills3
 */
class NlogNskills3Controller extends AppController
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
        $nlogNskills3 = $this->paginate($this->NlogNskills3);

        $this->set(compact('nlogNskills3'));
        $this->set('poi',$this->Auth->User('role'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills3']);
    }

    /**
     * View method
     *
     * @param string|null $id Nlog Nskills3 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nlogNskills3 = $this->NlogNskills3->get($id);

        $this->set('nlogNskills3', $nlogNskills3);
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills3']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nlogNskills3 = $this->NlogNskills3->newEntity();
        if ($this->request->is('post')) {
            $nlogNskills3 = $this->NlogNskills3->patchEntity($nlogNskills3, $this->request->data);
            if ($this->NlogNskills3->save($nlogNskills3)) {
                $this->Flash->success(__('The nlog nskills3 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills3 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills3->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills3', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills3']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nlog Nskills3 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nlogNskills3 = $this->NlogNskills3->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nlogNskills3 = $this->NlogNskills3->patchEntity($nlogNskills3, $this->request->data);
            if ($this->NlogNskills3->save($nlogNskills3)) {
                $this->Flash->success(__('The nlog nskills3 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills3 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills3->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills3', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills3']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nlog Nskills3 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->set('dong',$this->Auth->User('role'));
        $this->request->allowMethod(['post', 'delete']);
        $nlogNskills3 = $this->NlogNskills3->get($id);
        if ($this->NlogNskills3->delete($nlogNskills3)) {
            $this->Flash->success(__('The nlog nskills3 has been deleted.'));
        } else {
            $this->Flash->error(__('The nlog nskills3 could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

     public function qnskills3($nursing_id = null, $nursing_name = null, $nursing_no = null){

        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);
        $this->set('wee3',$nursing_id);
        $this->set('wee4',$this->Auth->User('id'));

        $conditions11 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Plaster of paris (POP) cast']];
        $user11 = $this->NlogNskills3->find('all',['conditions'=>$conditions11])->first();
        $this->set('user11',$user11);

        $conditions12 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Skin traction']];
        $user12 = $this->NlogNskills3->find('all',['conditions'=>$conditions12])->first();
        $this->set('user12',$user12);

        $conditions13 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Skeletal traction']];
        $user13 = $this->NlogNskills3->find('all',['conditions'=>$conditions13])->first();
        $this->set('user13',$user13);

        $conditions14 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Neurovascular assessment']];
        $user14 = $this->NlogNskills3->find('all',['conditions'=>$conditions14])->first();
        $this->set('user14',$user14);

        $conditions21 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Prepare for the intravenous set up']];
        $user21 = $this->NlogNskills3->find('all',['conditions'=>$conditions21])->first();
        $this->set('user21',$user21);

        $conditions22 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Preparing i/v regime and calculation of the drops']];
        $user22 = $this->NlogNskills3->find('all',['conditions'=>$conditions22])->first();
        $this->set('user22',$user22);

        $conditions23 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Giving drugs (i/v bolus)']];
        $user23 = $this->NlogNskills3->find('all',['conditions'=>$conditions23])->first();
        $this->set('user23',$user23);

        $conditions24 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Blood transfusion']];
        $user24 = $this->NlogNskills3->find('all',['conditions'=>$conditions24])->first();
        $this->set('user24',$user24);

        $conditions31 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Reading CVP']];
        $user31 = $this->NlogNskills3->find('all',['conditions'=>$conditions31])->first();
        $this->set('user31',$user31);

        $conditions41 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Health education in community']];
        $user41 = $this->NlogNskills3->find('all',['conditions'=>$conditions41])->first();
        $this->set('user41',$user41);

        $conditions51 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Cooking demostration']];
        $user51 = $this->NlogNskills3->find('all',['conditions'=>$conditions51])->first();
        $this->set('user51',$user51);

        $conditions61 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Insertion of nasogastric tube']];
        $user61 = $this->NlogNskills3->find('all',['conditions'=>$conditions61])->first();
        $this->set('user61',$user61);

        $conditions62 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Feeding through nasogastric tube']];
        $user62 = $this->NlogNskills3->find('all',['conditions'=>$conditions62])->first();
        $this->set('user62',$user62);

        $conditions71 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Infant']];
        $user71 = $this->NlogNskills3->find('all',['conditions'=>$conditions71])->first();
        $this->set('user71',$user71);

        $conditions72 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Toddler']];
        $user72 = $this->NlogNskills3->find('all',['conditions'=>$conditions72])->first();
        $this->set('user72',$user72);

        $conditions73 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Weight']];
        $user73 = $this->NlogNskills3->find('all',['conditions'=>$conditions73])->first();
        $this->set('user73',$user73);

        $conditions74 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Height']];
        $user74 = $this->NlogNskills3->find('all',['conditions'=>$conditions74])->first();
        $this->set('user74',$user74);

        $conditions75 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Head circumference']];
        $user75 = $this->NlogNskills3->find('all',['conditions'=>$conditions75])->first();
        $this->set('user75',$user75);

        $conditions76 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill3_Name'=>'Chest circumference']];
        $user76 = $this->NlogNskills3->find('all',['conditions'=>$conditions76])->first();
        $this->set('user76',$user76);

        $nlogNskill3 = $this->NlogNskills3->newEntity();
        if ($this->request->is('post')) {
            $nlogNskill3 = $this->NlogNskills3->patchEntity($nlogNskill3, $this->request->data);
            if ($this->NlogNskills3->save($nlogNskill3)) {
                $this->Flash->success(__('The nlog nskill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskill could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('nlogNskill3'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills']);

    }
}
