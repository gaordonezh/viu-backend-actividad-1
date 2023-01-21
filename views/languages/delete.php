<?php
require_once "../../controllers/Languages.controller.php";

$title = "Eliminar idioma";
$children = "delete.languages.php";

$languageInstance = new LanguagesController();

if (isset($_POST["id"])) {
  $languageInstance->deleteLanguage($_POST["id"]);
  header("location: ../languages/");
}

$values = $languageInstance->getLanguageById($_GET["id"]);

include("../layout/index.php");
