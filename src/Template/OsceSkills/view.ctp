<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Osce Skill'), ['action' => 'edit', $osceSkill->osceSkill_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Osce Skill'), ['action' => 'delete', $osceSkill->osceSkill_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkill->osceSkill_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Osce Skills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Osce Skill'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="osceSkills view large-9 medium-8 columns content">
    <h3><?= h($osceSkill->osceSkill_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('OsceSkill Skill') ?></th>
            <td><?= h($osceSkill->OsceSkill_skill) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $osceSkill->has('nursing') ? $this->Html->link($osceSkill->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkill->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('OsceSkill Id') ?></th>
            <td><?= $this->Number->format($osceSkill->osceSkill_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing Id') ?></th>
            <td><?= $this->Number->format($osceSkill->nursing_id) ?></td>
        </tr>
    </table>
</div>
