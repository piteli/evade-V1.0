<div class="panel panel-default">
                        <div class="panel-heading">
                          <h4><i class="fa fa-calculator"></i> Nursing Student Marks </h4>   
                        </div>
    <div class="panel-body">
    <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                <th><?= $this->Paginator->sort('No') ?></th>
                <th><?= $this->Paginator->sort('Student Name') ?></th>
                <th><?= $this->Paginator->sort('') ?></th>
                <th><?= $this->Paginator->sort('Student Id') ?></th>
                <th><?= $this->Paginator->sort('Score 1') ?></th>
                <th><?= $this->Paginator->sort('Score 2') ?></th>
                <th><?= $this->Paginator->sort('Score 3') ?></th>
                <th><?= $this->Paginator->sort('Score 4') ?></th>
                <th><?= $this->Paginator->sort('Score 5') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; foreach ($areaskillAttributes as $areaskillAttribute): $count= $count +1;?>
            <tr>
                <td><?= $count; ?></td>
                <td><?= h($areaskillAttribute->Attribute_Name) ?></td>
                <td><?= $this->Number->format($areaskillAttribute->nursing_id) ?></td>
                <td><?= h($areaskillAttribute->Attribute_No) ?></td>
                <td><?= $this->Number->format($areaskillAttribute->Attribute_Score1) ?></td>
                <td><?= $this->Number->format($areaskillAttribute->Attribute_Score2) ?></td>
                <td><?= $this->Number->format($areaskillAttribute->Attribute_Score3) ?></td>
                <td><?= $this->Number->format($areaskillAttribute->Attribute_Score4) ?></td>
                <td><?= $this->Number->format($areaskillAttribute->Attribute_Score5) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areaskillAttribute->Attribute_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areaskillAttribute->Attribute_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaskillAttribute->Attribute_Id)]) ?>
                </td>
            </tr>
             <?php endforeach; ?>
        </tbody>
    </table>
     </div>
                            
                      
                    <!--End Advanced Tables -->

