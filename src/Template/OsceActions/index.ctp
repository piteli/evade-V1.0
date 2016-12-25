
    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-ambulance"></i>  Osce Actions List </h4>
                        </div>
    <div class="panel-body">
    
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <br>
                                    <thead>
                                        <tr>
                <th><?= $this->Paginator->sort('Question_id') ?></th>
                <th><?= $this->Paginator->sort('Question_name') ?></th>
                <th><?= $this->Paginator->sort('Question_station') ?></th>
                <th><?= $this->Paginator->sort('Question_fmark') ?></th>
                <th><?= $this->Paginator->sort('Question_set') ?></th>
                <th><?= $this->Paginator->sort('Question_sem') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach ($osceActions as $osceAction): $count= $count +1; ?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($osceAction->Question_name) ?></td>
                <td><?= $this->Number->format($osceAction->Question_station) ?></td>
                <td><?= $this->Number->format($osceAction->Question_fmark) ?></td>
                <td><?= $this->Number->format($osceAction->Question_set) ?></td>
                <td><?= h($osceAction->Question_sem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $osceAction->Question_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $osceAction->Act_id], ['confirm' => __('Are you sure you want to delete # {0}?', $osceAction->Act_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   

