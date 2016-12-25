<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Osce Skills 5 </h4>   
                        </div>

<div class="panel-body">
    <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('osceSkill5_Id') ?></th>
                <th><?= $this->Paginator->sort('osceSkill_sta5') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach ($osceSkills5 as $osceSkills5): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($osceSkills5->osceSkill_sta5) ?></td>
                <td><?= $osceSkills5->has('nursing') ? $this->Html->link($osceSkills5->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkills5->nursing->nursing_id]) : '' ?></td>
                <td><?= $this->Number->format($osceSkills5->id) ?></td>
                <td><?= h($osceSkills5->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $osceSkills5->osceSkill5_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $osceSkills5->osceSkill5_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills5->osceSkill5_Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <center>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
