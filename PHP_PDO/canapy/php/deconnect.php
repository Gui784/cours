<?php

require_once("db.php");
require_once('class/User.php');

$deconnect = new User($db);
$deconnect->deconnect();

?>