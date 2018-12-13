<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusEmployee $statusEmployee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Status Employee'), ['action' => 'edit', $statusEmployee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Status Employee'), ['action' => 'delete', $statusEmployee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusEmployee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Status Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="statusEmployees view large-9 medium-8 columns content">
    <h3><?= h($statusEmployee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($statusEmployee->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($statusEmployee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($statusEmployee->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($statusEmployee->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $statusEmployee->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($statusEmployee->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($statusEmployee->employees)): ?>
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
            <?php foreach ($statusEmployee->employees as $employees): ?>
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
