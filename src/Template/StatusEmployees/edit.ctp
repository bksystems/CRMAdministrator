<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusEmployee $statusEmployee
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusEmployee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statusEmployee->id)]
            )
            ?></li>
                        <?= $this->Html->link(__('List Status Employees'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="statusEmployees form large-9 medium-8 columns content">
            <?= $this->Form->create($statusEmployee) ?>
            <fieldset>
                <legend><?= __('Edit Status Employee') ?></legend>
                <?php
                                        echo $this->Form->control('status', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('description', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('enabled', ['class' => 'form-control form-control-sm']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
