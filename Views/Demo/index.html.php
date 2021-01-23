<?php
$view->extend("MauticCoreBundle:Default:content.html.php");
$view['slots']->set('headerTitle', $heading);
echo $body;
?>
