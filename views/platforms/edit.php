<?php
require_once "../../controllers/Platforms.controller.php";

$title = "Editar plataforma";
$children = "edit.platforms.php";

$platformInstance = new PlatformsController();
if (isset($_POST["id"])) {
  $platformInstance->updatePlatform($_POST["id"], (object)["name" => $_POST["name"]]);
  header("location: ../platforms/");
}

$values = $platformInstance->getPlatformById($_GET["id"]);

include("../layout/index.php");
