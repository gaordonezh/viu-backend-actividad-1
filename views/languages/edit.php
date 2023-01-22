<?php
require_once "../../controllers/Languages.controller.php";

$title = "Editar idioma";
$children = "edit.languages.php";

$languageInstance = new LanguagesController();

$errors = (object)[
  "name" => "",
  "iso_code" => "",
  "exist" => false
];

$values = $languageInstance->getLanguageById($_GET["id"]);

if (isset($_POST["save"])) {
  $errors->name = !empty($_POST["name"]) ? "" : "El nombre es requerido";
  $errors->iso_code = !empty($_POST["iso_code"]) ? "" : "El ISO CODE es requerido";

  if (!empty($_POST["name"]) && !empty($_POST["iso_code"])) {
    $totalFounded = $languageInstance->validateExistRecord($_POST["name"], $_POST["iso_code"], $values->id);

    if ($totalFounded === 0) {
      $languageInstance->updateLanguage($_POST["id"], (object)[
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
