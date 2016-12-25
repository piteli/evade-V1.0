<?php
namespace App\Controller;


use App\Controller\AppController;
use cake\Mailer\Email;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    
        /*if($this->Auth->User('role')==1){
          return $this->redirect(['action' => 'dashboard']);
           //$users = $this->paginate($this->Users); 
        }
        else if($this->Auth->User('role')==2){
          /*  $users = $this->get(
                $this->Auth->User('id'),['contain' => []
                ]);  */
        /*return $this->redirect(['action' => 'lecturer']); 
        }
        else{
          return $this->redirect(['action' => 'ci']); 
        }
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);*/
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }




    public function login()
    {
        $this->viewBuilder()->layout('login');


        if ($this->request->is('post')) 

        {
        $user = $this->Auth->identify();
        if ($user) 
        {
            $this->Auth->setUser($user);
            
            if($this->Auth->User('role')==1)
            {
            return $this->redirect(['controller'=>'users','action' => 'dashboard']);
        }
        else if($this->Auth->User('role')==2)
        {
            return $this->redirect(['controller'=>'users','action' => 'lecturer']);
        }

        else if($this->Auth->User('role')==3)
        {
            return $this->redirect(['controller'=>'users','action' => 'ci']);
        }
        else
        {
          $this->Flash->error(__('Login error. Please, try again.'));
          return $this->redirect(['controller'=>'users','action'=>'login']);
          
        }

        
        }
        else
        {
          $this->Flash->error(__('Login error. Please, try again.'));
          return $this->redirect(['controller'=>'users','action'=>'login']);
        }
    }
  }



public function logout(){
    $this->Flash->success("you are now logged out");
    return $this->redirect($this->Auth->logout());
}
    

public function register(){

      $this->viewBuilder()->layout('register');

       $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
      }

public function search(){
    if($this->request->is('post')){

        $search = $this->request->data['search'];
        
        $query = $this->Users->find('all', ['conditions' =>['Users.fname LIKE' => '%' . $search . '%'],
        'limit' => 10 ]);
    
        $users =$query->all();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);

    }
}



public function role(){

    if($this->Auth->User('role')==1){
        $query = $this->Users->find('all');
    }
    else{
        $query = $this->Users->find('all', ['conditions' =>['Users.id' => $this->Auth->User('id')],
        'limit' => 10 ]);
}
        $users =$query->all();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    
}
  
public function reset(){
  
    if($this->request->is('post')){
            // hantar email dengan link
        $email_address = $this->request->data['reset'];
            $rrr = $this->request->data['reset'];  

        $email = new Email('default');
        $email->from(['powerzacky@gmail.com' => 'My Site'])
              ->to('rushwender@gmail.com')
              ->subject('About')
              ->send('My message');


    }
}

public function ci2(){
        
        $this->loadModel('Nursings');

        if($this->Auth->User('role')==1){
        $query = $this->Nursings->find('all');
    }
        else if($this->Auth->User('role')==3){
        $query = $this->Nursings->find('all',['conditions'=>['Nursings.eva_askill' => $this->Auth->User('id')]])->contain('AreaskillAttributes');

        }
        else{
            $this->Flash->error(__('The page you access required authentication from different roles. Please re-login to access those page.'));
           return $this->redirect(['action' => 'logout']);
        }

        $this->set('waa',$query);       
        $this->set('dong',$this->Auth->User('role'));
        $this->set('_serialize', ['users']);


     //   $articles = TableRegistry::get('nursings');
     //    $query2 = $articles->find();
     //     $this->set('wee1  ',$query2);

}

public function lecturer(){

 

        $this->loadModel('Nursings');
//if($this->Auth->User('role')==1){
 //       $waa = $this->Users->find('all',['contain' => // ['Nursings'],'conditions'=>['Nursings.eva_osce' => 'users.id']]);

if($this->Auth->User('role') == 1 || $this->Auth->User('role') == 2){
    $waa = $this->Nursings->find('all')->all();
/*    }
        else if($this->Auth->User('role')==2){
          $conditions = ['eva_osce'=>$this->Auth->User('id')];
          $waa = $this->Nursings->find('all',['conditions'=>[$conditions]])->all();
              
          
        } 
*/      }
        else{
            $this->Flash->error(__('The page you accessed required authentication from different roles. Please re-login to access those page.'));
           return $this->redirect(['action' => 'logout']); 
        }


$this->set('waa',$waa); 
$this->set('dong',$this->Auth->User('role'));
$this->set('dong2',$this->Auth->User('id'));
$this->set('_serialize', ['users']);  

        }


public function ci(){
  
/*  $ar2 = TableRegistry::get('NlogNskills');
  // 'AreaskillAttributes.Attribute_IdName' => 'Nursings.nursing_id'
  $address2 = TableRegistry::get('Nursings');
  $query23 = $ar2->find('all',['join'=>[
                                'table'=>'nursings',
                                'alias' => 'Nursings',
                                'type' => 'inner',
                                'foreignKey' => false,
                                'conditions'=>['Nursings.nursing_id = NlogNskills.nursing_id']
                                ]]);
  
  */      



        $address2 = TableRegistry::get('Nursings');                        
        if($this->Auth->User('role')==1){
        $query = $address2->find('all');
    }
        else if($this->Auth->User('role')==3){

      //  $conditions11 = ['AND'=>['nursing_id'=>$nursing_id],['nskill_Name'=>'Occupied']];

        $query = $address2->find('all', ['conditions' =>['Nursings.eva_nskill' => $this->Auth->User('id')]]);

      /*  $ns1 = TableRegistry::get('NlogNskills'); 
        $ns2 = TableRegistry::get('NlogNskills2'); 
        $ns3 = TableRegistry::get('NlogNskills3'); 
        $ns4 = TableRegistry::get('NlogNskills4'); 
        $ns5 = TableRegistry::get('NlogNskills5'); 
        $ns6 = TableRegistry::get('NlogNskills6'); 

        $query45 = $ns1->find('all')->all();
        $query46 = $ns2->find('all')->all();
        $query47 = $ns3->find('all')->all();
        $query48 = $ns4->find('all')->all();
        $query49 = $ns5->find('all')->all();
        $query50 = $ns6->find('all')->all();
        $this->set('$query45',$query45);
        $this->set('$query46',$query46);
        $this->set('$query47',$query47);
        $this->set('$query48',$query48);
        $this->set('$query49',$query49);
        $this->set('$query50',$query50); */ 

        
   //   $query1 = $ar2->find('all', ['fields'=>'nursing_id','group'=>'nursing_id']);
   //  $query2 = $ar2->find('all', ['fields'=>'Nskill_IdName','group'=>'Nskill_IdName']);
   //   $query2 = $ar2->find('all')->where('nursing_id'==$query1);
   //   $conditions = array($query2 => $query1);


   //  $data = $this->Users->find('all' , array('conditions'=>$conditions)); 
     //  $query2 = $ar2->find('all',['conditions' => ['NlogNskills.Nskill_IdName'=>$query1]]);
    //  $query2 = array($query1=>$query2);


        }
        else{
            $this->Flash->error(__('The page you accessed required authentication from different roles. Please re-login to access those page.'));
           return $this->redirect(['action' => 'logout']);
        }

        $users = $query->all();
        $this->set('dong',$this->Auth->User('role'));
        $this->set('waa',$users);
        $this->set('_serialize', ['users']);

}   

public function contoh(){

  $oi = ['1','2','3'];
  $beb = ['7','9','0'];

  $this->set('oi',$oi);
  $this->set('beb',$beb);


  

  $this->set('_serialize', ['users']);
}


public function mailpass(){
  //$this->viewBuilder()->layout('mailpass');
  if($this->request->is('post')){
            // hantar email dengan link
        $email_address = $this->request->data['femail'];
            $message = $this->request->data['why'];  

        $email = new Email('default');
        $email->from([$email_address => 'Evadefsk.com - Forget password :('])
              ->to('rushwender@gmail.com')
              ->subject('Password Retrieval')
              ->send($message);

        if ($email) {
            $this->Flash->success(__('The message has been send to support.evadefsk.com. You will notify email shortly'));
        } else {
            $this->Flash->error(__('The message failed to send. Please, try again.'));
        }
}

$this->set('_serialize', ['users']);

}


    public function dashboard()
    {
      //$this->viewBuilder()->layout('dashboard');


      if($this->Auth->User('role')==1)
      {
        $query = $this->Users->find('all');
      }
      else
      {
        $query = $this->Users->find('all', ['conditions' =>['Users.id' => $this->Auth->User('id')],
        'limit' => 10 ]);
}
        $users =$query->all();
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    
    }

}

