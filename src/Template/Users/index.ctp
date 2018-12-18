<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>


<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Menu de acciones') ?></a>
            <?= $this->Html->link(__('New User'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                        </div>
    </div>
    <div class="col-sm-10">
        <div class="users index large-9 medium-8 columns content">
            <h3><?= __('Users') ?></h3>
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
                <thead>
                    <tr>
                                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('rol_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('status_user_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                                                                                                                                                                                                                                                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= $user->has('employee') ? $this->Html->link($user->employee->full_name, ['controller' => 'Employees', 'action' => 'view', $user->employee->id]) : '' ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->rol->name) ?></td>
                            <td><?= h($user->status_user->status) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
