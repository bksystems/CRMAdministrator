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

            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Add Employee') ?></legend>
                <?php
                    echo $this->Form->control('roster', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('last_name', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('mother_name', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('names', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('organization_directions', ['id' => 'fields_direction', 'options' =>false, 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('organization_subdirections', ['id' => 'fields_subdirection', 'options' => false, 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('organization_office_id', ['id' => 'fields_office', 'options' => false, 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('employee_position_id', ['options' => $employeePositions, 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('status_employee_id', ['options' => $statusEmployees, 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('is_employee_system', ['class' => 'form-control form-control-sm'], ['type' => 'checkbox']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    
</div>


<script type="text/javascript">
     $(document).ready(function(){

        load_directions();
        $('#fields_direction').prop('disabled', 'disabled');
        $('#fields_subdirection').prop('disabled', 'disabled');
        $('#fields_office').prop('disabled', 'disabled');

        $('#fields_direction').change(function() {
            var direction_id = $(this).val();
            var targeturl = 'ajax-get-subdirections/'+direction_id+'.json';
            if(direction_id <= 0){
                $('#fields_subdirection').empty();
                $('#fields_office').empty();
                $('#fields_subdirection').prop('disabled', 'disabled');
                $('#fields_office').prop('disabled', 'disabled');
            }else{
                $.ajax({
                    url: targeturl,
                    dataType:'JSON',
                    success:function(data){
                        $.each(data, function(i, item) {
                            $('#fields_subdirection').empty();
                            $('#fields_subdirection').append('<option value="0" selected="selected">Selecciona una opción</option>');
                            $.each(item, function (i, itm){                         
                                $('#fields_subdirection').append('<option value="'+ i + '" selected="selected">' +itm + '</option>');
                            });
                        });
                    },
                    error:function(){

                    },
                    complete:function(){
                        $('#fields_subdirection').prop('disabled', false);
                        $('#fields_subdirection').val(0);
                        $('#fields_office').empty();
                        $('#fields_office').prop('disabled', 'disabled');
                    }
                });
            }
         });

         $('#fields_subdirection').change(function() {
            var subdirection_id = $(this).val();
            var targeturl = 'ajax-get-offices/'+subdirection_id+'.json';
            if(subdirection_id <= 0){
                $('#fields_office').prop('disabled', 'disabled');
            }else{
                $.ajax({
                    url: targeturl,
                    dataType:'JSON',
                    success:function(data){
                        $.each(data, function(i, item) {
                            $('#fields_office').empty();
                            $('#fields_office').append('<option value="0" selected="selected">Selecciona una opción</option>');
                            $.each(item, function (i, itm){                         
                                $('#fields_office').append('<option value="'+ i + '" selected="selected">' +itm + '</option>');
                            });
                        });
                    },
                    error:function(){

                    },
                    complete:function(){
                        $('#fields_office').prop('disabled', false);
                        $('#fields_office').val(0);
                    }
                });
            }
         });
    
    });

    function load_directions(){
        $.ajax({
            url: 'ajax-get-directions-all.json',
            dataType:'JSON',
            success:function(data){
                $.each(data, function(i, item) {
                        $('#fields_direction').empty();
                        $('#fields_direction').append('<option value="0" selected="selected">Selecciona una opción</option>');
                    $.each(item, function (i, itm){                         
                        $('#fields_direction').append('<option value="'+ i + '" selected="selected">' +itm + '</option>');
                    });
                    $("#fields_direction").val(0)
                });
            },
            error:function(){

            },
            complete:function(){
                $('#fields_direction').prop('disabled', false);
            }
        });
    }
</script>
