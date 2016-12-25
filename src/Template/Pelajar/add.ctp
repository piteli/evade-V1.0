<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pelajar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pelajar form large-9 medium-8 columns content">
    <?= $this->Form->create($pelajar) ?>
    <fieldset>
        <legend><?= __('Add Pelajar') ?></legend>
        <?php
            echo $this->Form->input('student_no');
            echo $this->Form->input('student_name');
            echo $this->Form->input('student_sem');
            echo $this->Form->input('student_placement');
            echo $this->Form->input('evaluated_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
