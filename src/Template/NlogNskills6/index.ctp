<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Nlog Nskills 6</h4>   
                        </div>
    <div class="panel-body">
    <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
            <tr>
                <th><?= $this->Paginator->sort('Nskill6_Id') ?></th>
                <th><?= $this->Paginator->sort('Nskill6_Name') ?></th>
                <th><?= $this->Paginator->sort('Eva6_area') ?></th>
                <th><?= $this->Paginator->sort('Eva6_date') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach ($nlogNskills6 as $nlogNskills6): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($nlogNskills6->Nskill6_Name) ?></td>
                <td><?= h($nlogNskills6->Eva6_area) ?></td>
                <td><?= h($nlogNskills6->Eva6_date) ?></td>
                <td><?= $nlogNskills6->has('nursing') ? $this->Html->link($nlogNskills6->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $nlogNskills6->nursing->nursing_id]) : '' ?></td>
                <td><?= $this->Number->format($nlogNskills6->id) ?></td>
                <td class="actions">
                <?php if($poi==1){ ?>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nlogNskills6->Nskill6_Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nlogNskills6->Nskill6_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nlogNskills6->Nskill6_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills6->Nskill6_Id)]); }?>
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
