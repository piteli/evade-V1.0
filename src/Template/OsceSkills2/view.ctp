<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Osce Skills2'), ['action' => 'edit', $osceSkills2->osceSkill2_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Osce Skills2'), ['action' => 'delete', $osceSkills2->osceSkill2_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills2->osceSkill2_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Osce Skills2'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Osce Skills2'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="osceSkills2 view large-9 medium-8 columns content">
    <h3><?= h($osceSkills2->osceSkill2_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('OsceSkill Sta2') ?></th>
            <td><?= h($osceSkills2->osceSkill_sta2) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $osceSkills2->has('nursing') ? $this->Html->link($osceSkills2->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkills2->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('OsceSkill2 Id') ?></th>
            <td><?= $this->Number->format($osceSkills2->osceSkill2_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($osceSkills2->id) ?></td>
        </tr>
    </table>
</div>
