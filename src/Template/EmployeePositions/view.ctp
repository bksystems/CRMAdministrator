<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeePosition $employeePosition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee Position'), ['action' => 'edit', $employeePosition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee Position'), ['action' => 'delete', $employeePosition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeePosition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employee Positions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee Position'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employeePositions view large-9 medium-8 columns content">
    <h3><?= h($employeePosition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= h($employeePosition->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employeePosition->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employeePosition->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employeePosition->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $employeePosition->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($employeePosition->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($employeePosition->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Roster') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Mother Name') ?></th>
                <th scope="col"><?= __('Names') ?></th>
                <th scope="col"><?= __('Organization Office Id') ?></th>
                <th scope="col"><?= __('Employee Position Id') ?></th>
                <th scope="col"><?= __('Status Employee Id') ?></th>
                <th scope="col"><?= __('Is Employee System') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employeePosition->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->roster) ?></td>
                <td><?= h($employees->last_name) ?></td>
                <td><?= h($employees->mother_name) ?></td>
                <td><?= h($employees->names) ?></td>
                <td><?= h($employees->organization_office_id) ?></td>
                <td><?= h($employees->employee_position_id) ?></td>
                <td><?= h($employees->status_employee_id) ?></td>
                <td><?= h($employees->is_employee_system) ?></td>
                <td><?= h($employees->created) ?></td>
                <td><?= h($employees->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
