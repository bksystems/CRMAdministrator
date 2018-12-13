<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationOffice $organizationOffice
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
            <?= $this->Html->link(__('Listado de oficinas'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('Listado de subdirecciones'), ['controller' => 'OrganizationSubdirections', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('Crear subdirección'), ['controller' => 'OrganizationSubdirections', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('Listado tipos de OS'), ['controller' => 'OrganizationTypes', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('Crear tipo de OS'), ['controller' => 'OrganizationTypes', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="organizationOffices form large-9 medium-8 columns content">
            <?= $this->Form->create($organizationOffice) ?>
            <fieldset>
                <legend><?= __('Add Organization Office') ?></legend>
                <?php
                        echo $this->Form->control('cost_center', ['class' => 'form-control form-control-sm']);
                        echo $this->Form->control('name', ['class' => 'form-control form-control-sm']);
                        echo $this->Form->control('organization_direction', ['id' => 'field_direction', 'class' => 'form-control form-control-sm','options' => $organizationDirections]);
                        echo $this->Form->control('organization_subdirection_id',['id' => 'field_subdirection', 'class' => 'form-control form-control-sm']);
                        echo $this->Form->control('organization_type_id', ['class' => 'form-control form-control-sm', 'id' => 'subdirectionField', 'options' => $organizationTypes]);
                        echo $this->Form->control('enabled', [
                            'div' => [
                                'class' => 'input-group'
                            ], 
                            'label' => 'Habilitar',
                            'type' => 'checkbox',
                            'before' => '<span class="input-group-addon">']);
                        echo $this->Form->control('description', ['class' => 'form-control form-control-sm']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script type="text/javascript">
     $(document).ready(function(){
        $('#field_direction').change(function() {
            var direction_id = $(this).val();
            $.ajax({
                url: 'ajax-get-subdirections/'+ direction_id + '.json',
                dataType:'JSON',
                success:function(data){
                    $.each(data, function(i, item) {
                         $('#field_subdirection').empty();
                        $.each(item, function (i, itm){                         
                            $('#field_subdirection').append('<option value="'+ i + '" selected="selected">' +itm + '</option>');
                        });
                    });
                }
            });
         });
    });
</script>
