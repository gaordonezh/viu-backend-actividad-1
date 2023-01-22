<?php
require_once "../../controllers/Platforms.controller.php";

$title = "Crear plataforma";
$children = "create.platforms.php";

$errors = (object)[
  "name" => "",
  "exist" => false
];

if (isset($_POST["save"])) {
  $errors->name = !empty($_POST["name"]) ? "" : "El nombre es requerido";

  if (!empty($_POST["name"])) {
    $platformInstance = new PlatformsController();
    $totalFounded = $platformInstance->validateExistName($_POST["name"], null);
    if ($totalFounded === 0) {
      $platformInstance->createPlatform((object)["name" => $_POST["name"]]);
      header("location: ../platforms/");
    } else {
      $errors->exist = true;
    }
  }
}

include("../layout/index.php");
