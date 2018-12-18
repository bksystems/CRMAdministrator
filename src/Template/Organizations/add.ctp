<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization $organization
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <?= $this->Html->link(__('List Organizations'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Type Organizations'), ['controller' => 'TypeOrganizations', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Type Organization'), ['controller' => 'TypeOrganizations', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Organizations'), ['controller' => 'Organizations', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Organization'), ['controller' => 'Organizations', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="organizations form large-9 medium-8 columns content">
            <?= $this->Form->create($organization) ?>
            <fieldset>
                <legend><?= __('Add Organization') ?></legend>
                <?php
                    echo $this->Form->control('name', ['label' => 'Nombre de Organización', 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('organization_id', ['label' => 'Organización Padre', 'option' => $organizations, 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('type_organization_id', ['label' => 'Tipo de Organización', 'options' => $typeOrganizations, 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('description', ['label' => 'Descripción', 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('enabled', ['label' => '¿Habilitar?', 'class' => 'form-control form-control-sm']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
