<?php
require_once "../../controllers/Directors.controller.php";

$title = "Crear director";
$children = "create.directors.php";

$directorsInstance = new DirectorsController();

if (isset($_POST["name"]) && isset($_POST["last_name"]) && isset($_POST["date_birth"]) && isset($_POST["nationality"])) {
  $fields = (object)[
    "name" => $_POST["name"],
    "last_name" => $_POST["last_name"],
    "date_birth" => $_POST["date_birth"],
    "nationality" => $_POST["nationality"]
  ];

  $directorsInstance->createDirector($fields);
  header("location: ../directors/");
}

include("../layout/index.php");
