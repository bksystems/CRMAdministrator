<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>


<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Menu de acciones') ?></a>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Organization Offices'), ['controller' => 'OrganizationOffices', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Organization Office'), ['controller' => 'OrganizationOffices', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Employee Positions'), ['controller' => 'EmployeePositions', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Employee Position'), ['controller' => 'EmployeePositions', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Status Employees'), ['controller' => 'StatusEmployees', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Status Employee'), ['controller' => 'StatusEmployees', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                                                   
            <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                        </div>
    </div>
    <div class="col-sm-10">
        <div class="employees index large-9 medium-8 columns content">
            <h3><?= __('Employees') ?></h3>
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
                <thead>
                    <tr>
                                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('roster') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('mother_name') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('names') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('organization_office_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('employee_position_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('status_employee_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('is_employee_system') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employees as $employee): ?>
                        <tr>
                                                                                                                                                                                                                                                            <td><?= $this->Number->format($employee->id) ?></td>
                                                                                                                                                                                                                                                                                                                    <td><?= $this->Number->format($employee->roster) ?></td>
                                                                                                                                                                                                                                                                                                                    <td><?= h($employee->last_name) ?></td>
                                                                                                                                                                                                                                                                                                                    <td><?= h($employee->mother_name) ?></td>
                                                                                                                                                                                                                                                                                                                    <td><?= h($employee->names) ?></td>
                                                                                                                                                                                                                                <td><?= $employee->has('organization_office') ? $this->Html->link($employee->organization_office->name, ['controller' => 'OrganizationOffices', 'action' => 'view', $employee->organization_office->id]) : '' ?></td>
                                                                                                                                                                                                                                                            <td><?= $employee->has('employee_position') ? $this->Html->link($employee->employee_position->position, ['controller' => 'EmployeePositions', 'action' => 'view', $employee->employee_position->id]) : '' ?></td>
                                                                                                                                                                                                                                                            <td><?= $employee->has('status_employee') ? $this->Html->link($employee->status_employee->status, ['controller' => 'StatusEmployees', 'action' => 'view', $employee->status_employee->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                <td><?= h($employee->is_employee_system) ?></td>
                                                                                                                                                                                                                                                                                                                    <td><?= h($employee->created) ?></td>
                                                                                                                                                                                                                                                                                                                    <td><?= h($employee->modified) ?></td>
                                                                                                                                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
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
