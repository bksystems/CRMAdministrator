<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organization Offices'), ['controller' => 'OrganizationOffices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Office'), ['controller' => 'OrganizationOffices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employee Positions'), ['controller' => 'EmployeePositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee Position'), ['controller' => 'EmployeePositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Status Employees'), ['controller' => 'StatusEmployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status Employee'), ['controller' => 'StatusEmployees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->full_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($employee->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mother Name') ?></th>
            <td><?= h($employee->mother_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Names') ?></th>
            <td><?= h($employee->names) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organization Office') ?></th>
            <td><?= $employee->has('organization_office') ? $this->Html->link($employee->organization_office->name, ['controller' => 'OrganizationOffices', 'action' => 'view', $employee->organization_office->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee Position') ?></th>
            <td><?= $employee->has('employee_position') ? $this->Html->link($employee->employee_position->position, ['controller' => 'EmployeePositions', 'action' => 'view', $employee->employee_position->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Employee') ?></th>
            <td><?= $employee->has('status_employee') ? $this->Html->link($employee->status_employee->status, ['controller' => 'StatusEmployees', 'action' => 'view', $employee->status_employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Roster') ?></th>
            <td><?= $this->Number->format($employee->roster) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employee->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employee->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Employee System') ?></th>
            <td><?= $employee->is_employee_system ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($employee->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Rol Id') ?></th>
                <th scope="col"><?= __('Status User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->employee_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->rol_id) ?></td>
                <td><?= h($users->status_user_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
