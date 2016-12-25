<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ta'), ['action' => 'edit', $ta->tas_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ta'), ['action' => 'delete', $ta->tas_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ta->tas_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tas'), ['controller' => 'Tas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ta'), ['controller' => 'Tas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tas view large-9 medium-8 columns content">
    <h3><?= h($ta->tas_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ta') ?></th>
            <td><?= $ta->has('ta') ? $this->Html->link($ta->ta->tas_id, ['controller' => 'Tas', 'action' => 'view', $ta->ta->tas_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tas Name') ?></th>
            <td><?= h($ta->tas_name) ?></td>
        </tr>
    </table>
</div>
