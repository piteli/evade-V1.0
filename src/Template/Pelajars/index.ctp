<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pelajar'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pelajars index large-9 medium-8 columns content">
    <h3><?= __('Pelajars') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pelajar_id') ?></th>
                <th><?= $this->Paginator->sort('pelajar_no') ?></th>
                <th><?= $this->Paginator->sort('pelajar_name') ?></th>
                <th><?= $this->Paginator->sort('pelajar_sem') ?></th>
                <th><?= $this->Paginator->sort('pelajar_placement') ?></th>
                <th><?= $this->Paginator->sort('evaluated_by') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pelajars as $pelajar): ?>
            <tr>
                <td><?= $pelajar->has('pelajar') ? $this->Html->link($pelajar->pelajar->student_id, ['controller' => 'Pelajars', 'action' => 'view', $pelajar->pelajar->student_id]) : '' ?></td>
                <td><?= h($pelajar->pelajar_no) ?></td>
                <td><?= h($pelajar->pelajar_name) ?></td>
                <td><?= $this->Number->format($pelajar->pelajar_sem) ?></td>
                <td><?= h($pelajar->pelajar_placement) ?></td>
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
