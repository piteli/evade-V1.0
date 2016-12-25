<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nursing'), ['action' => 'edit', $nursing->nursing_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nursing'), ['action' => 'delete', $nursing->nursing_id], ['confirm' => __('Are you sure you want to delete # {0}?', $nursing->nursing_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nursings view large-9 medium-8 columns content">
    <h3><?= h($nursing->nursing_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $nursing->has('nursing') ? $this->Html->link($nursing->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $nursing->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing No') ?></th>
            <td><?= h($nursing->nursing_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing Name') ?></th>
            <td><?= h($nursing->nursing_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing Placement') ?></th>
            <td><?= h($nursing->nursing_placement) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva Nskill') ?></th>
            <td><?= h($nursing->eva_nskill) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva Askill') ?></th>
            <td><?= h($nursing->eva_askill) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva Osce') ?></th>
            <td><?= h($nursing->eva_osce) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing Sem') ?></th>
            <td><?= $this->Number->format($nursing->nursing_sem) ?></td>
        </tr>
    </table>
</div>
