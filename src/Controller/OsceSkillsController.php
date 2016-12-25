<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Plugin;
use Cake\Core\Configure;
use Cake\Utility\Security;     


/**
 * OsceSkills Controller
 *
 * @property \App\Model\Table\OsceSkillsTable $OsceSkills
 */
class OsceSkillsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $osceSkills = $this->paginate($this->OsceSkills);

        $this->set(compact('osceSkills'));
        $this->set('_serialize', ['osceSkills']);
    }

    /**
     * View method
     *
     * @param string|null $id Osce Skill id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $osceSkill = $this->OsceSkills->get($id, [
            'contain' => ['Nursings']
        ]);

        $this->set('osceSkill', $osceSkill);
        $this->set('_serialize', ['osceSkill']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('credits');
        $waa = $this->request->data['orders']['oioi'];
        $this->Credits->save($waa);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('osceSkill'));
        $this->set('_serialize', ['osceSkill']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Osce Skill id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $osceSkill = $this->OsceSkills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('osceSkill'));
        $this->set('_serialize', ['osceSkill']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Osce Skill id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $osceSkill = $this->OsceSkills->get($id);
        if ($this->OsceSkills->delete($osceSkill)) {
            $this->Flash->success(__('The osce skill has been deleted.'));
        } else {
            $this->Flash->error(__('The osce skill could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function Oskills($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

    

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>1],['Question_sem'=>1]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills']['osceSkill_sta1'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }


    public function Oskills2($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        
      

       $articles = TableRegistry::get('OsceActions'); 
       $articles2 = TableRegistry::get('Nursings');
 
        
       $conditions = ['AND'=>['Question_station'=>1],['Question_sem'=>2]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);

        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills']['osceSkill_sta1'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills3($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>1],['Question_sem'=>3]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills']['osceSkill_sta1'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills4($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>1],['Question_sem'=>4]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills']['osceSkill_sta1'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills5($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

    

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>1],['Question_sem'=>5]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills']['osceSkill_sta1'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills6($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>1],['Question_sem'=>6]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills']['osceSkill_sta1'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills7($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

        

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>1],['Question_sem'=>7]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills']['osceSkill_sta1'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    public function Oskills8($nursing_id = null, $nursing_name = null, $nursing_no = null, $nursing_sem = null)
    {

        $this->set('wuu',$nursing_id);
        $this->set('wee',$nursing_name);
        $this->set('waa',$nursing_no);

    

       $articles = TableRegistry::get('OsceActions'); 
       
 
        
        $conditions = ['AND'=>['Question_station'=>1],['Question_sem'=>8]];
        $pit = $articles->find('all',['conditions'=>[$conditions]])->all();
        $this->set('pit',$pit);
        $conditions = ['Nursings.nursing_id'=>$nursing_id];
        $daebak = $this->OsceSkills->find('all',['contain'=>['Nursings'],'conditions'=>[$conditions]])->first();
        $this->set('daebak',$daebak);
         
        
        $this->set('pe',$this->Auth->User('id'));

        $this->request->data['OsceSkills']['nursing_id'] = $this->request->data(['peng']);
        $this->request->data['OsceSkills']['id'] = $this->request->data(['kit']);
        $this->request->data['OsceSkills']['osceSkill_sta1'] = $this->request->data(['beep1']) + $this->request->data(['beep2']) + $this->request->data(['beep3']) + $this->request->data(['beep4']) + $this->request->data(['beep5']) + $this->request->data(['beep6']) + $this->request->data(['beep7']) + $this->request->data(['beep8']) + $this->request->data(['beep9']) + $this->request->data(['beep10']);



        $osceSkill = $this->OsceSkills->newEntity();
        if ($this->request->is('post')) {
            $osceSkill = $this->OsceSkills->patchEntity($osceSkill, $this->request->data);
            if ($this->OsceSkills->save($osceSkill)) {
                $this->Flash->success(__('The osce skill has been saved.'));
                return $this->redirect(['action' => 'index']);  
            } else {
                $this->Flash->error(__('The osce skill could not be saved. Please, try again.'));
            }
        }

        $this->set('oioi',$osceSkill);
        $this->set('_serialize', ['osceSkills']);
    
 
    }

    





























    public function viewpdf() {
        



        $order = $this->OsceSkills->newEntity();
        //$query = $articles->find('list',[
                                  //      'keyField' => 'user_id',
                                      //  'valueField' => 'menum'
                                       //     ])->where(['role'=>'3']);

             if ($this->request->is('post')) {
             $this->request->data['user_id'] = $id;

            $order = $this->OsceSkills->patchEntity($order, $this->request->data);
            if ($this->OsceSkills->save($order)) {
                $this->Flash->success(__('The order has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }

       // $this->set('wee',$query);
        $this->set(compact('order'));
        $this->set('_serialize', ['osceSkills']);
    }





















  /*  Plugin::load('ChartJs', ['bootstrap' => false, 'routes' => false]);

    $helpers = [
        'ChartJs.Chartjs' => [
            'Chart' => [
                'type' => 'bar',
            ],
            'Canvas' => [
                'position' => 'relative',
                'width' => 750,
                'height' => 300,
                'css' => ['padding' => '10px'],
            ],
            'Options' => [
                'responsive' => true,
                'Bar' => [
                    'scaleShowGridLines' => false 
                ]
            ],
        ]
    ];  


    $dataChart = [
    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
    'datasets' => [
            [ 
                'label' => "My First dataset",
                'fillColor' => "rgba(220,220,220,0.2)",
                'strokeColor' => "rgba(220,220,220,1)",
                'pointColor' => "rgba(220,220,220,1)",
                'pointStrokeColor' => "#fff",
                'pointHighlightFill' => "#fff",
                'pointHighlightStroke' => "rgba(220,220,220,1)",
                'data' => [65, 59, 80, 81, 56, 55, 40]
            ],
            [
                'label' => "My Second dataset",
                'fillColor' => "rgba(151,187,205,0.2)",
                'strokeColor' => "rgba(151,187,205,1)",
                'pointColor' => "rgba(151,187,205,1)",
                'pointStrokeColor' => "#fff",
                'pointHighlightFill' => "#fff",
                'pointHighlightStroke' => "rgba(151,187,205,1)",
                'data' => [28, 48, 40, 19, 86, 27, 90]
            ]
    ]
];

$this->set('dataChart',$dataChart);
$this->set('helpers',$helpers);
$woo = ['a','b','c'];
$this->request->session()->write('woo',$woo);
return $this->redirect(['controller'=>'Nursings','action' => 'sem']);

    

  /*  $dataChart = [
    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
    'datasets' => [
            [ 
                'label' => "My First dataset",
                'fillColor' => "rgba(220,220,220,0.2)",
                'strokeColor' => "rgba(220,220,220,1)",
                'pointColor' => "rgba(220,220,220,1)",
                'pointStrokeColor' => "#fff",
                'pointHighlightFill' => "#fff",
                'pointHighlightStroke' => "rgba(220,220,220,1)",
                'data' => [65, 59, 80, 81, 56, 55, 40]
            ],
            [
                'label' => "My Second dataset",
                'fillColor' => "rgba(151,187,205,0.2)",
                'strokeColor' => "rgba(151,187,205,1)",
                'pointColor' => "rgba(151,187,205,1)",
                'pointStrokeColor' => "#fff",
                'pointHighlightFill' => "#fff",
                'pointHighlightStroke' => "rgba(151,187,205,1)",
                'data' => [28, 48, 40, 19, 86, 27, 90]
            ]
    ]
];

*/
    

    
   /*     Configure::write('CakePdf', [
        'engine' => 'CakePdf.WkHtmlToPdf',
        'margin' => [
            'bottom' => 15,
            'left' => 50,
            'right' => 30,
            'top' => 45
        ],
        'orientation' => 'landscape',
        'download' => true
    ]);


        $invoice = $this->Invoice->get($id);
            $this->viewBuilder()->options([
                'pdfConfig' => [
                    'orientation' => 'portrait',
                    'filename' => 'Invoice_' . $id
                ]
            ]);
            $this->set('invoice', $invoice);
            
    */

    /*    $this->loadModel('Nursings');
        $waa = $this->Nursings->find('all',['contain' => ['OsceSkills']],['conditions'=>['Nursings.nursing_id = OsceSkills.nursing_id']]);

        
            $this->set('waa',$waa); 
*/
/*        $this->loadModel('Nursings');


       $result = $this->Nursings->find('all',['join'=>[
                                'table'=>'areaskill_attributes',
                                'alias' => 'AreaskillAttribute',
                                'type' => 'inner',
                                'foreignKey' => false,
                                'conditions'=>['Nursings.nursing_id = AreaskillAttribute.nursing_id']
                                ]]);

       $result2 = $this->Nursings->find('all',['join'=>[
                                'table'=>'areaskill_attributes',
                                'alias' => 'AreaskillAttribute',
                                'type' => 'left',
                                'foreignKey' => false,
                                'conditions'=>['Nursings.nursing_id = AreaskillAttribute.nursing_id']
                                ]]);

        $result3 = $result2->all();
        $result1 = $result->all();
        $this->set('result1',$result1);
        $this->set('result3',$result3);
*/    
//        $ar1 = TableRegistry::get('AreaskillAttributes');
//        $ar = TableRegistry::get('Nursings');
     /*   $query23 = $ar->find('all',['join'=>[
                                'table'=>'areaskill_attributes',
                                'alias' => 'AreaskillAttribute',
                                'type' => 'inner',
                                'foreignKey' => false,
                                'conditions'=>['Nursings.nursing_id = AreaskillAttribute.nursing_id']
                                ]]);

        */

/*        $query = $ar->find('all',['group'=>'Nursings.nursing_id','join'=>[
                                'table'=>'areaskill_attributes',
                                'alias' => 'AreaskillAttributes',
                                'type' => 'left',
                                'foreignKey' => false,
                                'conditions'=>['Nursings.nursing_id = AreaskillAttributes.nursing_id']
                                ]]
                                );

        $query1 = $ar->find('all',['join'=>[
                                'table'=>'areaskill_attributes',
                                'alias' => 'AreaskillAttributes',
                                'type' => 'inner',
                                'foreignKey' => false,
                                'conditions'=>['Nursings.nursing_id = AreaskillAttributes.nursing_id']
                                ]]
                                );

        $result1 = $query1->first();
        $this->set('result2',$result1);
 //       $this->set('waa',$query23);
        $this->set('query',$query);
 */       
}
