<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Osce Skills4'), ['action' => 'edit', $osceSkills4->osceSkill4_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Osce Skills4'), ['action' => 'delete', $osceSkills4->osceSkill4_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills4->osceSkill4_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Osce Skills4'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Osce Skills4'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="osceSkills4 view large-9 medium-8 columns content">
    <h3><?= h($osceSkills4->osceSkill4_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('OsceSkill Sta4') ?></th>
            <td><?= h($osceSkills4->osceSkill_sta4) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $osceSkills4->has('nursing') ? $this->Html->link($osceSkills4->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkills4->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('OsceSkill4 Id') ?></th>
            <td><?= $this->Number->format($osceSkills4->osceSkill4_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($osceSkills4->id) ?></td>
        </tr>
    </table>
</div>
