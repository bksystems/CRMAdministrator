<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolsPermission $rolsPermission
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rolsPermission->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rolsPermission->id)]
            )
            ?></li>
                        <?= $this->Html->link(__('List Rols Permissions'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="rolsPermissions form large-9 medium-8 columns content">
            <?= $this->Form->create($rolsPermission) ?>
            <fieldset>
                <legend><?= __('Edit Rols Permission') ?></legend>
                <?php
                                        echo $this->Form->control('rol_id', ['options' => $rols, ['class' => 'form-control form-control-sm']]);
                    echo $this->Form->control('permission_id', ['options' => $permissions, ['class' => 'form-control form-control-sm']]);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
