<div class="lecturer index large-10  medium-8 columns content">
    <div class="panel panel-default">
         <div class="panel-heading">
                            <h4><i class="fa fa-line-chart"></i> Semester Conversion </h4>
                        </div>

<div class="panel-body">


     <table cellpadding="0" cellspacing="0">
  

   
  
     <?= $this->Form->create();?>
    <?= $this->Form->input('search',['class'=>'form-control' , 'type'=>'select','label' => false,'div'=>false ,'empty'=>['0'=>'-Pick Semester-'], 'options'=>$wew, 'style'=>'width:200px; float:left;']);?>
		


		<?= $this->Form->button('search', ['type' => 'submit', 'class'=>'btn btn-default']); ?>
    
<br>
<p>

    <?php
if(!empty($query1)){
?>

		
    
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
				<th> No </th>
				<th> Student name </th>
				<th> Student id </th>
				<th> Semester </th>
			</tr>
		</thead>
		<tbody>

<?php
	$i = 1;
	foreach($query1 as $user){
?>
	<tr>
		<td> <?php echo $i; ?> </td>
		<td> <?php echo $user['nursing_name'] ?> </td>
		<td> <?php echo $user['nursing_no'] ?> </td>
		<td> <?php echo $user['nursing_sem'] ?> </td>
	</tr>

<?php

	$i++;
	}
?>
	</tbody>
	</table> 
	<table>
	<tr>
	<?php 

	echo $this->Form->create('Nursings',['onSubmit'=>'return confirmfrmSubmit();', 'url'=>['controller'=>'Nursings','action'=>'awesem']]);
	
	echo $this->Form->hidden('nursing_sem',['value'=>$user['nursing_sem']]);
	?>

	<td rowspan='100' colspan='6'>
  	<?php echo $this->Form->button('+1 sem',['style'=>'float:right; background-color:Green;']); ?> </td>
  	</td>

	<td></td>
	</tr>
	</table>
	</div>

	<div class="panel-footer">
  <div align="right">
  <?php echo $this->Form->button('+1 sem',['class'=>'btn btn-warning' ,' style'=>'float:right; background-color:Green;']); ?>
	<?php echo $this->Form->end(); ?>
	 </div>
                        </div>

<?php

}
?>

 
                                <script>

function confirmfrmSubmit(){

<div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                
var agree=confirm("Are you sure you want to plus one all this semester?");

if (agree)
     return true;
else
    return false ;

    }

</script>
                            </div>

