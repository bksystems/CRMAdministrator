<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolsPermission[]|\Cake\Collection\CollectionInterface $rolsPermissions
 */
?>


<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Menu de acciones') ?></a>
            <?= $this->Html->link(__('New Rols Permission'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                        </div>
    </div>
    <div class="col-sm-10">
        <div class="rolsPermissions index large-9 medium-8 columns content">
            <h3><?= __('Rols Permissions') ?></h3>
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
                <thead>
                    <tr>
                                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('rol_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('permission_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rolsPermissions as $rolsPermission): ?>
                        <tr>
                                                                                                                                                                                                                                                            <td><?= $this->Number->format($rolsPermission->id) ?></td>
                                                                                                                                                                                                                                <td><?= $rolsPermission->has('rol') ? $this->Html->link($rolsPermission->rol->name, ['controller' => 'Rols', 'action' => 'view', $rolsPermission->rol->id]) : '' ?></td>
                                                                                                                                                                                                                                                            <td><?= $rolsPermission->has('permission') ? $this->Html->link($rolsPermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $rolsPermission->permission->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                <td><?= h($rolsPermission->created) ?></td>
                                                                                                                                                                                                                                                                                                                    <td><?= h($rolsPermission->modified) ?></td>
                                                                                                                                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $rolsPermission->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolsPermission->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolsPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolsPermission->id)]) ?>
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