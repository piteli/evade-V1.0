<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NlogNskills Controller
 *
 * @property \App\Model\Table\NlogNskillsTable $NlogNskills
 */
class NlogNskillsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $nlogNskills = $this->paginate($this->NlogNskills);

        $this->set(compact('nlogNskills'));
        $this->set('poi',$this->Auth->User('role'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills']);
    }

    /**
     * View method
     *
     * @param string|null $id Nlog Nskill id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nlogNskill = $this->NlogNskills->get($id, [
            'contain' => []
        ]);

        $this->set('nlogNskill', $nlogNskill);
       $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskill']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nlogNskill = $this->NlogNskills->newEntity();
        if ($this->request->is('post')) {
            $nlogNskill = $this->NlogNskills->patchEntity($nlogNskill, $this->request->data);
            if ($this->NlogNskills->save($nlogNskill)) {
                $this->Flash->success(__('The nlog nskill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskill could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nlogNskill'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskill']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nlog Nskill id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nlogNskill = $this->NlogNskills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nlogNskill = $this->NlogNskills->patchEntity($nlogNskill, $this->request->data);
            if ($this->NlogNskills->save($nlogNskill)) {
                $this->Flash->success(__('The nlog nskill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskill could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nlogNskill'));
   $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskill']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nlog Nskill id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->set('dong',$this->Auth->User('role'));
        $this->request->allowMethod(['post', 'delete']);
        $nlogNskill = $this->NlogNskills->get($id);
        if ($this->NlogNskills->delete($nlogNskill)) {
            $this->Flash->success(__('The nlog nskill has been deleted.'));
        } else {
            $this->Flash->error(__('The nlog nskill could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function qnskills($nursing_id = null, $nursing_name = null, $nursing_no = null){

        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);
        $this->set('wee3',$nursing_id);
        $this->set('wee4',$this->Auth->User('id'));

        $conditions11 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Occupied']];
        $user11 = $this->NlogNskills->find('all',['conditions'=>$conditions11])->first();
        $this->set('user11',$user11);

        $conditions12 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Unoccupied']];
        $user12 = $this->NlogNskills->find('all',['conditions'=>$conditions12])->first();
        $this->set('user12',$user12);

        $conditions13 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Operation']];
        $user13 = $this->NlogNskills->find('all',['conditions'=>$conditions13])->first();
        $this->set('user13',$user13);

        $conditions14 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Top to bottom']];
        $user14 = $this->NlogNskills->find('all',['conditions'=>$conditions14])->first();
        $this->set('user14',$user14);

        $conditions15 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Side to side']];
        $user15 = $this->NlogNskills->find('all',['conditions'=>$conditions15])->first();
        $this->set('user15',$user15);

        $conditions21 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Changing clients position']];
        $user21 = $this->NlogNskills->find('all',['conditions'=>$conditions21])->first();
        $this->set('user21',$user21);

        $conditions22 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Assist client in doing exercise']];
        $user22 = $this->NlogNskills->find('all',['conditions'=>$conditions22])->first();
        $this->set('user22',$user22);

        $conditions23 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Lifting and moving client']];
        $user23 = $this->NlogNskills->find('all',['conditions'=>$conditions23])->first();
        $this->set('user23',$user23);

        $conditions31 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Recumbent / Semi-recumbent']];
        $user31 = $this->NlogNskills->find('all',['conditions'=>$conditions31])->first();
        $this->set('user31',$user31);

        $conditions32 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Supine']];
        $user32 = $this->NlogNskills->find('all',['conditions'=>$conditions32])->first();
        $this->set('user32',$user32);

        $conditions33 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Fowlers / Semifowlers']];
        $user33 = $this->NlogNskills->find('all',['conditions'=>$conditions33])->first();
        $this->set('user33',$user33);

        $conditions34 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Cardiac / Orhopneic']];
        $user34 = $this->NlogNskills->find('all',['conditions'=>$conditions34])->first();
        $this->set('user34',$user34);

        $conditions35 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Prone / Semiprone']];
        $user35 = $this->NlogNskills->find('all',['conditions'=>$conditions35])->first();
        $this->set('user35',$user35);

        $conditions36 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Lateral']];
        $user36 = $this->NlogNskills->find('all',['conditions'=>$conditions36])->first();
        $this->set('user36',$user36);

        $conditions37 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Dorsal']];
        $user37 = $this->NlogNskills->find('all',['conditions'=>$conditions37])->first();
        $this->set('user37',$user37);

        $conditions41 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Bedbath']];
        $user41 = $this->NlogNskills->find('all',['conditions'=>$conditions41])->first();
        $this->set('user41',$user11);

        $conditions42 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Assisting client to bath']];
        $user42 = $this->NlogNskills->find('all',['conditions'=>$conditions42])->first();
        $this->set('user42',$user42);

        $conditions43 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Oral care']];
        $user43 = $this->NlogNskills->find('all',['conditions'=>$conditions43])->first();
        $this->set('user43',$user43);

        $conditions44 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'perineal care']];
        $user44 = $this->NlogNskills->find('all',['conditions'=>$conditions44])->first();
        $this->set('user44',$user44);

        $conditions45 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Care of the urinary catheter']];
        $user45 = $this->NlogNskills->find('all',['conditions'=>$conditions45])->first();
        $this->set('user45',$user45);

        $conditions46 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Hair shampoo']];
        $user46 = $this->NlogNskills->find('all',['conditions'=>$conditions46])->first();
        $this->set('user46',$user46);

        $conditions51 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Giving enema']];
        $user51 = $this->NlogNskills->find('all',['conditions'=>$conditions51])->first();
        $this->set('user51',$user51);

        $conditions52 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Insertion of suppository']];
        $user52 = $this->NlogNskills->find('all',['conditions'=>$conditions52])->first();
        $this->set('user52',$user52);

        $conditions53 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Bedpan']];
        $user53 = $this->NlogNskills->find('all',['conditions'=>$conditions53])->first();
        $this->set('user53',$user53);

        $conditions54 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Urinal']];
        $user54 = $this->NlogNskills->find('all',['conditions'=>$conditions54])->first();
        $this->set('user54',$user54);

        $conditions61 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Blood pressure']];
        $user61 = $this->NlogNskills->find('all',['conditions'=>$conditions61])->first();
        $this->set('user61',$user61);

        $conditions62 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Respiration']];
        $user62 = $this->NlogNskills->find('all',['conditions'=>$conditions62])->first();
        $this->set('user62',$user62);

        $conditions63 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'pulse']];
        $user63 = $this->NlogNskills->find('all',['conditions'=>$conditions63])->first();
        $this->set('user63',$user63);

        $conditions64 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Apex beat']];
        $user64 = $this->NlogNskills->find('all',['conditions'=>$conditions64])->first();
        $this->set('user64',$user64);

        $conditions65 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Body temperature -> Oral']];
        $user65 = $this->NlogNskills->find('all',['conditions'=>$conditions65])->first();
        $this->set('user65',$user65);

        $conditions66 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Body temperature -> Axilla']];
        $user66 = $this->NlogNskills->find('all',['conditions'=>$conditions66])->first();
        $this->set('user66',$user66);

        $conditions71 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Urine']];
        $user71 = $this->NlogNskills->find('all',['conditions'=>$conditions71])->first();
        $this->set('user71',$user71);

        $conditions72 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Feces / stool']];
        $user72 = $this->NlogNskills->find('all',['conditions'=>$conditions72])->first();
        $this->set('user72',$user72);

        $conditions81 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Open a sterile pack']];
        $user81 = $this->NlogNskills->find('all',['conditions'=>$conditions81])->first();
        $this->set('user81',$user81);

        $conditions82 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Adding sterile items onto sterile field']];
        $user82 = $this->NlogNskills->find('all',['conditions'=>$conditions82])->first();
        $this->set('user82',$user82);

        $conditions83 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Pouring solution to sterile area']];
        $user83 = $this->NlogNskills->find('all',['conditions'=>$conditions83])->first();
        $this->set('user83',$user83);

        $conditions91 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Feeding helpless client']];
        $user91 = $this->NlogNskills->find('all',['conditions'=>$conditions91])->first();
        $this->set('user91',$user91);

        $conditions92 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Monitor and record clients intake and output']];
        $user92 = $this->NlogNskills->find('all',['conditions'=>$conditions92])->first();
        $this->set('user92',$user92);

        $conditions1001 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Cold compress']];
        $user1001 = $this->NlogNskills->find('all',['conditions'=>$conditions1001])->first();
        $this->set('user1001',$user1001);

        $conditions1002 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Tepid sponging']];
        $user1002 = $this->NlogNskills->find('all',['conditions'=>$conditions1002])->first();
        $this->set('user1002',$user1002);

        $conditions1101 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Taking clients history']];
        $user1101 = $this->NlogNskills->find('all',['conditions'=>$conditions1101])->first();
        $this->set('user1101',$user1101);

        $conditions1102 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Identifying problems']];
        $user1102 = $this->NlogNskills->find('all',['conditions'=>$conditions1102])->first();
        $this->set('user1102',$user1102);

        $conditions1103 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Creating nursing diagnosis']];
        $user1103 = $this->NlogNskills->find('all',['conditions'=>$conditions1103])->first();
        $this->set('user1103',$user1103);

        $conditions1104 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Planning and implementing care']];
        $user1104 = $this->NlogNskills->find('all',['conditions'=>$conditions1104])->first();
        $this->set('user1104',$user1104);

        $conditions1105 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Evaluating']];
        $user1105 = $this->NlogNskills->find('all',['conditions'=>$conditions1105])->first();
        $this->set('user1105',$user1105);


        $nlogNskill = $this->NlogNskills->newEntity();
        if ($this->request->is('post')) {
            $nlogNskill = $this->NlogNskills->patchEntity($nlogNskill, $this->request->data);
            if ($this->NlogNskills->save($nlogNskill)) {
                $this->Flash->success(__('The nlog nskill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nlog nskill could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('nlogNskill'));
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['nlogNskills']);
    }


}
