<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nlog Nskills3'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nlogNskills3 form large-9 medium-8 columns content">
    <?= $this->Form->create($nlogNskills3) ?>
    <fieldset>
        <legend><?= __('Add Nlog Nskills3') ?></legend>
        <?php
            echo $this->Form->input('Nskill3_Name');
            echo $this->Form->input('Eva3_area');
            echo $this->Form->input('Eva3_date');
            echo $this->Form->input('nursing_id', ['options' => $nursings, 'empty' => true]);
            echo $this->Form->input('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
