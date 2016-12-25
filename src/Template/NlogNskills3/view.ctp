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
        <li><?= $this->Html->link(__('Edit Nlog Nskills3'), ['action' => 'edit', $nlogNskills3->Nskill3_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nlog Nskills3'), ['action' => 'delete', $nlogNskills3->Nskill3_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills3->Nskill3_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nlog Nskills3'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nlog Nskills3'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nlogNskills3 view large-9 medium-8 columns content">
    <h3><?= h($nlogNskills3->Nskill3_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nskill3 Name') ?></th>
            <td><?= h($nlogNskills3->Nskill3_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva3 Area') ?></th>
            <td><?= h($nlogNskills3->Eva3_area) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva3 Date') ?></th>
            <td><?= h($nlogNskills3->Eva3_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $nlogNskills3->has('nursing') ? $this->Html->link($nlogNskills3->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $nlogNskills3->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nskill3 Id') ?></th>
            <td><?= $this->Number->format($nlogNskills3->Nskill3_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($nlogNskills3->id) ?></td>
        </tr>
    </table>
</div>
