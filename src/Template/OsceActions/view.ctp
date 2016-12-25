<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Osce Action'), ['action' => 'edit', $osceAction->Act_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Osce Action'), ['action' => 'delete', $osceAction->Act_id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceAction->Act_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Osce Actions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Osce Action'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="osceActions view large-9 medium-8 columns content">
    <h3><?= h($osceAction->Act_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Question Name') ?></th>
            <td><?= h($osceAction->Question_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Question Sem') ?></th>
            <td><?= h($osceAction->Question_sem) ?></td>
        </tr>
        <tr>
            <th><?= __('Question Id') ?></th>
            <td><?= $this->Number->format($osceAction->Question_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Question Station') ?></th>
            <td><?= $this->Number->format($osceAction->Question_station) ?></td>
        </tr>
        <tr>
            <th><?= __('Question Fmark') ?></th>
            <td><?= $this->Number->format($osceAction->Question_fmark) ?></td>
        </tr>
        <tr>
            <th><?= __('Question Set') ?></th>
            <td><?= $this->Number->format($osceAction->Question_set) ?></td>
        </tr>
    </table>
</div>
