<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOrganization $typeOrganization
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type Organization'), ['action' => 'edit', $typeOrganization->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type Organization'), ['action' => 'delete', $typeOrganization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeOrganization->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Type Organizations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Organization'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeOrganizations view large-9 medium-8 columns content">
    <h3><?= h($typeOrganization->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($typeOrganization->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeOrganization->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typeOrganization->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modfied') ?></th>
            <td><?= h($typeOrganization->modfied) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $typeOrganization->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($typeOrganization->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Organizations') ?></h4>
        <?php if (!empty($typeOrganization->organizations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Organization Id') ?></th>
                <th scope="col"><?= __('Type Organization Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Enabled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typeOrganization->organizations as $organizations): ?>
            <tr>
                <td><?= h($organizations->id) ?></td>
                <td><?= h($organizations->name) ?></td>
                <td><?= h($organizations->organization_id) ?></td>
                <td><?= h($organizations->type_organization_id) ?></td>
                <td><?= h($organizations->description) ?></td>
                <td><?= h($organizations->enabled) ?></td>
                <td><?= h($organizations->created) ?></td>
                <td><?= h($organizations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Organizations', 'action' => 'view', $organizations->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Organizations', 'action' => 'edit', $organizations->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Organizations', 'action' => 'delete', $organizations->], ['confirm' => __('Are you sure you want to delete # {0}?', $organizations->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
