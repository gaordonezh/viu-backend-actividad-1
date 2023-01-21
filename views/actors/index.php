<?php
require_once "../../controllers/Actors.controller.php";

$title = "Actores";
$children = "list.actors.php";

$actors = new ActorsController();
$list = $actors->getActors();

include("../layout/index.php");
