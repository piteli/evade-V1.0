<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NlogNskills2 Controller
 *
 * @property \App\Model\Table\NlogNskills2Table $NlogNskills2
 */
class NlogNskills2Controller extends AppController
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
        $nlogNskills2 = $this->paginate($this->NlogNskills2);

        $this->set(compact('nlogNskills2'));
        $this->set('poi',$this->Auth->User('role'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills2']);
    }

    /**
     * View method
     *
     * @param string|null $id Nlog Nskills2 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nlogNskills2 = $this->NlogNskills2->get($id);

        $this->set('nlogNskills2', $nlogNskills2);
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills2']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nlogNskills2 = $this->NlogNskills2->newEntity();
        if ($this->request->is('post')) {
            $nlogNskills2 = $this->NlogNskills2->patchEntity($nlogNskills2, $this->request->data);
            if ($this->NlogNskills2->save($nlogNskills2)) {
                $this->Flash->success(__('The nlog nskills2 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills2 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills2->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills2', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills2']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nlog Nskills2 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nlogNskills2 = $this->NlogNskills2->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nlogNskills2 = $this->NlogNskills2->patchEntity($nlogNskills2, $this->request->data);
            if ($this->NlogNskills2->save($nlogNskills2)) {
                $this->Flash->success(__('The nlog nskills2 has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskills2 could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->NlogNskills2->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nlogNskills2', 'nursings'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills2']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nlog Nskills2 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->set('dong',$this->Auth->User('role'));
        $this->request->allowMethod(['post', 'delete']);
        $nlogNskills2 = $this->NlogNskills2->get($id);
        if ($this->NlogNskills2->delete($nlogNskills2)) {
            $this->Flash->success(__('The nlog nskills2 has been deleted.'));
        } else {
            $this->Flash->error(__('The nlog nskills2 could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function qnskills2($nursing_id = null, $nursing_name = null, $nursing_no = null){

        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);
        $this->set('wee3',$nursing_id);
        $this->set('wee4',$this->Auth->User('id'));

        $conditions11 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Orally']];
        $user11 = $this->NlogNskills2->find('all',['conditions'=>$conditions11])->first();
        $this->set('user11',$user11);

        $conditions12 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Parentally -> Intramuscular']];
        $user12 = $this->NlogNskills2->find('all',['conditions'=>$conditions12])->first();
        $this->set('user12',$user12);

        $conditions13 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Parenterally -> Subcutaneous']];
        $user13 = $this->NlogNskills2->find('all',['conditions'=>$conditions13])->first();
        $this->set('user13',$user13);

        $conditions14 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Parenterally -> Intradermal']];
        $user14 = $this->NlogNskills2->find('all',['conditions'=>$conditions14])->first();
        $this->set('user14',$user14);

        $conditions21 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Clean']];
        $user21 = $this->NlogNskills2->find('all',['conditions'=>$conditions21])->first();
        $this->set('user21',$user21);

        $conditions31 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Spiral']];
        $user31 = $this->NlogNskills2->find('all',['conditions'=>$conditions31])->first();
        $this->set('user31',$user31);

        $conditions32 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Figure of eight']];
        $user32 = $this->NlogNskills2->find('all',['conditions'=>$conditions32])->first();
        $this->set('user32',$user32);

        $conditions33 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Stump']];
        $user33 = $this->NlogNskills2->find('all',['conditions'=>$conditions33])->first();
        $this->set('user33',$user33);

        $conditions41 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Oxygen therapy']];
        $user41 = $this->NlogNskills2->find('all',['conditions'=>$conditions41])->first();
        $this->set('user41',$user41);

        $conditions42 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Giving nebulizer']];
        $user42 = $this->NlogNskills2->find('all',['conditions'=>$conditions42])->first();
        $this->set('user42',$user42);

        $conditions43 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Oropharyngeal suctioning']];
        $user43 = $this->NlogNskills2->find('all',['conditions'=>$conditions43])->first();
        $this->set('user43',$user43);

        $conditions44 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Tracheal suctioning']];
        $user44 = $this->NlogNskills2->find('all',['conditions'=>$conditions44])->first();
        $this->set('user44',$user44);

        $conditions45 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Assist in insertion of chest tube']];
        $user45 = $this->NlogNskills2->find('all',['conditions'=>$conditions45])->first();
        $this->set('user45',$user45);

        $conditions46 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Care of the chest tube']];
        $user46 = $this->NlogNskills2->find('all',['conditions'=>$conditions46])->first();
        $this->set('user46',$user46);

        $conditions47 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Care of tracheostomy']];
        $user47 = $this->NlogNskills2->find('all',['conditions'=>$conditions47])->first();
        $this->set('user47',$user47);

        $conditions51 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Swab from wound for C / S']];
        $user51 = $this->NlogNskills2->find('all',['conditions'=>$conditions51])->first();
        $this->set('user51',$user51);

        $conditions52 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Sputum for AFB']];
        $user52 = $this->NlogNskills2->find('all',['conditions'=>$conditions52])->first();
        $this->set('user52',$user52);

        $conditions53 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Sputum for C/ S']];
        $user53 = $this->NlogNskills2->find('all',['conditions'=>$conditions53])->first();
        $this->set('user53',$user53);

        $conditions54 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Sputum FEME']];
        $user54 = $this->NlogNskills2->find('all',['conditions'=>$conditions54])->first();
        $this->set('user54',$user54);


        $conditions55 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Throat swab for C / S']];
        $user55 = $this->NlogNskills2->find('all',['conditions'=>$conditions55])->first();
        $this->set('user55',$user55);

        $conditions61 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Simple']];
        $user61 = $this->NlogNskills2->find('all',['conditions'=>$conditions61])->first();
        $this->set('user61',$user61);

        $conditions62 = ['AND'=>['nursing_id'=>$nursing_id],['Nskill2_Name'=>'Keyhole']];
        $user62 = $this->NlogNskills2->find('all',['conditions'=>$conditions62])->first();
        $this->set('user62',$user62);




        $nlogNskill = $this->NlogNskills2->newEntity();
        if ($this->request->is('post')) {
            $nlogNskill = $this->NlogNskills2->patchEntity($nlogNskill, $this->request->data);
            if ($this->NlogNskills2->save($nlogNskill)) {
                $this->Flash->success(__('The nlog nskill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskill could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('nlogNskill2'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills2']);

    }
}
