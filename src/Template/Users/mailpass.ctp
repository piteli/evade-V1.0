
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Retrieve password from current account') ?></legend>

 <?php
            echo $this->Form->input('femail',array('label'=>'Please enter the email','style'=>'width:300px;'));
            echo $this->Form->input('why',array('type'=>'textarea','label'=>'Please tell us reason why you want to claim new pasword.','style'=>'width:800px;'));
            
           ?>
    </fieldset>
    &nbsp&nbsp&nbsp&nbsp&nbsp<?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>