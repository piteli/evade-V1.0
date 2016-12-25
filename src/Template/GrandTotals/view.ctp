<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grand Total'), ['action' => 'edit', $grandTotal->Gtotal_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grand Total'), ['action' => 'delete', $grandTotal->Gtotal_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $grandTotal->Gtotal_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grand Totals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grand Total'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grandTotals view large-9 medium-8 columns content">
    <h3><?= h($grandTotal->Gtotal_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Gtotal Id') ?></th>
            <td><?= $this->Number->format($grandTotal->Gtotal_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Gtotal Total') ?></th>
            <td><?= $this->Number->format($grandTotal->Gtotal_total) ?></td>
        </tr>
        <tr>
            <th><?= __('Super Total') ?></th>
            <td><?= $this->Number->format($grandTotal->Super_total) ?></td>
        </tr>
    </table>
</div>
