<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrganizationDirection[]|\Cake\Collection\CollectionInterface $organizationDirections
 */
?>

<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
               Menu de acciones
            </a>
            <?= $this->Html->link(__('Nueva Dirección'), ['action' => 'add'],['class' => 'list-group-item list-group-item-action small'])?>
            <?= $this->Html->link(__('Listado de Subdirección'), ['controller' => 'OrganizationSubdirections', 'action' => 'index'],['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('Nueva Subdirección'), ['controller' => 'OrganizationSubdirections', 'action' => 'add'],['class' => 'list-group-item list-group-item-action small']) ?>
        </div>
    </div>
    <div class="col-sm-10">
        <table id="dgv-organization-directions" cellpadding="0" cellspacing="0" class="table table-hover table-striped" style="font-size:12px;">
            <thead>
                <tr>
                    <td>Nombre de dirección</td>
                    <td>Descripción de dirección</td>
                    <td>Estado de dirección</td>
                    <td>Acciones</td>
                </tr>
            </thead>
        </table>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){

        var provTable = $('#dgv-organization-directions').dataTable({
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
				url: 'organization-directions/getDirectionsAll.json',
				dataSrc: 'organization_directions'
            },
    		columns: [
				{data: 'name'},
                {data: 'description'},
                {data: 'enabled'},
                {"mRender": function ( data, type, row ) {
                        return '<a class="btn btn-sm btn-outline-info" href=organization-directions/view/'+row.id+'>Detalles</a> '+ 
                        '<a class="btn btn-sm btn-outline-warning" href=organization-directions/edit/'+row.id+'>Editar</a> '+ 
                        '<a class="btn btn-sm btn-outline-danger" href="#">Eliminar</a>';}
                }
            ],
            "processing": true,
        });

    });
</script>
