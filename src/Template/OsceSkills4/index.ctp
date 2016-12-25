<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Osce Skills 3 </h4>   
                        </div>

<div class="panel-body">
    <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('osceSkill4_Id') ?></th>
                <th><?= $this->Paginator->sort('osceSkill_sta4') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach ($osceSkills4 as $osceSkills4): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($osceSkills4->osceSkill_sta4) ?></td>
                <td><?= $osceSkills4->has('nursing') ? $this->Html->link($osceSkills4->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkills4->nursing->nursing_id]) : '' ?></td>
                <td><?= $this->Number->format($osceSkills4->id) ?></td>
                <td class="actions">
                    
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $osceSkills4->osceSkill4_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $osceSkills4->osceSkill4_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills4->osceSkill4_Id)]) ?>
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
