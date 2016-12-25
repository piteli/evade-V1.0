
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
                echo '<th class="butang">'.__('').'</th>';            
                echo '</tr>';
                echo '</thead>';
                
            foreach ($waa as $row) {
                  
                echo '<tbody>'; 
                echo '<tr>';
                echo '<td>'.$row->nursing_name.'</td>';
                echo '<td>'.$row->nursing_no.'</td>';
                echo '<td>'.$row->nursing_sem.'</td>';
                echo '<td class="butang">';

                if($row->areaskill_attribute['nursing_id']){
                echo $this->Html->link(__('Start Evaluate'), array('controller' => 'AreaskillAttributes','action' => 'areaskill',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('Start Evaluate'), array('controller' => 'AreaskillAttributes','action' => 'areaskill',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row->areaskill_attribute['nursing_id']){
                echo $this->Html->link(__('Update'), array('controller' => 'AreaskillAttributes','action' => 'edit',$row->areaskill_attribute['Attribute_Id'])); 
                }
                else{
                echo $this->Html->link(__('Update'), array('controller' => 'AreaskillAttributes','action' => 'edit',$row->areaskill_attribute['Attribute_Id']),array('target'=>'_blank','readonly'=>'readonly' , 'style' => 'pointer-events : none; cursor : default; color:grey;'));
                }

                echo '</td>';
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';
                echo '</div>';


}


?>


</div>