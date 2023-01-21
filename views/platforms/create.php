<?php
require_once "../../controllers/Platforms.controller.php";

$title = "Crear plataforma";
$children = "create.platforms.php";

$platformInstance = new PlatformsController();
if (isset($_POST["name"])) {
  $platformInstance->createPlatform((object)["name" => $_POST["name"]]);
  header("location: ../platforms/");
}

include("../layout/index.php");
