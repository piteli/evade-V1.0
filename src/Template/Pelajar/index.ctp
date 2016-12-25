<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pelajar'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pelajar index large-9 medium-8 columns content">
    <h3><?= __('Pelajar') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('student_id') ?></th>
                <th><?= $this->Paginator->sort('student_no') ?></th>
                <th><?= $this->Paginator->sort('student_name') ?></th>
                <th><?= $this->Paginator->sort('student_sem') ?></th>
                <th><?= $this->Paginator->sort('student_placement') ?></th>
                <th><?= $this->Paginator->sort('evaluated_by') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pelajar as $pelajar): ?>
            <tr>
                <td><?= $this->Number->format($pelajar->student_id) ?></td>
                <td><?= h($pelajar->student_no) ?></td>
                <td><?= h($pelajar->student_name) ?></td>
                <td><?= $this->Number->format($pelajar->student_sem) ?></td>
                <td><?= h($pelajar->student_placement) ?></td>
                <td><?= h($pelajar->evaluated_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pelajar->student_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pelajar->student_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pelajar->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pelajar->student_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
