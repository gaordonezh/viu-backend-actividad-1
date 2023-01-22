<?php
require_once "../../controllers/Directors.controller.php";

$title = "Editar director";
$children = "edit.directors.php";

$errors = (object)[
  "name" => "",
  "last_name" => "",
  "date_birth" => "",
  "nationality" => "",
  "exist" => false
];

$directorsInstance = new DirectorsController();
$values = $directorsInstance->getDirectorById($_GET["id"]);

if (isset($_POST["save"])) {
  $errors->name = !empty($_POST["name"]) ? "" : "El nombre es requerido";
  $errors->last_name = !empty($_POST["last_name"]) ? "" : "El apellido es requerido";
  $errors->date_birth = !empty($_POST["date_birth"]) ? "" : "La fecha de nacimiento es requerido";
  $errors->nationality = !empty($_POST["nationality"]) ? "" : "La nacionalidad es requerida";

  if (!empty($_POST["name"]) && !empty($_POST["last_name"]) && !empty($_POST["date_birth"]) && !empty($_POST["nationality"])) {
    $totalFounded = $directorsInstance->validateDirectorNames($_POST["name"], $_POST["last_name"], $values->id);

    if ($totalFounded === 0) {
      $directorsInstance->updateDirector($values->id, (object)[
        "name" => $_POST["name"],
        "last_name" => $_POST["last_name"],
        "date_birth" => $_POST["date_birth"],
        "nationality" => $_POST["nationality"]
      ]);
      header("location: ../directors/");
    } else {
      $errors->exist = true;
    }
  }
}

include("../layout/index.php");
