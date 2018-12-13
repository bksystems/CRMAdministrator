<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationOffice[]|\Cake\Collection\CollectionInterface $organizationOffices
 */
?>


<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Actions') ?></a>
            <?= $this->Html->link(__('New Organization Office'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('List Organization Subdirections'), ['controller' => 'OrganizationSubdirections', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('New Organization Subdirection'), ['controller' => 'OrganizationSubdirections', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('List Organization Types'), ['controller' => 'OrganizationTypes', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('New Organization Type'), ['controller' => 'OrganizationTypes', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
        </div>
    </div>
    <div class="col-sm-10">
        <h3><?= __('Organization Offices') ?></h3>
        <table id="dgv-organization-offices" cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
            <thead>
                <tr>
                    <td>Identificador</td>
                    <td>Oficina</td>
                    <td>Tipo</td>
                    <td>Pertenece a subdirección</td>
                    <td>Estatus</td>
                    <td>Acciones</td>
                </tr>
            </thead>
        </table>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){

        var provTable = $('#dgv-organization-offices').dataTable({
            'language':{
				'search':'Buscar _INPUT_ en la tabla',
				'lengthMenu': 'Mostrar _MENU_ rengistros por pagina',
				'zeroRecords':'No se encontrar registros con la busqueda',
				'info':'Mostrando paguina _PAGE_ de _PAGES_',
				'infoEmpty':'Ningun registro encontrado',
				'infoFiltered':" - filtrando registros de un total de _MAX_",
				'paginate':{
					'next':'Siguiente',
					'previous':'Anterior'
                },
                'processing': 'Cargando información....'
            },
            ajax: {
				url: 'organization-offices/getOfficesAll.json',
				dataSrc: 'organization_offices_all'
            },
    		columns: [
                {data: 'cost_center'},
				{data: 'name'},
                {data: 'type'},
                {data: 'subdirection_name'},
                {data: 'enabled'},
                {"mRender": function ( data, type, row ) {
                        return '<a class="text-info" href=organization-offices/view/'+row.id+'>DETALLE</a> | '+ 
                        '<a class="text-warning" href=organization-offices/edit/'+row.id+'>EDITAR</a> | '+ 
                        '<a class="text-danger" href="#">ELIMINAR</a>';}
                }
            ],
            "processing": true,
        });

    });
</script>
