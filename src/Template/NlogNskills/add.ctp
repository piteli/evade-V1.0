<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nlog Nskills'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="nlogNskills form large-9 medium-8 columns content">
    <?= $this->Form->create($nlogNskill) ?>
    <fieldset>
        <legend><?= __('Add Nlog Nskill') ?></legend>
        <?php
            echo $this->Form->input('Nskill_Name');
            echo $this->Form->input('Eva_area');
            echo $this->Form->input('Eva_date');
            echo $this->Form->input('id');
            echo $this->Form->input('nursing_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
