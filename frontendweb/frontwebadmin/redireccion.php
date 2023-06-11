<?php
session_start();
require_once "controllers/controlleradmin.php";
require_once "servicios/modeloadmin.php";

$mvc = new MvcController();

$mvc -> plantillaAdmin(); 

?>