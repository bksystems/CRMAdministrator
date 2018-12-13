<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationType[]|\Cake\Collection\CollectionInterface $organizationTypes
 */
?>


<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Menu de acciones') ?></a>
            <?= $this->Html->link(__('New Organization Type'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Organization Offices'), ['controller' => 'OrganizationOffices', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Organization Office'), ['controller' => 'OrganizationOffices', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                        </div>
    </div>
    <div class="col-sm-10">
        <div class="organizationTypes index large-9 medium-8 columns content">
            <h3><?= __('Organization Types') ?></h3>
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
                <thead>
                    <tr>
                                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('modfied') ?></th>
                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($organizationTypes as $organizationType): ?>
                        <tr>
                                                                                                                                                                                                    <td><?= $this->Number->format($organizationType->id) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($organizationType->type) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($organizationType->enabled) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($organizationType->created) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($organizationType->modfied) ?></td>
                                                                                                                                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $organizationType->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organizationType->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organizationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationType->id)]) ?>
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
