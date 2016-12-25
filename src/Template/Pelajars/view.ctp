<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pelajar'), ['action' => 'edit', $pelajar->student_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pelajar'), ['action' => 'delete', $pelajar->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pelajar->student_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pelajars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelajar'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pelajars'), ['controller' => 'Pelajars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelajar'), ['controller' => 'Pelajars', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pelajars view large-9 medium-8 columns content">
    <h3><?= h($pelajar->student_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pelajar') ?></th>
            <td><?= $pelajar->has('pelajar') ? $this->Html->link($pelajar->pelajar->student_id, ['controller' => 'Pelajars', 'action' => 'view', $pelajar->pelajar->student_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Pelajar No') ?></th>
            <td><?= h($pelajar->pelajar_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Pelajar Name') ?></th>
            <td><?= h($pelajar->pelajar_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Pelajar Placement') ?></th>
            <td><?= h($pelajar->pelajar_placement) ?></td>
        </tr>
        <tr>
            <th><?= __('Evaluated By') ?></th>
            <td><?= h($pelajar->evaluated_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Pelajar Sem') ?></th>
            <td><?= $this->Number->format($pelajar->pelajar_sem) ?></td>
        </tr>
    </table>
</div>
