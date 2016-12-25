<div class="nursings form large-9 medium-8 columns content">
    <?= $this->Form->create($nursing) ?>
    <fieldset>
      
 <div class="panel panel-warning"><div class="panel-heading"><h4><i class="fa fa-edit"></i> Edit for '<b> <?= h($nursing->nursing_name) ?></b>'</h4></div>
                         <?= $this->Form->create($nursing) ?>

                        <div class="panel-body">


 <div class="col-md-12">
 <center> 
      <?php echo $this->Html->image('default.jpg'); ?></center> <br>
      </div>
      
Student Information 
<hr />
 <div class="col-md-6">

      <div class="form-group input-group"><span class="input-group-addon"><i class="fa fa-id-card"></i></span>
      <?php echo $this->Form->input('nursing_no',['placeholder '=>'Student no', 'readonly'=>'readonly' , 'class'=>'form-control', 'label'=>false]); ?>
      </div>
      <br>

       <div class="form-group input-group"><span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
       <?php $sem = ['1'=>'1',
                    '2'=>'2',
                    '3'=>'3',
                    '4'=>'4',
                    '5'=>'5',
                    '6'=>'6',
                    '7'=>'7',
                    '8'=>'8', ]; 
      echo $this->Form->label('nursing_sem',false);
      echo $this->Form->select('nursing_sem', $sem ,
      array('empty'=>'-Pick Student semester-','class'=>'form-control', 'readonly'=>'readonly')); ?>
     
      </div>
      <br>

      </div>



<div class="col-md-6">
      <div class="form-group input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
      <?php echo $this->Form->input('nursing_name',['placeholder '=>'Student name', 'readonly'=>'readonly' , 'class'=>'form-control', 'label'=>false]); ?>
      </div>
      <br>

      <div class="form-group input-group"><span class="input-group-addon"><i class="fa fa-building"></i></span>
      <?php $placement = ['Hospital Selayang'=>'Hospital Selayang',
                          'Hospital Ampang'=>'Hospital Ampang',
                          'Hospital Klang'=>'Hospital Klang',
                          'Hospital Ampang'=>'Hospital Kajang',
                          'Hospital Sungai Buloh'=>'Hospital Sungai Buloh',
                          'Hospital Bahagia'=>'Hospital Bahagia',
                          'Pusat-pusat Kesihatan'=>'Pusat-pusat Kesihatan'];
            echo $this->Form->label('nursing_placement', false);
            echo $this->Form->select('nursing_placement',$placement,array('empty'=>'-Pick Student placement-', 'class'=>'form-control')); ?>
      </div>
      <br>
      </div>
<div class="col-md-12">
Clinical Information

<hr />
      <div class="form-group input-group"><span class="input-group-addon">Please pick <b> Clinical Instructor </b>  to assign for <b> nursing skills evaluation </b> </span>
      <?php echo $this->Form->input('eva_nskill', array('type' => 'select','empty' => '-Pick Clinical Instructor name-','options'=> $wee2,'class'=>'form-control', 'label'=>false)); ?>
      </div>
      <br>

       <div class="form-group input-group"><span class="input-group-addon">Please pick <b>Lecturer </b> to assign for <b>area skills evaluation</b></span>
       <?php echo $this->Form->input('eva_askill', array('type' => 'select','empty' => '-Pick Clinical Instructor name-','options'=> $wee, 'class'=>'form-control' , 'label'=>false)); ?>
       </div>
       <br>


       <div class="form-group input-group"><span class="input-group-addon">Please pick <b>Lecturer </b> to assign for OSCE <b>Station 1</b>     </span>
       <?php echo $this->Form->input('eva_osce', array('type' => 'select','empty' => '-Pick Lecturer name-','options'=> $wee3,'class'=>'form-control' ,'label'=>false)); ?>

       </div>
       <br>


       <div class="form-group input-group"><span class="input-group-addon">Please pick <b>Lecturer</b> to assign for OSEC <b>Station 2</b></span>
       <?php echo $this->Form->input('eva_osce2', array('type' => 'select','empty' => '-Pick Lecturer name-','options'=> $wee4,'class'=>'form-control' ,'label'=>false)); ?>
       </div>
       <br>

       <div class="form-group input-group"><span class="input-group-addon">Please pick <b>Lecturer</b> to assign for OSCE <b>Station 3</b></span>
       <?php echo $this->Form->input('eva_osce3', array('type' => 'select','empty' => '-Pick Lecturer name-','options'=> $wee5,'class'=>'form-control','label'=>false)); ?>
       </div>
       <br>

       <div class="form-group input-group"><span class="input-group-addon">Please pick <b>Lecturer</b> to assign for OSCE <b>Station 4</b></span>
       <?php echo $this->Form->input('eva_osce4', array('type' => 'select','empty' => '-Pick Lecturer name-','options'=> $wee6,'class'=>'form-control' ,'label'=>false)); ?>
       </div>
       <br>

       <div class="form-group input-group"><span class="input-group-addon">Please pick <b> Lecturer </b> to assign for OSCE <b>Station 5 </b></span>
       <?php echo $this->Form->input('eva_osce5', array('type' => 'select','empty' => '-Pick Lecturer name-','options'=> $wee7,'class'=>'form-control'  ,'label'=>false)); ?>
       </div>
       <br>


</div>
 </div>

<div class="panel-footer">
  <div align="right">
      <?php 
       echo $this->Form->button('Save', ['type' => 'submit', 'class'=>'btn btn-primary']);
       echo $this->Form->button('Cancel', array('controller'=>'Nursings','action'=>'index' , 'class'=>'btn btn-default'));
       echo $this->Form->end() ?>  
  </div>
</div>
                   
                    </div>




