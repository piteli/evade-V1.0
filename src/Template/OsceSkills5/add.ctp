<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Osce Skills5'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="osceSkills5 form large-9 medium-8 columns content">
    <?= $this->Form->create($osceSkills5) ?>
    <fieldset>
        <legend><?= __('Add Osce Skills5') ?></legend>
        <?php
            echo $this->Form->input('osceSkill_sta5');
            echo $this->Form->input('nursing_id', ['options' => $nursings]);
            echo $this->Form->input('id');
            echo $this->Form->input('date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
