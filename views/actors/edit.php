<?php
require_once "../../controllers/Actors.controller.php";

$title = "Editar actor";
$children = "edit.actors.php";

$actorsInstance = new ActorsController();

if (isset($_POST["id"])) {
  $actorsInstance->updateActor($_POST["id"], (object)[
    "name" => $_POST["name"],
    "last_name" => $_POST["last_name"],
    "date_birth" => $_POST["date_birth"],
    "nationality" => $_POST["nationality"]
  ]);
  header("location: ../actors/");
}

$values = $actorsInstance->getActorById($_GET["id"]);

include("../layout/index.php");
