<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Staff Lists </h4>   
                        </div>

<div class="panel-body">
    <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('No') ?></th>
                <th><?= $this->Paginator->sort('First Name') ?></th>
                <th><?= $this->Paginator->sort('Last Name') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach ($users as $user): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($user->fname) ?></td>
                <td><?= h($user->lname) ?></td>
                <td><?= h($user->email) ?></td>
                <td class="actions">
                 
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['class'=>'btn btn-default btn-circle' , ' i class' => 'fa fa-trash' , 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   
</div>
</div>



 