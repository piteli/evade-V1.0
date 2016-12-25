<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-list"></i> Nlog Nskills </h4>   
                        </div>
    <div class="panel-body">
    <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
            <tr>
                <th><?= $this->Paginator->sort('No') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('Eva_area') ?></th>
                <th><?= $this->Paginator->sort('Eva_date') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nursing_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            
            <?php $count=0; foreach ($nlogNskills as $nlogNskill): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($nlogNskill->Nskill_Name) ?></td>
                <td><?= h($nlogNskill->Eva_area) ?></td>
                <td><?= h($nlogNskill->Eva_date) ?></td>
                <td><?= $this->Number->format($nlogNskill->id) ?></td>
                <td><?= $this->Number->format($nlogNskill->nursing_id) ?></td>
                <td class="actions">
                <?php if($poi==1){ ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nlogNskill->Nskill_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nlogNskill->Nskill_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $nlogNskill->Nskill_Id)]); }?>
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