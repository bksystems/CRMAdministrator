<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestField $testField
 */
?>
<div class="row">
    <div class="col-sm-2" id="actions-sidebar">
        <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active"><?= __('Acciones') ?></a>
                                    <li><?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $testField->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $testField->id)]
                        )
                    ?></li>
                                    <?= $this->Html->link(__('List Test Fields'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                        </div>
    </div>
    <div class="col-sm-10">
        <div class="testFields form large-9 medium-8 columns content">
            <?= $this->Form->create($testField) ?>
            <fieldset>
                <legend><?= __('Edit Test Field') ?></legend>
                <?php
                                            echo $this->Form->control('test_varchar', ['class' => 'form-control form-control-sm']);
                        echo $this->Form->control('test_text', ['class' => 'form-control form-control-sm']);
                        echo $this->Form->control('test_datetime', ['class' => 'form-control form-control-sm']);
                        echo $this->Form->control('test_bool', ['class' => 'form-control form-control-sm']);
                        echo $this->Form->control('test_date', ['class' => 'form-control form-control-sm']);
                ?>
             </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
