<?php
require_once "../../controllers/Series.controller.php";

$title = "Librería de peliculas";
$children = "main.php";

$series = new SeriesController();
$serieList = $series->getSeries();

include("../layout/index.php");
