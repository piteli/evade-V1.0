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
        <li><?= $this->Html->link(__('Edit Nlog Nskills2'), ['action' => 'edit', $nlogNskills2->Nskill2_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nlog Nskills2'), ['action' => 'delete', $nlogNskills2->Nskill2_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills2->Nskill2_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nlog Nskills2'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nlog Nskills2'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nlogNskills2 view large-9 medium-8 columns content">
    <h3><?= h($nlogNskills2->Nskill2_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nskill2 Name') ?></th>
            <td><?= h($nlogNskills2->Nskill2_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva2 Area') ?></th>
            <td><?= h($nlogNskills2->Eva2_area) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva2 Date') ?></th>
            <td><?= h($nlogNskills2->Eva2_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing') ?></th>
            <td><?= $nlogNskills2->has('nursing') ? $this->Html->link($nlogNskills2->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $nlogNskills2->nursing->nursing_id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nskill2 Id') ?></th>
            <td><?= $this->Number->format($nlogNskills2->Nskill2_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($nlogNskills2->id) ?></td>
        </tr>
    </table>
</div>
