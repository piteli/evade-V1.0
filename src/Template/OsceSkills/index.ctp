<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Osce Skills 1 </h4>   
                        </div>

<div class="panel-body">
    <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('osceSkill_Id') ?></th>
                <th><?= $this->Paginator->sort('OsceSkill_skill') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th><?= $this->Paginator->sort('Scores') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
           <?php $count=0; foreach ($osceSkills as $osceSkill): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($osceSkill->OsceSkill_skill) ?></td>
                <td><?= $this->Number->format($osceSkill->nursing_id) ?></td>
                <td><?= $this->Number->format($osceSkill->osceSkill_sta1) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $osceSkill->osceSkill_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $osceSkill->osceSkill_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkill->osceSkill_Id)]) ?>
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
