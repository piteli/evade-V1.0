  <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-graduation-cap"></i> Nursing Student List </h4>   
                        </div>
    <div class="panel-body">
    <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                <th><?= $this->Paginator->sort('Student Id') ?></th>
                <th><?= $this->Paginator->sort('Student Name') ?></th>
                <th><?= $this->Paginator->sort('Semester') ?></th>
                <th><?= $this->Paginator->sort('Placement') ?></th>
                <th><?= $this->Paginator->sort('Nursing skill supervised by') ?></th>
                <th><?= $this->Paginator->sort('Area skill supervised by') ?></th>
                <th><?= $this->Paginator->sort('Osce station 1 Supervisor') ?></th>
                <th><?= $this->Paginator->sort('Osce station 2 Supervisor') ?></th>
                <th><?= $this->Paginator->sort('Osce station 3 Supervisor') ?></th>
                <th><?= $this->Paginator->sort('Osce station 4 Supervisor') ?></th>
                <th><?= $this->Paginator->sort('Osce station 5 Supervisor') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nursings as $nursing): ?>
            <tr>
                
                <td><?= h($nursing->nursing_no) ?></td>
                <td><?= h($nursing->nursing_name) ?></td>
                <td><?= $this->Number->format($nursing->nursing_sem) ?></td>
                <td><?= h($nursing->nursing_placement) ?></td>
                <td><?= h($nursing->eva_nskill) ?></td>
                <td><?= h($nursing->eva_askill) ?></td>
                <td><?= h($nursing->eva_osce) ?></td>
                <td><?= h($nursing->eva_osce2) ?></td>
                <td><?= h($nursing->eva_osce3) ?></td>
                <td><?= h($nursing->eva_osce4) ?></td>
                <td><?= h($nursing->eva_osce5) ?></td>
                <td class="actions">
                
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nursing->nursing_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nursing->nursing_id], ['confirm' => __('Are you sure you want to delete # {0}?', $nursing->nursing_id)]) ?>
                        
                   
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
     </div>
                            
                      
                    <!--End Advanced Tables -->
