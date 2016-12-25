<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pelajars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pelajars'), ['controller' => 'Pelajars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelajar'), ['controller' => 'Pelajars', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pelajars form large-9 medium-8 columns content">
    <?= $this->Form->create($pelajar) ?>
    <fieldset>
        <legend><?= __('Add Pelajar') ?></legend>
        <?php
            echo $this->Form->input('pelajar_id', ['options' => $pelajars]);
            echo $this->Form->input('pelajar_no');
            echo $this->Form->input('pelajar_name');
            echo $this->Form->input('pelajar_sem');
            echo $this->Form->input('pelajar_placement');
            echo $this->Form->input('evaluated_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
