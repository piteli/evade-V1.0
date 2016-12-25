<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NlogNskills4 Controller
 *
 * @property \App\Model\Table\NlogNskills4Table $NlogNskills4
 */
class NlogNskills4Controller extends AppController
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
        $nlogNskills4 = $this->paginate($this->NlogNskills4);

        $this->set(compact('nlogNskills4'));
        $this->set('poi',$this->Auth->User('role'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills4']);
    }

    /**
     * View method
     *
     * @param string|null $id Nlog Nskills4 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nlogNskills4 = $this->NlogNskills4->get($id);

        $this->set('nlogNskills4', $nlogNskills4);
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills4']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nlogNskills4 = $this->NlogNskills4->newEntity();
        if ($this->request->is('post')) {
            $nlogNskills4 = $this->NlogNskills4->patchEntity($nlogNskills4, $this->request->data);
            if ($this->NlogNskills4->save($nlogNskills4)) {
                $this->Flash->success(__('The nlog nskills4 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills4 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills4->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills4', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills4']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nlog Nskills4 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nlogNskills4 = $this->NlogNskills4->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nlogNskills4 = $this->NlogNskills4->patchEntity($nlogNskills4, $this->request->data);
            if ($this->NlogNskills4->save($nlogNskills4)) {
                $this->Flash->success(__('The nlog nskills4 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills4 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills4->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills4', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills4']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nlog Nskills4 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->set('dong',$this->Auth->User('role'));
        $this->request->allowMethod(['post', 'delete']);
        $nlogNskills4 = $this->NlogNskills4->get($id);
        if ($this->NlogNskills4->delete($nlogNskills4)) {
            $this->Flash->success(__('The nlog nskills4 has been deleted.'));
        } else {
            $this->Flash->error(__('The nlog nskills4 could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function qnskills4($nursing_id = null, $nursing_name = null, $nursing_no = null){

        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);
        $this->set('wee3',$nursing_id);
        $this->set('wee4',$this->Auth->User('id'));

        $conditions11 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Assess breast engorgement']];
        $user11 = $this->NlogNskills4->find('all',['conditions'=>$conditions11])->first();
        $this->set('user11',$user11);

        $conditions12 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Skin traction']];
        $user12 = $this->NlogNskills4->find('all',['conditions'=>$conditions12])->first();
        $this->set('user12',$user12);

        $conditions13 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Skeletal traction']];
        $user13 = $this->NlogNskills4->find('all',['conditions'=>$conditions13])->first();
        $this->set('user13',$user13);

        $conditions14 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Neurovascular assessment']];
        $user14 = $this->NlogNskills4->find('all',['conditions'=>$conditions14])->first();
        $this->set('user14',$user14);

        $conditions21 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Care or the newborn']];
        $user21 = $this->NlogNskills4->find('all',['conditions'=>$conditions21])->first();
        $this->set('user21',$user21);

        $conditions22 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Preparing i/v regime and calculation of the drops']];
        $user22 = $this->NlogNskills4->find('all',['conditions'=>$conditions22])->first();
        $this->set('user22',$user22);

        $conditions23 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Giving drugs (i/v bolus)']];
        $user23 = $this->NlogNskills4->find('all',['conditions'=>$conditions23])->first();
        $this->set('user23',$user23);

        $conditions24 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Blood transfusion']];
        $user24 = $this->NlogNskills4->find('all',['conditions'=>$conditions24])->first();
        $this->set('user24',$user24);

        $conditions31 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Assisting baby and weather or breast feeding']];
        $user31 = $this->NlogNskills4->find('all',['conditions'=>$conditions31])->first();
        $this->set('user31',$user31);

        $conditions41 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Observing and documenting PV loss']];
        $user41 = $this->NlogNskills4->find('all',['conditions'=>$conditions41])->first();
        $this->set('user41',$user41);

        $conditions51 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Carry out barrier']];
        $user51 = $this->NlogNskills4->find('all',['conditions'=>$conditions51])->first();
        $this->set('user51',$user51);

        $conditions61 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Taking E.C.G']];
        $user61 = $this->NlogNskills4->find('all',['conditions'=>$conditions61])->first();
        $this->set('user61',$user61);

        $conditions62 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'C.P.R']];
        $user62 = $this->NlogNskills4->find('all',['conditions'=>$conditions62])->first();
        $this->set('user62',$user62);

        $conditions71 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Assessment of children']];
        $user71 = $this->NlogNskills4->find('all',['conditions'=>$conditions71])->first();
        $this->set('user71',$user71);

        $conditions72 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Immunization to children']];
        $user72 = $this->NlogNskills4->find('all',['conditions'=>$conditions72])->first();
        $this->set('user72',$user72);

        $conditions73 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'School health services']];
        $user73 = $this->NlogNskills4->find('all',['conditions'=>$conditions73])->first();
        $this->set('user73',$user73);

        $conditions74 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Preparation for the child health clinic session']];
        $user74 = $this->NlogNskills4->find('all',['conditions'=>$conditions74])->first();
        $this->set('user74',$user74);

        $conditions75 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Head circumference']];
        $user75 = $this->NlogNskills4->find('all',['conditions'=>$conditions75])->first();
        $this->set('user75',$user75);

        $conditions76 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Chest circumference']];
        $user76 = $this->NlogNskills4->find('all',['conditions'=>$conditions76])->first();
        $this->set('user76',$user76);

        $conditions81 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Physical skill']];
        $user81 = $this->NlogNskills4->find('all',['conditions'=>$conditions81])->first();
        $this->set('user81',$user81);

        $conditions82 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill4_Name'=>'Motor skill']];
        $user82 = $this->NlogNskills4->find('all',['conditions'=>$conditions82])->first();
        $this->set('user82',$user82);


        $nlogNskill = $this->NlogNskills4->newEntity();
        if ($this->request->is('post')) {
            $nlogNskill = $this->NlogNskills4->patchEntity($nlogNskill, $this->request->data);
            if ($this->NlogNskills4->save($nlogNskill)) {
                $this->Flash->success(__('The nlog nskill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskill could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('nlogNskill'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills4']);

    }
}
