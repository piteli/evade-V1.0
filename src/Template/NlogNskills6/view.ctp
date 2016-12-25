<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nlog Nskills6'), ['action' => 'edit', $nlogNskills6->Nskill6_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nlog Nskills6'), ['action' => 'delete', $nlogNskills6->Nskill6_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills6->Nskill6_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nlog Nskills6'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nlog Nskills6'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nlogNskills6 view large-9 medium-8 columns content">
    <h3><?= h($nlogNskills6->Nskill6_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nskill6 Name') ?></th>
            <td><?= h($nlogNskills6->Nskill6_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva6 Area') ?></th>
            <td><?= h($nlogNskills6->Eva6_area) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva6 Date') ?></th>
            <td><?= h($nlogNskills6->Eva6_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $nlogNskills6->has('nursing') ? $this->Html->link($nlogNskills6->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $nlogNskills6->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nskill6 Id') ?></th>
            <td><?= $this->Number->format($nlogNskills6->Nskill6_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($nlogNskills6->id) ?></td>
        </tr>
    </table>
</div>
