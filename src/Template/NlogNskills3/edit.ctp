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
                ['action' => 'delete', $nlogNskills3->Nskill3_Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills3->Nskill3_Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Nlog Nskills3'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nlogNskills3 form large-9 medium-8 columns content">
    <?= $this->Form->create($nlogNskills3) ?>
    <fieldset>
        <legend><?= __('Edit Nlog Nskills3') ?></legend>
        <?php
            echo $this->Form->input('Nskill3_Name');
            echo $this->Form->input('Eva3_area');
            echo $this->Form->input('Eva3_date');
            echo $this->Form->input('nursing_id', ['options' => $nursings, 'empty' => true]);
            echo $this->Form->input('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
