<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationSubdirection $organizationSubdirection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Organization Subdirection'), ['action' => 'edit', $organizationSubdirection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organization Subdirection'), ['action' => 'delete', $organizationSubdirection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationSubdirection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Organization Subdirections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Subdirection'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organization Directions'), ['controller' => 'OrganizationDirections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Direction'), ['controller' => 'OrganizationDirections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organizationSubdirections view large-9 medium-8 columns content">
    <h3><?= h($organizationSubdirection->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($organizationSubdirection->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organization Direction') ?></th>
            <td><?= $organizationSubdirection->has('organization_direction') ? $this->Html->link($organizationSubdirection->organization_direction->name, ['controller' => 'OrganizationDirections', 'action' => 'view', $organizationSubdirection->organization_direction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($organizationSubdirection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($organizationSubdirection->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($organizationSubdirection->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $organizationSubdirection->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($organizationSubdirection->description)); ?>
    </div>
</div>
