<?php
require_once "../../controllers/Languages.controller.php";

$title = "Crear plataforma";
$children = "create.languages.php";

$languesInstance = new LanguagesController();

if (isset($_POST["name"]) && isset($_POST["iso_code"])) {
  $fields = (object)[
    "name" => $_POST["name"],
    "iso_code" => $_POST["iso_code"]
  ];

  $languesInstance->createLanguage($fields);
  header("location: ../languages/");
}

include("../layout/index.php");
