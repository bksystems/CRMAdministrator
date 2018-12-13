<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusUser $statusUser
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statusUser->id)]
            )
            ?></li>
                        <?= $this->Html->link(__('List Status Users'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
                        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
                    </div>
    </div>
    <div class="col-sm-10">
        <div class="statusUsers form large-9 medium-8 columns content">
            <?= $this->Form->create($statusUser) ?>
            <fieldset>
                <legend><?= __('Edit Status User') ?></legend>
                <?php
                                        echo $this->Form->control('status', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('description', ['class' => 'form-control form-control-sm']);
                    echo $this->Form->control('enabled', ['class' => 'form-control form-control-sm']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
