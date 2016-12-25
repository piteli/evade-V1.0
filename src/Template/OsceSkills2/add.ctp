<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Osce Skills2'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="osceSkills2 form large-9 medium-8 columns content">
    <?= $this->Form->create($osceSkills2) ?>
    <fieldset>
        <legend><?= __('Add Osce Skills2') ?></legend>
        <?php
            echo $this->Form->input('osceSkill_sta2');
            echo $this->Form->input('nursing_id', ['options' => $nursings]);
            echo $this->Form->input('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
