<?php
require_once "../../controllers/Series.controller.php";
require_once "../../controllers/Platforms.controller.php";
require_once "../../controllers/Directors.controller.php";
require_once "../../controllers/Actors.controller.php";
require_once "../../controllers/Languages.controller.php";

$platforms = new PlatformsController();
$platformList = $platforms->getPlatforms();

$directors = new DirectorsController();
$directorList = $directors->getDirectors();

$actors = new ActorsController();
$actorList = $actors->getActors();

$languages = new LanguagesController();
$languageList = $languages->getLanguages();

$title = "Crear serie";
$children = "create.series.php";

$errors = (object)[
  "actor" => "",
  "audio" => "",
  "subtitle" => "",
  "title" => "",
  "platform" => "",
  "director" => "",
  "exist" => false
];

if (isset($_POST["save"])) {
  $errors->actor = isset($_POST["actor"]) ? "" : "El/los actores son requeridos";
  $errors->audio = isset($_POST["audio"]) ? "" : "El/los idiomas de audio son requeridos";
  $errors->subtitle = isset($_POST["subtitle"]) ? "" : "El/los idiomas de subtitulo son requeridos";
  $errors->title = !empty($_POST["title"]) ? "" : "El título es requerido";
  $errors->platform = !empty($_POST["platform"]) ? "" : "La plataforma es requerida";
  $errors->director = !empty($_POST["director"]) ? "" : "El director es requerido";

  if (!empty($_POST["title"]) && !empty($_POST["platform"]) && !empty($_POST["director"]) && isset($_POST["actor"]) && isset($_POST["audio"]) && isset($_POST["subtitle"])) {
    $serieInstance = new SeriesController();
    $validateTitle = $serieInstance->getSeriesByTitle($_POST["title"], null);

    if ($validateTitle->founded === 0) {
      $serieInstance->createSerie((object)[
        "title" => $_POST["title"],
        "platform" => $_POST["platform"],
        "director" => $_POST["director"],
        "actor" => $_POST["actor"],
        "audio" => $_POST["audio"],
        "subtitle" => $_POST["subtitle"]
      ]);
      header("location: ../series/");
    } else {
      $errors->exist = true;
    }
  }
}

include("../layout/index.php");
