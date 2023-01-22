<?php
require_once "../../controllers/Platforms.controller.php";

$title = "Editar plataforma";
$children = "edit.platforms.php";

$platformInstance = new PlatformsController();
$values = $platformInstance->getPlatformById($_GET["id"]);

$errors = (object)[
  "name" => "",
  "exist" => false
];

if (isset($_POST["save"])) {
  $errors->name = !empty($_POST["name"]) ? "" : "El nombre es requerido";

  if (!empty($_POST["name"])) {
    $totalFounded = $platformInstance->validateExistName($_POST["name"], $values->id);

    if ($totalFounded === 0) {
      $platformInstance->updatePlatform($values->id, (object)["name" => $_POST["name"]]);
      header("location: ../platforms/");
    } else {
      $errors->exist = true;
    }
  }
}

include("../layout/index.php");
