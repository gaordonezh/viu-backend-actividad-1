<?php
require_once "../../controllers/Series.controller.php";

$title = "Series";
$children = "list.series.php";

$series = new SeriesController();
$list = $series->getSeries();

include("../layout/index.php");
