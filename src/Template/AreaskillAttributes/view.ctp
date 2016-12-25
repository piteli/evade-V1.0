<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Areaskill Attribute'), ['action' => 'edit', $areaskillAttribute->Attribute_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Areaskill Attribute'), ['action' => 'delete', $areaskillAttribute->Attribute_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaskillAttribute->Attribute_Id)]) ?> </li>
        
    </ul>
</nav>
<div class="areaskillAttributes view large-9 medium-8 columns content">
    <h3><?= h($areaskillAttribute->Attribute_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Attribute Name') ?></th>
            <td><?= h($areaskillAttribute->Attribute_Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute No') ?></th>
            <td><?= h($areaskillAttribute->Attribute_No) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute Id') ?></th>
            <td><?= $this->Number->format($areaskillAttribute->Attribute_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nursing Id') ?></th>
            <td><?= $this->Number->format($areaskillAttribute->nursing_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute Score1') ?></th>
            <td><?= $this->Number->format($areaskillAttribute->Attribute_Score1) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute Score2') ?></th>
            <td><?= $this->Number->format($areaskillAttribute->Attribute_Score2) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute Score3') ?></th>
            <td><?= $this->Number->format($areaskillAttribute->Attribute_Score3) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute Score4') ?></th>
            <td><?= $this->Number->format($areaskillAttribute->Attribute_Score4) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute Score5') ?></th>
            <td><?= $this->Number->format($areaskillAttribute->Attribute_Score5) ?></td>
        </tr>
    </table>
</div>
