<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="users form large-9 medium-8 columns content">
            <?= $this->Form->create($user, ['id' => 'users']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('employee_id', ['options' => $employees, ['class' => 'form-control form-control-sm']]);
                    echo $this->Form->control('username', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('password', ['id' => 'password', 'name' => 'password'], ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('password_confirm',['id' => 'password_confirm', 'name' => 'password_confirm', 'type' => 'password'], ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('rol_id', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('status_user_id', ['class' => 'form-control form-control-sm']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('users').validate({
            rules:{
                password: 'required',
                password_confirm:{
                    equalTo: '#password'
                }
            },
            messages:{
                password: 'Por favor ingresa la contraseña',
                password_confirm: 'La contraseña no coincide'
            }
        });
    });
</script>