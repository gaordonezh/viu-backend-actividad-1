<?php
require_once "../../controllers/Actors.controller.php";

$title = "Editar actor";
$children = "edit.actors.php";

$errors = (object)[
  "name" => "",
  "last_name" => "",
  "date_birth" => "",
  "nationality" => "",
  "exist" => false
];

$actorsInstance = new ActorsController();
$values = $actorsInstance->getActorById($_GET["id"]);

if (isset($_POST["save"])) {
  $errors->name = !empty($_POST["name"]) ? "" : "El nombre es requerido";
  $errors->last_name = !empty($_POST["last_name"]) ? "" : "El apellido es requerido";
  $errors->date_birth = !empty($_POST["date_birth"]) ? "" : "La fecha de nacimiento es requerido";
  $errors->nationality = !empty($_POST["nationality"]) ? "" : "La nacionalidad es requerida";

  if (!empty($_POST["name"]) && !empty($_POST["last_name"]) && !empty($_POST["date_birth"]) && !empty($_POST["nationality"])) {
    $totalFounded = $actorsInstance->validateAutorNames($_POST["name"], $_POST["last_name"], $values->id);

    if ($totalFounded === 0) {
      $actorsInstance->updateActor($values->id, (object)[
        "name" => $_POST["name"],
        "last_name" => $_POST["last_name"],
        "date_birth" => $_POST["date_birth"],
        "nationality" => $_POST["nationality"]
      ]);
      header("location: ../actors/");
    } else {
      $errors->exist = true;
    }
  }
}

include("../layout/index.php");
