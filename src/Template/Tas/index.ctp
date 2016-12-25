<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ta'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tas index large-9 medium-8 columns content">
    <h3><?= __('Tas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('tas_id') ?></th>
                <th><?= $this->Paginator->sort('tas_name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tas as $ta): ?>
            <tr>
                <td><?= $ta->has('ta') ? $this->Html->link($ta->ta->tas_id, ['controller' => 'Tas', 'action' => 'view', $ta->ta->tas_id]) : '' ?></td>
                <td><?= h($ta->tas_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ta->tas_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ta->tas_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ta->tas_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ta->tas_id)]) ?>
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
