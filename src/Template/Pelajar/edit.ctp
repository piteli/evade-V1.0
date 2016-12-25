<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pelajar->student_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pelajar->student_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pelajar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pelajar form large-9 medium-8 columns content">
    <?= $this->Form->create($pelajar) ?>
    <fieldset>
        <legend><?= __('Edit Pelajar') ?></legend>
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
