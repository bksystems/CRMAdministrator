<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeOrganization $typeOrganization
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeOrganization->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typeOrganization->id)]
            )
            ?></li>
                        <?= $this->Html->link(__('List Type Organizations'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="typeOrganizations form large-9 medium-8 columns content">
            <?= $this->Form->create($typeOrganization) ?>
            <fieldset>
                <legend><?= __('Edit Type Organization') ?></legend>
                <?php
                                        echo $this->Form->control('type', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('description', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('enabled', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('modfied', ['class' => 'form-control form-control-sm'], ['empty' => true]);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
