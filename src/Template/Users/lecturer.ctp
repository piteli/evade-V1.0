<center><?= $this->Html->image('fsk.png') ?> </center> 
  <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-users"></i> Nursing Students List </h4>
                        </div>
<?php

   
    echo '<div class="panel-body">';
    echo '<div class="table-responsive">';
    echo ' <table class="table table-bordered table-hover " id="dataTables-example">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>'.$this->Paginator->sort('Student Name').'</th>';
    echo '<th>'.$this->Paginator->sort('Student Id').'</th>';
    echo '<th>'.$this->Paginator->sort('Semester').'</th>';
    echo '<th class="butang">'.__('Station').'</th>';            
    echo '</tr>';
    echo '</thead>';
        		
      if($dong == 1){ 
      foreach ($waa as $row) {
                echo '<tbody>'; 
                echo '<tr>';
                echo '<td>'.$row->nursing_name.'</td>';
                echo '<td>'.$row->nursing_no.'</td>';
                echo '<td>'.$row->nursing_sem.'</td>';
                echo '<td class="butang">';


                if($row->nursing_sem == 1 ){
                if($row){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey; '))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;','id'=>'disabledInput'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;' , 'id'=>'disabledInput'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;' , 'id'=>'disabledInput' ))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;' , 'id'=>'disabledInput'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 2 ){
                if($row){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;' , 'id'=>'disabledInput'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;' , 'id'=>'disabledInput'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;' , 'id'=>'disabledInput' ))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;' , 'id'=>'disabledInput'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;' , 'id'=>'disabledInput'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 3 ){
                if($row){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                    echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }


                if($row->nursing_sem == 4 ){
                if($row){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }

                else{
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 5 ){
                if($row){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";

                }

                if($row){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 6 ){
                if($row){
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";

                }

                if($row){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 7 ){
                if($row){
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";

                }

                if($row){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 8 ){
                if($row){
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
               echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }

                echo '</td>';
                echo '</tr>';

}
}
















      else if($dong == 2){   
			foreach ($waa as $row) {
            if($row->eva_osce == $dong2 || $row->eva_osce2 == $dong2 || $row->eva_osce3 == $dong2 || $row->eva_osce4 == $dong2 || $row->eva_osce5 == $dong2 ){
                echo '<tbody>'; 
                echo '<tr>';
                echo '<td>'.$row->nursing_name.'</td>';
                echo '<td>'.$row->nursing_no.'</td>';
                echo '<td>'.$row->nursing_sem.'</td>';
                echo '<td class="butang">';


                if($row->nursing_sem == 1 ){
                if($row->eva_osce == $dong2){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row->eva_osce2 == $dong2){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce3 == $dong2){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce4 == $dong2){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce5 == $dong2){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 2 ){
                if($row->eva_osce == $dong2){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row->eva_osce2 == $dong2){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce3 == $dong2){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce4 == $dong2){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce5 == $dong2){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills2',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 3 ){
                if($row->eva_osce == $dong2){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row->eva_osce2 == $dong2){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce3 == $dong2){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                    echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce4 == $dong2){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce5 == $dong2){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills3',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }


                if($row->nursing_sem == 4 ){
                if($row->eva_osce == $dong2){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }

                else{
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row->eva_osce2 == $dong2){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce3 == $dong2){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce4 == $dong2){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce5 == $dong2){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills4',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 5 ){
                if($row->eva_osce == $dong2){
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";

                }

                if($row->eva_osce2 == $dong2){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce3 == $dong2){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce4 == $dong2){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce5 == $dong2){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills5',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 6 ){
                if($row->eva_osce == $dong2){
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";

                }

                if($row->eva_osce2 == $dong2){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce3 == $dong2){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce4 == $dong2){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce5 == $dong2){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills6',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 7 ){
                if($row->eva_osce == $dong2){
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
                echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";

                }

                if($row->eva_osce2 == $dong2){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce3 == $dong2){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce4 == $dong2){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce5 == $dong2){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills7',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }



                if($row->nursing_sem == 8 ){
                if($row->eva_osce == $dong2){
                 echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp"; 
                }

                else{
               echo $this->Html->link(__('station 1'), array('controller' => 'OsceSkills','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp"; 

                }

                if($row->eva_osce2 == $dong2){
                 echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 2'), array('controller' => 'OsceSkills2','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce3 == $dong2){
                 echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 3'), array('controller' => 'OsceSkills3','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce4 == $dong2){
                 echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 4'), array('controller' => 'OsceSkills4','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }

                if($row->eva_osce5 == $dong2){
                 echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']))."&nbsp &nbsp &nbsp &nbsp";
                }
                else{
                echo $this->Html->link(__('station 5'), array('controller' => 'OsceSkills5','action' => 'Oskills8',$row['nursing_id'], $row['nursing_name'],$row['nursing_no']),array('target'=>'_blank', 'style' => 'pointer-events : none; cursor : default; color:grey;'))."&nbsp &nbsp &nbsp &nbsp";
                }
                }

                echo '</td>';
                echo '</tr>';
 
                
               
}
}}


?>
 
</div>
  
    
    



