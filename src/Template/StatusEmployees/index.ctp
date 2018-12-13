<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusEmployee[]|\Cake\Collection\CollectionInterface $statusEmployees
 */
?>


<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Menu de acciones') ?></a>
            <?= $this->Html->link(__('New Status Employee'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                        </div>
    </div>
    <div class="col-sm-10">
        <div class="statusEmployees index large-9 medium-8 columns content">
            <h3><?= __('Status Employees') ?></h3>
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
                <thead>
                    <tr>
                                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statusEmployees as $statusEmployee): ?>
                        <tr>
                                                                                                                                                                                                    <td><?= $this->Number->format($statusEmployee->id) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($statusEmployee->status) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($statusEmployee->enabled) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($statusEmployee->created) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($statusEmployee->modified) ?></td>
                                                                                                                                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $statusEmployee->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusEmployee->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusEmployee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusEmployee->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
             </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </div>
        </div>
    </div>
</div>
