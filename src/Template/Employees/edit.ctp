<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]
            )
            ?></li>
                        <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Organization Offices'), ['controller' => 'OrganizationOffices', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Organization Office'), ['controller' => 'OrganizationOffices', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('List Employee Positions'), ['controller' => 'EmployeePositions', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Employee Position'), ['controller' => 'EmployeePositions', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('List Status Employees'), ['controller' => 'StatusEmployees', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Status Employee'), ['controller' => 'StatusEmployees', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="employees form large-9 medium-8 columns content">
            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Edit Employee') ?></legend>
                <?php
                                        echo $this->Form->control('roster', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('last_name', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('mother_name', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('names', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('organization_office_id', ['options' => $organizationOffices, ['class' => 'form-control form-control-sm']]);
                    echo $this->Form->control('employee_position_id', ['options' => $employeePositions, ['class' => 'form-control form-control-sm']]);
                    echo $this->Form->control('status_employee_id', ['options' => $statusEmployees, ['class' => 'form-control form-control-sm']]);
                    echo $this->Form->control('is_employee_system', ['class' => 'form-control form-control-sm']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
