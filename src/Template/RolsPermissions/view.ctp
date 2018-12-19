<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolsPermission $rolsPermission
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rols Permission'), ['action' => 'edit', $rolsPermission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rols Permission'), ['action' => 'delete', $rolsPermission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolsPermission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rols Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rols Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rolsPermissions view large-9 medium-8 columns content">
    <h3><?= h($rolsPermission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= $rolsPermission->has('rol') ? $this->Html->link($rolsPermission->rol->name, ['controller' => 'Rols', 'action' => 'view', $rolsPermission->rol->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permission') ?></th>
            <td><?= $rolsPermission->has('permission') ? $this->Html->link($rolsPermission->permission->id, ['controller' => 'Permissions', 'action' => 'view', $rolsPermission->permission->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rolsPermission->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rolsPermission->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rolsPermission->modified) ?></td>
        </tr>
    </table>
</div>
