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
        <li><?= $this->Html->link(__('Edit Nlog Nskill'), ['action' => 'edit', $nlogNskill->Nskill_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nlog Nskill'), ['action' => 'delete', $nlogNskill->Nskill_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskill->Nskill_Id)]) ?> </li>
        <li><?= $this->Html->link(__('Evaluation page'), ['controller'=>'users','action' => 'ci']) ?></li>
    </ul>
</nav>
<div class="nlogNskills view large-9 medium-8 columns content">
    <h3><?= h($nlogNskill->Nskill_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nskill Name') ?></th>
            <td><?= h($nlogNskill->Nskill_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva Area') ?></th>
            <td><?= h($nlogNskill->Eva_area) ?></td>
        </tr>
        <tr>
            <th><?= __('Eva Date') ?></th>
            <td><?= h($nlogNskill->Eva_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Nskill Id') ?></th>
            <td><?= $this->Number->format($nlogNskill->Nskill_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($nlogNskill->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing Id') ?></th>
            <td><?= $this->Number->format($nlogNskill->nursing_id) ?></td>
        </tr>
    </table>
</div>
