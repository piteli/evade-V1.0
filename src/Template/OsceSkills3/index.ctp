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
                <th><?= $this->Paginator->sort('osceSkill3_Id') ?></th>
                <th><?= $this->Paginator->sort('osceSkill_sta3') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0;  foreach ($osceSkills3 as $osceSkills3): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= $this->Number->format($osceSkills3->osceSkill_sta3) ?></td>
                <td><?= $osceSkills3->has('nursing') ? $this->Html->link($osceSkills3->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $osceSkills3->nursing->nursing_id]) : '' ?></td>
                <td><?= $this->Number->format($osceSkills3->id) ?></td>
                <td class="actions">
                    
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $osceSkills3->osceSkill3_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $osceSkills3->osceSkill3_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceSkills3->osceSkill3_Id)]) ?>
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
