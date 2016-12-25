<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Nlog Nskills 2 </h4>   
                        </div>

<div class="panel-body">
    <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('No') ?></th>
                <th><?= $this->Paginator->sort('Nskill2_Name') ?></th>
                <th><?= $this->Paginator->sort('Eva2_area') ?></th>
                <th><?= $this->Paginator->sort('Eva2_date') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach ($nlogNskills2 as $nlogNskills2): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($nlogNskills2->Nskill2_Name) ?></td>
                <td><?= h($nlogNskills2->Eva2_area) ?></td>
                <td><?= h($nlogNskills2->Eva2_date) ?></td>
                <td><?= h($nlogNskills2->nursing_id) ?></td>
                <td><?= h($nlogNskills2->id) ?></td>
                <td class="actions">
                <?php if($poi==1){ ?>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nlogNskills2->Nskill2_Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nlogNskills2->Nskill2_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nlogNskills2->Nskill2_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskills2->Nskill2_Id)]); }?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
