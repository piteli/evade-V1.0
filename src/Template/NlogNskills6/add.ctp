<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nlog Nskills6'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nlogNskills6 form large-9 medium-8 columns content">
    <?= $this->Form->create($nlogNskills6) ?>
    <fieldset>
        <legend><?= __('Add Nlog Nskills6') ?></legend>
        <?php
            echo $this->Form->input('Nskill6_Name');
            echo $this->Form->input('Eva6_area');
            echo $this->Form->input('Eva6_date');
            echo $this->Form->input('nursing_id', ['options' => $nursings, 'empty' => true]);
            echo $this->Form->input('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
