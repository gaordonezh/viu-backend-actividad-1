<?php
require_once "../../controllers/Platforms.controller.php";

$title = "Eliminar plataforma";
$children = "delete.platforms.php";

$platformInstance = new PlatformsController();

if (isset($_POST["id"])) {
  $platformInstance->deletePlatform($_POST["id"]);
  header("location: ../platforms/");
}

$values = $platformInstance->getPlatformById($_GET["id"]);

include("../layout/index.php");
