<?php
require_once "../../controllers/Directors.controller.php";

$title = "Editar director";
$children = "edit.directors.php";

$directorsInstance = new DirectorsController();

if (isset($_POST["id"])) {
  $directorsInstance->updateDirector($_POST["id"], (object)[
    "name" => $_POST["name"],
    "last_name" => $_POST["last_name"],
    "date_birth" => $_POST["date_birth"],
    "nationality" => $_POST["nationality"]
  ]);
  header("location: ../directors/");
}

$values = $directorsInstance->getDirectorById($_GET["id"]);

include("../layout/index.php");
