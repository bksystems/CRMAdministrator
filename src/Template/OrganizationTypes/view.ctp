<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationType $organizationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Organization Type'), ['action' => 'edit', $organizationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organization Type'), ['action' => 'delete', $organizationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Organization Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organization Offices'), ['controller' => 'OrganizationOffices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Office'), ['controller' => 'OrganizationOffices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organizationTypes view large-9 medium-8 columns content">
    <h3><?= h($organizationType->type) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($organizationType->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($organizationType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($organizationType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modfied') ?></th>
            <td><?= h($organizationType->modfied) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $organizationType->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($organizationType->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Organization Offices') ?></h4>
        <?php if (!empty($organizationType->organization_offices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cost Center') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Organization Subdirection Id') ?></th>
                <th scope="col"><?= __('Organization Type Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Enabled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($organizationType->organization_offices as $organizationOffices): ?>
            <tr>
                <td><?= h($organizationOffices->id) ?></td>
                <td><?= h($organizationOffices->cost_center) ?></td>
                <td><?= h($organizationOffices->name) ?></td>
                <td><?= h($organizationOffices->organization_subdirection_id) ?></td>
                <td><?= h($organizationOffices->organization_type_id) ?></td>
                <td><?= h($organizationOffices->description) ?></td>
                <td><?= h($organizationOffices->enabled) ?></td>
                <td><?= h($organizationOffices->created) ?></td>
                <td><?= h($organizationOffices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrganizationOffices', 'action' => 'view', $organizationOffices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrganizationOffices', 'action' => 'edit', $organizationOffices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrganizationOffices', 'action' => 'delete', $organizationOffices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationOffices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
