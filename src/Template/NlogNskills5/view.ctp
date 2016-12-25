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
        <li><?= $this->Html->link(__('Edit Nlog Nskills5'), ['action' => 'edit', $nlogNskills5->Nskill5_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nlog Nskills5'), ['action' => 'delete', $nlogNskills5->Nskill5_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills5->Nskill5_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nlog Nskills5'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nlog Nskills5'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nlogNskills5 view large-9 medium-8 columns content">
    <h3><?= h($nlogNskills5->Nskill5_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nskill5 Name') ?></th>
            <td><?= h($nlogNskills5->Nskill5_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva5 Area') ?></th>
            <td><?= h($nlogNskills5->Eva5_area) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva5 Date') ?></th>
            <td><?= h($nlogNskills5->Eva5_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $nlogNskills5->has('nursing') ? $this->Html->link($nlogNskills5->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $nlogNskills5->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nskill5 Id') ?></th>
            <td><?= $this->Number->format($nlogNskills5->Nskill5_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($nlogNskills5->id) ?></td>
        </tr>
    </table>
</div>
