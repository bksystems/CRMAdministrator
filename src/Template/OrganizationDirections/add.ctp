<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationDirection $organizationDirection
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <?= $this->Html->link(__('List Organization Directions'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Organization Subdirections'), ['controller' => 'OrganizationSubdirections', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Organization Subdirection'), ['controller' => 'OrganizationSubdirections', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="organizationDirections form large-9 medium-8 columns content">
            <?= $this->Form->create($organizationDirection) ?>
            <fieldset>
                <legend><?= __('Add Organization Direction') ?></legend>
                <?php
                                        echo $this->Form->control('name', ['class' => 'form-control form-control-sm']);
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
