<div class="panel panel-primary">
<div class="panel-heading"><h4><i class="fa fa-calculator"></i> Student Evaluation Marks </h4> </div>


<div class="panel-body">


<div class="alert alert-info" role="alert"><strong><i class="fa fa-info-circle"></i> The student must perform competently all the procedures listed below.</strong></div>

<table class="table table-bordered table-hover">

<tr>
<th colspan='6' style="text-align: left;">Student Name:&nbsp<?php echo $wee; ?><br/>Student Id:&nbsp<?php echo $waa; ?><br/></th>
</tr>
<tr>
<th>No</th>
<th>Procedure</th>
<th>Score</th>
</tr>
</thead>

<?php
if($daebak){    
    echo '<tr>';
    echo '<td colspan = 3><h1>This student had done evaluated. Thank you for your corporation.</h1></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td colspan = 3>'.$this->Form->postButton('Go Back', array('controller'=>'Users','action'=>'Lecturer')).'</td>';
    echo '</tr>';
}

else{

$i = 1;
echo $this->Form->create($oioi);
echo $this->Form->input('peng',['type'=>'hidden','value'=>$wuu]); 
echo $this->Form->hidden('kit',['value'=>$pe]); 

foreach ($pit as $baa) { 
echo '<tbody>'; 
echo '<tr>';
echo '<td>'.$baa['Question_set'].'</td>';
echo '<td>'.$baa['Question_name'].'</td>';

    if($baa['Question_fmark']==2){
    $to = ['2'=>'2','1'=>'1','0.5'=>'0.5'];
    echo '<td>'.$this->Form->input(
    'beep'.$i,
    ['type'=>'radio','options'=>$to,'label'=>false]).'</td>';
    }
    else if($baa['Question_fmark']==3){
	$to = ['3'=>'3','2'=>'2','1'=>'1','0.5'=>'0.5'];
    echo '<td>'.$this->Form->input(
    'beep'.$i,
    ['type'=>'radio','options'=>$to,'label'=>false]).'</td>';   
    }
    else if($baa['Question_fmark']==1){
    $to = ['1'=>'1','0.5'=>'0.5'];
    echo '<td>'.$this->Form->input(
    'beep'.$i,
    ['type'=>'radio','options'=>$to,'label'=>false]).'</td>';
    }
    else if($baa['Question_fmark']==4){
    $to = ['4'=>'4','3'=>'3','2'=>'2','1'=>'1','0.5'=>'0.5'];
    echo '<td>'.$this->Form->input(
    'beep'.$i,
    ['type'=>'radio','options'=>$to,'label'=>false]).'</td>';   
    }
    echo '</tr>';
    echo '</tbody>';

    $i++;
    } ?>
    <table>
</div>
    
<div class="panel-footer">
        <div align="right">
            <?php echo $this->Form->button('save',['class'=>'btn btn-default', 'style'=>'float:center']); ?> 
        </div>
        
</div>

    <?php $this->Form->end(); }?>

</div>
</div>




