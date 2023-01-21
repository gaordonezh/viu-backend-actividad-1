<?php
require_once "../../controllers/Directors.controller.php";

$title = "Eliminar director";
$children = "delete.directors.php";

$directorsInstance = new DirectorsController();

if (isset($_POST["id"])) {
  $directorsInstance->deleteDirector($_POST["id"]);
  header("location: ../directors/");
}

$values = $directorsInstance->getDirectorById($_GET["id"]);

include("../layout/index.php");
