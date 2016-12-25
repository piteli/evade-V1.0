<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $osceSkills4->osceSkill4_Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills4->osceSkill4_Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Osce Skills4'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="osceSkills4 form large-9 medium-8 columns content">
    <?= $this->Form->create($osceSkills4) ?>
    <fieldset>
        <legend><?= __('Edit Osce Skills4') ?></legend>
        <?php
            echo $this->Form->input('osceSkill_sta4');
            echo $this->Form->input('nursing_id', ['options' => $nursings]);
            echo $this->Form->input('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
