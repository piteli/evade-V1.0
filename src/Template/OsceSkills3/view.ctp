<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Osce Skills3'), ['action' => 'edit', $osceSkills3->osceSkill3_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Osce Skills3'), ['action' => 'delete', $osceSkills3->osceSkill3_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills3->osceSkill3_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Osce Skills3'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Osce Skills3'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="osceSkills3 view large-9 medium-8 columns content">
    <h3><?= h($osceSkills3->osceSkill3_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $osceSkills3->has('nursing') ? $this->Html->link($osceSkills3->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkills3->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('OsceSkill3 Id') ?></th>
            <td><?= $this->Number->format($osceSkills3->osceSkill3_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('OsceSkill Sta3') ?></th>
            <td><?= $this->Number->format($osceSkills3->osceSkill_sta3) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($osceSkills3->id) ?></td>
        </tr>
    </table>
</div>
