<?php
require_once "../../controllers/Directors.controller.php";

$title = "Directores";
$children = "list.directors.php";

$directors = new DirectorsController();
$list = $directors->getDirectors();

include("../layout/index.php");
