<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationType $organizationType
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <?= $this->Html->link(__('List Organization Types'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Organization Offices'), ['controller' => 'OrganizationOffices', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Organization Office'), ['controller' => 'OrganizationOffices', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="organizationTypes form large-9 medium-8 columns content">
            <?= $this->Form->create($organizationType) ?>
            <fieldset>
                <legend><?= __('Add Organization Type') ?></legend>
                <?php
                    echo $this->Form->control('type', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('description', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('enabled', [
                        'div' => [
                            'class' => 'input-group'
                        ], 
                        'label' => 'Habilitar',
                        'type' => 'checkbox',
                        'before' => '<span class="input-group-addon">']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
