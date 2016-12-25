<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pelajar'), ['action' => 'edit', $pelajar->student_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pelajar'), ['action' => 'delete', $pelajar->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pelajar->student_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pelajar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelajar'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pelajar view large-9 medium-8 columns content">
    <h3><?= h($pelajar->student_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Student No') ?></th>
            <td><?= h($pelajar->student_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Student Name') ?></th>
            <td><?= h($pelajar->student_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Student Placement') ?></th>
            <td><?= h($pelajar->student_placement) ?></td>
        </tr>
        <tr>
            <th><?= __('Evaluated By') ?></th>
            <td><?= h($pelajar->evaluated_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Student Id') ?></th>
            <td><?= $this->Number->format($pelajar->student_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Student Sem') ?></th>
            <td><?= $this->Number->format($pelajar->student_sem) ?></td>
        </tr>
    </table>
</div>
