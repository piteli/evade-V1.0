<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Nursing;

/**
 * Nursings Controller
 *
 * @property \App\Model\Table\NursingsTable $Nursings
 */
class NursingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
       
      
        $nursings = $this->paginate($this->Nursings);
        $this->set(compact('nursings'));
        $this->set('_serialize', ['nursings']);


    }

    /**
     * View method
     *
     * @param string|null $id Nursing id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nursing = $this->Nursings->get($id);

        $this->set('nursing', $nursing);
        $this->set('_serialize', ['nursing']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

    
        $articles = TableRegistry::get('users');
     //   $query = $articles->find('all',[]);
      //  $query = $articles->find()->where(['role' => 1])->extract('fname');
       /*   $query = $articles->find('list',[
                                        'keyField' => 'id',
                                        'valueField' => 'fname'
                                            ])->where(['role'=>'2']);
    */    
          $query = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'3']);


          $query2 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'3']);


          $query3 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

      //  $query = $articles->find('list', ['contains'=>['users.fname']]);
         $this->set('wee',$query);
        $this->set('wee2',$query2);
        $this->set('wee3',$query3);

        $query4 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

        $query5 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

        $query6 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

        $query7 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

                            $this->set('wee4',$query4);
                            $this->set('wee5',$query5);
                            $this->set('wee6',$query6);
                            $this->set('wee7',$query7);



     //   $this->loadModel("users");
     //   $dt=$this->users->find('list',array('fields'=>array('fname','fname')));
    //    $this->set('drop',$dt);




        $nursing = $this->Nursings->newEntity();
        if ($this->request->is('post')) {
            $nursing = $this->Nursings->patchEntity($nursing, $this->request->data);
            if ($this->Nursings->save($nursing)) {
                $this->Flash->success(__('The nursing has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->Nursings->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nursing', 'nursings'));        
        $this->set('_serialize', ['nursing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nursing id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articles = TableRegistry::get('users');
     //   $query = $articles->find('all',[]);
      //  $query = $articles->find()->where(['role' => 1])->extract('fname');
       /*   $query = $articles->find('list',[
                                        'keyField' => 'id',
                                        'valueField' => 'fname'
                                            ])->where(['role'=>'2']);
    */    
          $query = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'3']);


          $query2 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'3']);


          $query3 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

      //  $query = $articles->find('list', ['contains'=>['users.fname']]);
         $this->set('wee',$query);
        $this->set('wee2',$query2);
        $this->set('wee3',$query3);

        $query4 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

        $query5 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

        $query6 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

        $query7 = $articles->find()
                            ->select(['id', 'fname', 'lname'])
                            ->formatResults(function($results) {
                                return $results->combine(
                                    'id',
                                function($row) {
                                return $row['fname'] . ' ' . $row['lname'];
            }
        );
        })->where(['role'=>'2']);

                            $this->set('wee4',$query4);
                            $this->set('wee5',$query5);
                            $this->set('wee6',$query6);
                            $this->set('wee7',$query7);



        $nursing = $this->Nursings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nursing = $this->Nursings->patchEntity($nursing, $this->request->data);
            if ($this->Nursings->save($nursing)) {
                $this->Flash->success(__('The nursing has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
            }
        }
        $nursings = $this->Nursings->Nursings->find('list', ['limit' => 200]);
        $this->set(compact('nursing', 'nursings'));
        $this->set('_serialize', ['nursing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nursing id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {   
        $this->request->allowMethod(['post', 'delete']);
        $nursing = $this->Nursings->get($id);
        if ($this->Nursings->delete($nursing)) {
            $this->Flash->success(__('The nursing has been deleted.'));
        } else {
            $this->Flash->error(__('The nursing could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function sem()
    {     
     // $wew = $this->Nursings->find('list')->select('nursing_sem');
      $wew = ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8'];
      $this->set('wew',$wew);

      if($this->request->is('post')){

        $search = $this->request->data['search'];           
        
        $query = $this->Nursings->find('all', ['conditions' =>['Nursings.nursing_sem LIKE' => '%' . $search . '%'],
        'limit' => 10000 ]);
        
        $query1 =$query->all();
        
      $this->set('query1',$query1);

      



  // if(!empty($this->request->data['Nursings']['nursing_sem']==2))
 //  {
   //   $this->Nursings->updateAll(
  //    array('Nursings.nursing_sem' => 1),
      // conditions
   //   array('Nursings.nursing_sem' => 2)
//);

//if($this){
//  return $this->redirect(['action' => 'index']);
//  } 

//  else {
//          $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
//       }

//}


     






  /*        $poyo = $this->Nursings->get();
            if ($this->request->is(['patch', 'post', 'put'])) {
            $nursing = $this->Nursings->patchEntity($poyo, $this->request->data);
            if ($this->Nursings->save($poyo)) {
                $this->Flash->success(__('The nursing has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
            }
        }
        }
    
    */
    

 //   $waa = $this->Nursings->find('all')->where('Nursings.nursing_sem = 7');
 //   $query1 = $waa->all();
 //   $this->set('query1',$query1);
 //        $articles = new Nursing();
 //       $power = TableRegistry::get('Nursings');
 //        $article = $power->newEntity([
 //                   'nursing_name'=>'saguntyali',
 //                   'nursing_no'=> '2015222124'
 //         ]);

    
  
    
   /*             if ($power->save($article)){
                $this->Flash->success(__('The nursing has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
            
    */    

         



        $this->set('_serialize', ['nursing']);

}
$this->set('dong',$this->Auth->User('role'));
}

public function awesem(){


  if($this->request->data['nursing_sem']==1){
  $this->Nursings->updateAll(
    ['Nursings.nursing_sem' => 2],['Nursings.nursing_sem' => 1]);
    if($this){
    $this->Flash->success(__('The record has been update.'));
    return $this->redirect(['action' => 'index']);
    }
    else{
      $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
    }
  }
  else if($this->request->data['nursing_sem']==2){
  $this->Nursings->updateAll(
    ['Nursings.nursing_sem' => 3],['Nursings.nursing_sem' => 2]);
    if($this){
    $this->Flash->success(__('The record has been update.'));
    return $this->redirect(['action' => 'index']);
    }
    else{
      $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
    }
  }

  else if($this->request->data['nursing_sem']==3){
  $this->Nursings->updateAll(
    ['Nursings.nursing_sem' => 4],['Nursings.nursing_sem' => 3]);
    if($this){
    $this->Flash->success(__('The record has been update.'));
    return $this->redirect(['action' => 'index']);
    }
    else{
      $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
    }
  }

  else if($this->request->data['nursing_sem']==4){
  $this->Nursings->updateAll(
    ['Nursings.nursing_sem' => 5],['Nursings.nursing_sem' => 4]);
    if($this){
    $this->Flash->success(__('The record has been update.'));
    return $this->redirect(['action' => 'index']);
    }
    else{
      $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
    }
  }

  else if($this->request->data['nursing_sem']==5){
  $this->Nursings->updateAll(
    ['Nursings.nursing_sem' => 6],['Nursings.nursing_sem' => 5]);
    if($this){
    $this->Flash->success(__('The record has been update.'));
    return $this->redirect(['action' => 'index']);
    }
    else{
      $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
    }
  }

  else if($this->request->data['nursing_sem']==6){
  $this->Nursings->updateAll(
    ['Nursings.nursing_sem' => 7],['Nursings.nursing_sem' => 6]);
    if($this){
    $this->Flash->success(__('The record has been update.'));
    return $this->redirect(['action' => 'index']);
    }
    else{
      $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
    }
  }

  else if($this->request->data['nursing_sem']==7){
  $this->Nursings->updateAll(
    ['Nursings.nursing_sem' => 8],['Nursings.nursing_sem' => 8]);
    if($this){
    $this->Flash->success(__('The record has been update.'));
    return $this->redirect(['action' => 'index']);
    }
    else{
      $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
    }
  }
  else if($this->request->data['nursing_sem']==8){
   $this->Nursings->updateAll(
    ['Nursings.nursing_sem' =>'finish'],['Nursings.nursing_sem' => 8]);
    if($this){
    $this->Flash->success(__('The record has been update.'));
    return $this->redirect(['action' => 'index']);
    }
    else{
      $this->Flash->error(__('The nursing could not be saved. Please, try again.'));
    }
  }

  else{
    
  }


  $this->set('_serialize', ['nursing']);
}


public function contoh(){
$wa = ['1','2','23'];
$wa1 = ['12','32','1123'];
$this->set('wa',$wa);
$this->set('wa1',$wa1);
    

    $this->set('_serialize', ['nursing']);
}
 

}
