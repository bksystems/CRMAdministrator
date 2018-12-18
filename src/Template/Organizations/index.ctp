<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization[]|\Cake\Collection\CollectionInterface $organizations
 */
?>


<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Menu de acciones') ?></a>
            <?= $this->Html->link(__('New Organization'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
                                                           
            <?= $this->Html->link(__('List Type Organizations'), ['controller' => 'TypeOrganizations', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Type Organization'), ['controller' => 'TypeOrganizations', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                                                                                                        </div>
    </div>
    <div class="col-sm-10">
        <div class="organizations index large-9 medium-8 columns content">
            <h3><?= __('Organizations') ?></h3>
            <table cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
                <thead>
                    <tr>
						<th scope="col"><?= $this->Paginator->sort('id') ?></th>
						<th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('type_organization_id') ?></th>
						<th scope="col"><?= $this->Paginator->sort('organization_id') ?></th>
						<th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
						<th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($organizations as $organization): ?>
                        <tr>
							<td><?= $this->Number->format($organization->id) ?></td>
							<td><?= h($organization->name) ?></td>
                            <td><?= $organization->has('type_organization') ? $this->Html->link($organization->type_organization, ['controller' => 'TypeOrganizations', 'action' => 'view', $organization->type_organization_id]) : '' ?></td>
							<td><?= h($organization->name_level) ?></td>	
							<td><?= h($organization->enabled) ?></td>
							<td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $organization->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organization->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organization->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organization->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
             </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </div>
        </div>
    </div>
</div>
