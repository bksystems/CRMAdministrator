<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="users form large-9 medium-8 columns content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Login') ?></legend>
                <?php
                    echo $this->Form->control('username', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('password', ['class' => 'form-control form-control-sm']);
                ?>
                </fieldset>
            <?= $this->Form->button(__('Ingresar'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
