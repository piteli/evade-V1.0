<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Osce Skills5'), ['action' => 'edit', $osceSkills5->osceSkill5_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Osce Skills5'), ['action' => 'delete', $osceSkills5->osceSkill5_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills5->osceSkill5_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Osce Skills5'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Osce Skills5'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="osceSkills5 view large-9 medium-8 columns content">
    <h3><?= h($osceSkills5->osceSkill5_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('OsceSkill Sta5') ?></th>
            <td><?= h($osceSkills5->osceSkill_sta5) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $osceSkills5->has('nursing') ? $this->Html->link($osceSkills5->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkills5->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('OsceSkill5 Id') ?></th>
            <td><?= $this->Number->format($osceSkills5->osceSkill5_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($osceSkills5->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($osceSkills5->date) ?></td>
        </tr>
    </table>
</div>
