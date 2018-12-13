<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Génesis
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css(['bootstrap.min.css', 'dataTables.bootstrap4.min.css']) ?>
    <?= $this->Html->script(['jquery-3.3.1.min.js', 'jquery.validate.js', 'additional-methods.js', 'bootstrap.min.js', 'jquery.dataTables.min.js', 'dataTables.bootstrap4.min.js']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->element('menu_element'); ?>
    <div class="container-fluid" style="padding-top:68px;">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <?= $this->element('footer_element'); ?>
</body>
</html>
