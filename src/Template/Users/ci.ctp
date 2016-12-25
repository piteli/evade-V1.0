<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?php
        if($dong==1){
        echo '<li>'.$this->Html->link(__('Main page'), ['controller' => 'nursings','action' => 'index']).'</li>';
        echo '<li>'.$this->Html->link(__('Student page'), ['controller' => 'nursings','action' => 'index']).'</li>';
        }
        else{

        }
        ?>
        <li><?= $this->Html->link(__('Go to Nursing Skill'),['controller' => 'Users','action' => 'ci']) ?></li>
        <li><?= $this->Html->link(__('Go to Area Skill'),['controller' => 'Users','action' => 'ci2']) ?></li>
        <li><?= $this->Html->link(__('View Results part 1'),['controller' => 'NlogNskills','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('View Results part 2'),['controller' => 'NlogNskills2','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('View Results part 3'),['controller' => 'NlogNskills3','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('View Results part 4'),['controller' => 'NlogNskills4','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('View Results part 5'),['controller' => 'NlogNskills5','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('View Results part 6'),['controller' => 'NlogNskills6','action' => 'index']) ?></li>
    </ul>
</nav>

<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-users"></i> Nursing Student List </h4>   
                        </div>

     <div class="panel-body">
    <br>
                          
<?php

                echo '<div class="table-responsive">';
                echo '<table class="table  table-bordered table-hover" id="dataTables-example">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>'.$this->Paginator->sort('Student Name').'</th>';
                echo '<th>'.$this->Paginator->sort('Student Id').'</th>';
                echo '<th>'.$this->Paginator->sort('Semester').'</th>';
                echo '<th class="butang">'.__('Actions').'</th>';            
                echo '</tr>';
                echo '</thead>';


                
            foreach ($waa as $row) {
                
                echo '<tbody>'; 
                echo '<tr>';
                echo '<td>'.$row->nursing_name.'</td>';
                echo '<td>'.$row->nursing_no.'</td>';
                echo '<td>'.$row->nursing_sem.'</td>';
                echo '<td class="butang">';



                
                if($row->nursing_sem==1){
                echo $this->Html->link(__('Start Evaluate'), array('controller' => 'NlogNskills','action' => 'qnskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else if($row->nursing_sem==2){
                echo $this->Html->link(__('Start Evaluate'), array('controller' => 'NlogNskills2','action' => 'qnskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else if($row->nursing_sem==3){
                echo $this->Html->link(__('Start Evaluate'), array('controller' => 'NlogNskills3','action' => 'qnskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else if($row->nursing_sem==4){
                echo $this->Html->link(__('Start Evaluate'), array('controller' => 'NlogNskills4','action' => 'qnskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else if($row->nursing_sem==5){
                echo $this->Html->link(__('Start Evaluate'), array('controller' => 'NlogNskills5','action' => 'qnskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else if($row->nursing_sem==6){
                echo $this->Html->link(__('Start Evaluate'), array('controller' => 'NlogNskills6','action' => 'qnskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('Not Required'), array('controller' => 'NlogNskills','action' => 'qnskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp &nbsp"; 

                }




                


                
                



}

                echo '</td>';
                echo '</tr>';
                echo '</tbody>';
?>
</div>
