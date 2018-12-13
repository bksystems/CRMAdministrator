<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationDirection $organizationDirection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Organization Direction'), ['action' => 'edit', $organizationDirection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organization Direction'), ['action' => 'delete', $organizationDirection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationDirection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Organization Directions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Direction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organization Subdirections'), ['controller' => 'OrganizationSubdirections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization Subdirection'), ['controller' => 'OrganizationSubdirections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organizationDirections view large-9 medium-8 columns content">
    <h3><?= h($organizationDirection->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($organizationDirection->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($organizationDirection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($organizationDirection->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($organizationDirection->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $organizationDirection->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($organizationDirection->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Organization Subdirections') ?></h4>
        <?php if (!empty($organizationDirection->organization_subdirections)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Organization Direction Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Enabled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($organizationDirection->organization_subdirections as $organizationSubdirections): ?>
            <tr>
                <td><?= h($organizationSubdirections->id) ?></td>
                <td><?= h($organizationSubdirections->name) ?></td>
                <td><?= h($organizationSubdirections->organization_direction_id) ?></td>
                <td><?= h($organizationSubdirections->description) ?></td>
                <td><?= h($organizationSubdirections->enabled) ?></td>
                <td><?= h($organizationSubdirections->created) ?></td>
                <td><?= h($organizationSubdirections->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrganizationSubdirections', 'action' => 'view', $organizationSubdirections->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrganizationSubdirections', 'action' => 'edit', $organizationSubdirections->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrganizationSubdirections', 'action' => 'delete', $organizationSubdirections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizationSubdirections->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
