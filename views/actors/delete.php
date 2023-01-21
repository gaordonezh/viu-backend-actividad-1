<?php
require_once "../../controllers/Actors.controller.php";

$title = "Eliminar actor";
$children = "delete.actors.php";

$actorsInstance = new ActorsController();

if (isset($_POST["id"])) {
  $actorsInstance->deleteActor($_POST["id"]);
  header("location: ../actors/");
}

$values = $actorsInstance->getActorById($_GET["id"]);

include("../layout/index.php");
