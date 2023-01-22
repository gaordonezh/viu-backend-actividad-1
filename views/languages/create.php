<?php
require_once "../../controllers/Languages.controller.php";

$title = "Crear plataforma";
$children = "create.languages.php";

$errors = (object)[
  "name" => "",
  "iso_code" => "",
  "exist" => false
];

if (isset($_POST["save"])) {
  $errors->name = !empty($_POST["name"]) ? "" : "El nombre es requerido";
  $errors->iso_code = !empty($_POST["iso_code"]) ? "" : "El ISO CODE es requerido";

  if (!empty($_POST["name"]) && !empty($_POST["iso_code"])) {
    $languagesInstance = new LanguagesController();
    $totalFounded = $languagesInstance->validateExistRecord($_POST["name"], $_POST["iso_code"], null);

    if ($totalFounded === 0) {
      $languagesInstance->createLanguage((object)[
        "name" => $_POST["name"],
        "iso_code" => $_POST["iso_code"]
      ]);
      header("location: ../languages/");
    } else {
      $errors->exist = true;
    }
  }
}


include("../layout/index.php");
