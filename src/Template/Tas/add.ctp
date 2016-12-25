<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tas'), ['controller' => 'Tas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ta'), ['controller' => 'Tas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tas form large-9 medium-8 columns content">
    <?= $this->Form->create($ta) ?>
    <fieldset>
        <legend><?= __('Add Ta') ?></legend>
        <?php
            echo $this->Form->input('tas_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
