<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization $organization
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Organization'), ['action' => 'edit', $organization->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organization'), ['action' => 'delete', $organization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organization->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Organizations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Type Organizations'), ['controller' => 'TypeOrganizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Organization'), ['controller' => 'TypeOrganizations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organizations view large-9 medium-8 columns content">
    <h3><?= h($organization->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($organization->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Organization') ?></th>
            <td><?= $organization->has('type_organization') ? $this->Html->link($organization->type_organization->type, ['controller' => 'TypeOrganizations', 'action' => 'view', $organization->type_organization->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($organization->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Unique') ?></th>
            <td><?= $this->Number->format($organization->id_unique) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost Center') ?></th>
            <td><?= $this->Number->format($organization->cost_center) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organization Id') ?></th>
            <td><?= $this->Number->format($organization->organization_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($organization->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($organization->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $organization->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($organization->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Organizations') ?></h4>
        <?php if (!empty($organization->organizations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Id Unique') ?></th>
                <th scope="col"><?= __('Cost Center') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Organization Id') ?></th>
                <th scope="col"><?= __('Type Organization Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Enabled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($organization->organizations as $organizations): ?>
            <tr>
                <td><?= h($organizations->id) ?></td>
                <td><?= h($organizations->id_unique) ?></td>
                <td><?= h($organizations->cost_center) ?></td>
                <td><?= h($organizations->name) ?></td>
                <td><?= h($organizations->organization_id) ?></td>
                <td><?= h($organizations->type_organization_id) ?></td>
                <td><?= h($organizations->description) ?></td>
                <td><?= h($organizations->enabled) ?></td>
                <td><?= h($organizations->created) ?></td>
                <td><?= h($organizations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Organizations', 'action' => 'view', $organizations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Organizations', 'action' => 'edit', $organizations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Organizations', 'action' => 'delete', $organizations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
