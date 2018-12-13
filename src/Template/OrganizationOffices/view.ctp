<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationOffice $organizationOffice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Organization Office'), ['action' => 'edit', $organizationOffice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organization Office'), ['action' => 'delete', $organizationOffice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationOffice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Organization Offices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Office'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organization Subdirections'), ['controller' => 'OrganizationSubdirections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Subdirection'), ['controller' => 'OrganizationSubdirections', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organization Types'), ['controller' => 'OrganizationTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Type'), ['controller' => 'OrganizationTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organizationOffices view large-9 medium-8 columns content">
    <h3><?= h($organizationOffice->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($organizationOffice->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organization Subdirection') ?></th>
            <td><?= $organizationOffice->has('organization_subdirection') ? $this->Html->link($organizationOffice->organization_subdirection->name, ['controller' => 'OrganizationSubdirections', 'action' => 'view', $organizationOffice->organization_subdirection->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organization Type') ?></th>
            <td><?= $organizationOffice->has('organization_type') ? $this->Html->link($organizationOffice->organization_type->type, ['controller' => 'OrganizationTypes', 'action' => 'view', $organizationOffice->organization_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($organizationOffice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost Center') ?></th>
            <td><?= $this->Number->format($organizationOffice->cost_center) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($organizationOffice->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($organizationOffice->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $organizationOffice->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($organizationOffice->description)); ?>
    </div>
</div>
