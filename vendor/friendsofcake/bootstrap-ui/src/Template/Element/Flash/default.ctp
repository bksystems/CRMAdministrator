<?php
$class = array_unique((array)$params['class']);
$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);

if (in_array('alert-dismissible', $class)) {
    $button = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $message = $button . $message;
}

echo $this->Html->div($class, $message, $params['attributes']);
?>
