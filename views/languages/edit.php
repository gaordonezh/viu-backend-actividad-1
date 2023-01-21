<?php
require_once "../../controllers/Languages.controller.php";

$title = "Editar idioma";
$children = "edit.languages.php";

$languageInstance = new LanguagesController();

if (isset($_POST["id"])) {
  $languageInstance->updateLanguage($_POST["id"], (object)[
    "name" => $_POST["name"],
    "iso_code" => $_POST["iso_code"]
  ]);
  header("location: ../languages/");
}

$values = $languageInstance->getLanguageById($_GET["id"]);

include("../layout/index.php");
