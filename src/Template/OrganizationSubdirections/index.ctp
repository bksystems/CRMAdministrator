<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationSubdirection[]|\Cake\Collection\CollectionInterface $organizationSubdirections
 */
?>
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
               Menu de acciones
            </a>
            <?= $this->Html->link(__('Nueva Subdirección'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small'])?>
            <?= $this->Html->link(__('Listado de Oficinas'), ['controller' => 'OrganizationOffices', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('Listado de Dirección'), ['controller' => 'OrganizationDirections', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('Nueva Dirección'), ['controller' => 'OrganizationDirections', 'action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
        </div>
    </div>
    <div class="col-sm-10">
        <table id="dgv-organization-subdirections" cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
            <thead class="thead-dark">
                <tr>
                    <td>Nombre de subdirección</td>
                    <td>Descripción de subdirección</td>
                    <td>Pertenece a dirección</td>
                    <td>Estatus</td>
                    <td>Acciones</td>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        var provTable = $('#dgv-organization-subdirections').dataTable({
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
				url: 'organization-subdirections/getSubdirectionsAll.json',
				dataSrc: 'organization_subdirecctions_all'
            },
    		columns: [
				{data: 'name'},
                {data: 'description'},
                {data: 'direction_name'},
                {data: 'enabled'},
                {"mRender": function ( data, type, row ) {
                        return '<a class="text-info" href=organization-subdirections/view/'+row.id+'>DETALLE</a> | '+ 
                        '<a class="text-warning" href=organization-subdirections/edit/'+row.id+'>EDITAR</a> | '+ 
                        '<a class="text-danger" href="#">ELIMINAR</a>';}
                }
            ],
            "processing": true,
        });

    });
</script>
