<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeePosition $employeePosition
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <?= $this->Html->link(__('List Employee Positions'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="employeePositions form large-9 medium-8 columns content">
            <?= $this->Form->create($employeePosition) ?>
            <fieldset>
                <legend><?= __('Add Employee Position') ?></legend>
                <?php
                                        echo $this->Form->control('position', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('description', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('enabled', ['class' => 'form-control form-control-sm']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
