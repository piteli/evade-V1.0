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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nlogNskills4->Nskill4_Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills4->Nskill4_Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Nlog Nskills4'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nlogNskills4 form large-9 medium-8 columns content">
    <?= $this->Form->create($nlogNskills4) ?>
    <fieldset>
        <legend><?= __('Edit Nlog Nskills4') ?></legend>
        <?php
            echo $this->Form->input('Nskill4_Name');
            echo $this->Form->input('Eva4_area');
            echo $this->Form->input('Eva4_date');
            echo $this->Form->input('nursing_id', ['options' => $nursings, 'empty' => true]);
            echo $this->Form->input('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
