<?php
require_once "../../controllers/Series.controller.php";
$serieInstance = new SeriesController();
$values = $serieInstance->getSerieById($_GET["id"]);

$title = "Eliminar serie";
$children = "delete.series.php";

if (isset($_POST["id"])) {
  $serieInstance->deleteSerie($_POST["id"]);
  header("location: ../series/");
}

include("../layout/index.php");
