<?php
require_once "../../controllers/Actors.controller.php";

$title = "Crear actor";
$children = "create.actors.php";

$actorsInstance = new ActorsController();

if (isset($_POST["name"]) && isset($_POST["last_name"]) && isset($_POST["date_birth"]) && isset($_POST["nationality"])) {
  $fields = (object)[
    "name" => $_POST["name"],
    "last_name" => $_POST["last_name"],
    "date_birth" => $_POST["date_birth"],
    "nationality" => $_POST["nationality"]
  ];

  $actorsInstance->createActor($fields);
  header("location: ../actors/");
}

include("../layout/index.php");
