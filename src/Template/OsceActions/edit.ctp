<!-- page content -->
<div class="osceActions form large-9 medium-8 columns content">
<div class="panel panel-default">
    <div class="panel-heading"> <h4><i class="fa fa-edit"></i> Edit for '<b><?= h($osceAction->Question_name) ?></b>'</h4> </div>

    <div class="panel-body">

        <?= $this->Form->create($osceAction) ?>
            <p>
            Question name:
            <?php echo $this->Form->input('Question_name',['type'=>'textarea', 'class'=>'form-control', 'label'=>false]);
            $yu = ['1'=>'Station 1','2'=>'Station 2','3'=>'Station 3','4'=>'Station 4','5'=>'Station 5']; ?>
            <br>
            <?php echo $this->Form->label('Question_station','Please select station:'); ?>
            <?php echo $this->Form->select('Question_station',$yu,['class'=>'form-control','empty'=>'-Pick station-']);
            $yuu = ['1'=>'1','2'=>'2','3'=>'3','4'=>'4']; ?>
            <br>
            <?php echo $this->Form->label('Question_fmark','Please select full mark:');
            echo $this->Form->select('Question_fmark',$yuu,['class'=>'form-control', 'empty'=>'-Pick Full Mark-']);
            $yuuo = ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10']; ?>
            <br>
            <?php echo $this->Form->label('Question_set','Please set question in order:');
            echo $this->Form->select('Question_set',$yuuo,['class'=>'form-control','empty'=>'-Pick set question-']);
            $yuuobu = ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8']; ?>
            <br>
            <?php echo $this->Form->label('Question_sem','Please select semester:');
            echo $this->Form->select('Question_sem',$yuuobu,['class'=>'form-control','empty'=>'-Pick semester-']); ?>
    </div>

    <div class="panel-footer">
        <div align="right">
            <?php 
                echo $this->Form->button('Save', ['type' => 'submit', 'class'=>'btn btn-default']);

                echo $this->Form->button('Reset', ['type' => 'reset', 'class'=>'btn btn-primary']); 
            ?>  
        </div>
    </div>


        
