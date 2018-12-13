<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestField $testField
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Test Field'), ['action' => 'edit', $testField->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Test Field'), ['action' => 'delete', $testField->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testField->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Test Fields'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test Field'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testFields view large-9 medium-8 columns content">
    <h3><?= h($testField->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Test Varchar') ?></th>
            <td><?= h($testField->test_varchar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testField->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test Datetime') ?></th>
            <td><?= h($testField->test_datetime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test Date') ?></th>
            <td><?= h($testField->test_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test Bool') ?></th>
            <td><?= $testField->test_bool ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Test Text') ?></h4>
        <?= $this->Text->autoParagraph(h($testField->test_text)); ?>
    </div>
</div>
