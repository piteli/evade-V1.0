<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Nlog Nskills 4</h4>   
                        </div>
    <div class="panel-body">
    <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
            <tr>
                <th><?= $this->Paginator->sort('Nskill4_Id') ?></th>
                <th><?= $this->Paginator->sort('Nskill4_Name') ?></th>
                <th><?= $this->Paginator->sort('Eva4_area') ?></th>
                <th><?= $this->Paginator->sort('Eva4_date') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
             <?php $count=0; foreach ($nlogNskills4 as $nlogNskills4): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($nlogNskills4->Nskill4_Name) ?></td>
                <td><?= h($nlogNskills4->Eva4_area) ?></td>
                <td><?= h($nlogNskills4->Eva4_date) ?></td>
                <td><?= $nlogNskills4->has('nursing') ? $this->Html->link($nlogNskills4->nursing->nursing_id, ['controller' => 'Nursings', 'action' => 'view', $nlogNskills4->nursing->nursing_id]) : '' ?></td>
                <td><?= $this->Number->format($nlogNskills4->id) ?></td>
                <td class="actions">
                <?php if($poi==1){ ?>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nlogNskills4->Nskill4_Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nlogNskills4->Nskill4_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nlogNskills4->Nskill4_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills4->Nskill4_Id)]); }?>
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
