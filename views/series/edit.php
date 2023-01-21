<?php
require_once "../../controllers/Series.controller.php";
require_once "../../controllers/Actors.controller.php";
require_once "../../controllers/Platforms.controller.php";
require_once "../../controllers/Directors.controller.php";
require_once "../../controllers/Languages.controller.php";

$seriesInstance = new SeriesController();
$serieObtained = $seriesInstance->getSerieById($_GET["id"]);
$languagesObtained = $seriesInstance->getLanguagesBySerie($_GET["id"]);
$actorObtained = $seriesInstance->getActorsBySerie($_GET["id"]);

$platforms = new PlatformsController();
$platformList = $platforms->getPlatforms();

$directors = new DirectorsController();
$directorList = $directors->getDirectors();

$actors = new ActorsController();
$actorList = $actors->getActors();

$languages = new LanguagesController();
$languageList = $languages->getLanguages();

$title = "Editar serie";
$children = "edit.series.php";

$errors = (object)[
  "actor" => "",
  "audio" => "",
  "subtitle" => "",
  "title" => "",
  "platform" => "",
  "director" => "",
];

if (isset($_POST["save"])) {
  $errors->actor = isset($_POST["actor"]) ? "" : "El/los actores son requeridos";
  $errors->audio = isset($_POST["audio"]) ? "" : "El/los idiomas de audio son requeridos";
  $errors->subtitle = isset($_POST["subtitle"]) ? "" : "El/los idiomas de subtitulo son requeridos";
  $errors->title = !empty($_POST["title"]) ? "" : "El título es requerido";
  $errors->platform = !empty($_POST["platform"]) ? "" : "La plataforma es requerida";
  $errors->director = !empty($_POST["director"]) ? "" : "El director es requerido";

  if (isset($_POST["title"]) && isset($_POST["platform"]) && isset($_POST["director"]) && isset($_POST["actor"]) && isset($_POST["audio"]) && isset($_POST["subtitle"])) {
    $seriesInstance->updateSerie($serieObtained->id, (object)[
      "title" => $_POST["title"],
      "platform" => $_POST["platform"],
      "director" => $_POST["director"],
      "actor" => $_POST["actor"],
      "audio" => $_POST["audio"],
      "subtitle" => $_POST["subtitle"]
    ]);
    header("location: ../series/");
  }
}

include("../layout/index.php");
