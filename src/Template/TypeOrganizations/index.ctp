<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOrganization[]|\Cake\Collection\CollectionInterface $typeOrganizations
 */
?>


<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Menu de acciones') ?></a>
            <?= $this->Html->link(__('New Type Organization'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                        </div>
    </div>
    <div class="col-sm-10">
        <div class="typeOrganizations index large-9 medium-8 columns content">
            <h3><?= __('Type Organizations') ?></h3>
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
                    <?php foreach ($typeOrganizations as $typeOrganization): ?>
                        <tr>
                                                                                                                                                                                                    <td><?= $this->Number->format($typeOrganization->id) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($typeOrganization->type) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($typeOrganization->enabled) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($typeOrganization->created) ?></td>
                                                                                                                                                                                                                                                            <td><?= h($typeOrganization->modfied) ?></td>
                                                                                                                                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $typeOrganization->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeOrganization->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeOrganization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeOrganization->id)]) ?>
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
