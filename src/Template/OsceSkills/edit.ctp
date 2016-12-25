<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $osceSkill->osceSkill_Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkill->osceSkill_Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Osce Skills'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Nursings'), ['controller' => 'Nursings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nursing'), ['controller' => 'Nursings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="osceSkills form large-9 medium-8 columns content">
    <?= $this->Form->create($osceSkill) ?>
    <fieldset>
        <legend><?= __('Edit Osce Skill') ?></legend>
        <?php
            echo $this->Form->input('OsceSkill_skill');
            echo $this->Form->input('nursing_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
