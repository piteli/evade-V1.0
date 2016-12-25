<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
             echo $this->Form->input('fname',array('label'=>'Please enter the first name'));
            echo $this->Form->input('lname',array('label'=>'Please enter the last name'));
            echo $this->Form->input('position',array('label'=>'Please enter the grade'));
            echo $this->Form->input('email',array('label'=>'Please enter the email'));
            echo $this->Form->input('password',array('label'=>'Please enter the password'));
            $roles = ['2' => 'Lecturer','3' => 'Clinical Instructor'];
            echo $this->Form->label('role', 'Please enter role');
            echo $this->Form->select('role',$roles,array('empty'=>'-Pick Role'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
