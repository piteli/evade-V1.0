<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Osce Skills 2 </h4>   
                        </div>

<div class="panel-body">
    <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('osceSkill2_Id') ?></th>
                <th><?= $this->Paginator->sort('osceSkill_sta2') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach ($osceSkills2 as $osceSkills2): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($osceSkills2->osceSkill_sta2) ?></td>
                <td><?= $osceSkills2->has('nursing') ? $this->Html->link($osceSkills2->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkills2->nursing->nursing_id]) : '' ?></td>
                <td><?= $this->Number->format($osceSkills2->id) ?></td>
                <td class="actions">
                    
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $osceSkills2->osceSkill2_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $osceSkills2->osceSkill2_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills2->osceSkill2_Id)]) ?>
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
