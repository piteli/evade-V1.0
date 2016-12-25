<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?php
        if($dong==1){
        echo '<li>'.$this->Html->link(__('Main page'), ['controller' => 'nursings','action' => 'index']).'</li>';
        echo '<li>'.$this->Html->link(__('Student page'), ['controller' => 'nursings','action' => 'index']).'</li>';
        }
        else{

        }
        ?>
        <li><?= $this->Html->link(__('Edit Nlog Nskills4'), ['action' => 'edit', $nlogNskills4->Nskill4_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nlog Nskills4'), ['action' => 'delete', $nlogNskills4->Nskill4_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills4->Nskill4_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nlog Nskills4'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nlog Nskills4'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nlogNskills4 view large-9 medium-8 columns content">
    <h3><?= h($nlogNskills4->Nskill4_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nskill4 Name') ?></th>
            <td><?= h($nlogNskills4->Nskill4_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva4 Area') ?></th>
            <td><?= h($nlogNskills4->Eva4_area) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva4 Date') ?></th>
            <td><?= h($nlogNskills4->Eva4_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $nlogNskills4->has('nursing') ? $this->Html->link($nlogNskills4->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $nlogNskills4->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nskill4 Id') ?></th>
            <td><?= $this->Number->format($nlogNskills4->Nskill4_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($nlogNskills4->id) ?></td>
        </tr>
    </table>
</div>
