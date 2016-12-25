<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Osce Skills'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="osceSkills form large-9 medium-8 columns content">
    <?= $this->Form->create($osceSkill,['onSubmit'=>'return confirmfrmSubmit();']); ?>
    <fieldset>
        <legend><?= __('Add Osce Skill') ?></legend>
        <?php
            echo $this->Form->input('OsceSkill_skill');
            echo $this->Form->input('nursing_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Form->postButton('Back', array('controller'=>'OsceSkills','action'=>'index'));?>
    
</div>

<script>

function confirmfrmSubmit(){
var agree=confirm("Are you sure you wish to continue?");

if (agree)
     return true;
else
    return false ;

    }

</script>