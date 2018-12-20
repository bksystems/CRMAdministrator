<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestión de actividades
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link(__('Actividad en campo'), ['action' => 'index',  'controller' => 'TblSysOrganizations'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Accesos'), ['action' => 'index',  'controller' => 'TblSysOrganizationLevelTypes'],['class' => 'dropdown-item small']) ?>
          <div class="dropdown-divider">a</div>
          <?= $this->Html->link(__('Dispositivos'), ['action' => 'index',  'controller' => 'TblSysEmployees'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Tablas'), ['action' => 'index',  'controller' => 'TblSysEmployeePositionTypes'],['class' => 'dropdown-item small']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administración</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link(__('Organizaciones'), ['action' => 'index',  'controller' => 'organizations'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Tipos de organización'), ['action' => 'index',  'controller' => 'type_organizations'],['class' => 'dropdown-item small']) ?>
          <!--<?= $this->Html->link(__('Direcciones'), ['action' => 'index',  'controller' => 'organization_directions'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Subdirecciones'), ['action' => 'index',  'controller' => 'organization_subdirections'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Oficinas'), ['action' => 'index',  'controller' => 'organization_offices'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Tipos de oficina'), ['action' => 'index',  'controller' => 'organization_types'],['class' => 'dropdown-item small']) ?>-->
          <div class="dropdown-divider">a</div>
          <?= $this->Html->link(__('Empleados'), ['action' => 'index',  'controller' => 'employees'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Posiciones de empleado'), ['action' => 'index',  'controller' => 'employee_positions'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Estatus de empleado'), ['action' => 'index',  'controller' => 'status_employees'],['class' => 'dropdown-item small']) ?>
          <div class="dropdown-divider">a</div>
          <?= $this->Html->link(__('Usuarios'), ['action' => 'index',  'controller' => 'users'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Roles'), ['action' => 'index',  'controller' => 'rols'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Roles - Permisos'), ['action' => 'index',  'controller' => 'rols_permissions'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Permisos'), ['action' => 'index',  'controller' => 'permissions'],['class' => 'dropdown-item small']) ?>

        </div>
      </li>
      <li class="nav-item dropdown">
       
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mantenimiento
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link(__('Bitacora'), ['action' => 'index',  'controller' => 'TblSysOrganizations'],['class' => 'dropdown-item']) ?>
          <?= $this->Html->link(__('Accesos'), ['action' => 'index',  'controller' => 'TblSysOrganizationLevelTypes'],['class' => 'dropdown-item']) ?>
          <div class="dropdown-divider">a</div>
          <?= $this->Html->link(__('Dispositivos'), ['action' => 'index',  'controller' => 'TblSysEmployees'],['class' => 'dropdown-item']) ?>
          <?= $this->Html->link(__('Tablas'), ['action' => 'index',  'controller' => 'TblSysEmployeePositionTypes'],['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<?=  $this->request->session()->read('Auth.User')['employee_id'];?>-->
          <?php print_r($employee_login->full_name); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?= $this->Html->link(__('Bitacora'), ['action' => 'index',  'controller' => 'TblSysOrganizations'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Accesos'), ['action' => 'index',  'controller' => 'TblSysOrganizationLevelTypes'],['class' => 'dropdown-item small']) ?>
          <div class="dropdown-divider">a</div>
          <?= $this->Html->link(__('Dispositivo movil'), ['action' => 'change_number',  'controller' => 'Movile'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Cambiar contraseña'), ['action' => 'change_password',  'controller' => 'Users'],['class' => 'dropdown-item small']) ?>
          <?= $this->Html->link(__('Cerrar sesión'), ['action' => 'logout',  'controller' => 'Users'],['class' => 'dropdown-item small']) ?>
        </div>
      </li>
    </ul>
  </div>
</nav>