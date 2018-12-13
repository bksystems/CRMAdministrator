<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login Génesis
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css(['bootstrap.min.css']) ?>
    <?= $this->Html->script(['jquery-3.3.1.min.js', 'jquery.validate.js', 'additional-methods.js', 'bootstrap.min.js']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <div class="container-fluid">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>  
    </div>

</body>
</html>
