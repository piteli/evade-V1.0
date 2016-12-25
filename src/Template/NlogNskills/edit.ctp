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
                ['action' => 'delete', $nlogNskill->Nskill_Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskill->Nskill_Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Evaluation page'), ['controller'=>'users','action' => 'ci']) ?></li>
    </ul>
</nav>
<div class="nlogNskills form large-9 medium-8 columns content">
    <?= $this->Form->create($nlogNskill) ?>
    <fieldset>
        <legend><?= __('Edit Nlog Nskill') ?></legend>
        <?php
            echo $this->Form->input('Nskill_Name');
            echo $this->Form->input('Eva_area');
            echo $this->Form->input('Eva_date');
            echo $this->Form->input('id');
            echo $this->Form->input('nursing_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
