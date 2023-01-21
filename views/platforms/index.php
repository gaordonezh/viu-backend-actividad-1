<?php
require_once "../../controllers/Platforms.controller.php";

$title = "Plataformas";
$children = "list.platforms.php";

$platforms = new PlatformsController();
$list = $platforms->getPlatforms();

include("../layout/index.php");
