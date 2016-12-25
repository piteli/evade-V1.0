<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grand Total'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grandTotals index large-9 medium-8 columns content">
    <h3><?= __('Grand Totals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Gtotal_Id') ?></th>
                <th><?= $this->Paginator->sort('Gtotal_total') ?></th>
                <th><?= $this->Paginator->sort('Super_total') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grandTotals as $grandTotal): ?>
            <tr>
                <td><?= $this->Number->format($grandTotal->Gtotal_Id) ?></td>
                <td><?= $this->Number->format($grandTotal->Gtotal_total) ?></td>
                <td><?= $this->Number->format($grandTotal->Super_total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $grandTotal->Gtotal_Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grandTotal->Gtotal_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grandTotal->Gtotal_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $grandTotal->Gtotal_Id)]) ?>
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
