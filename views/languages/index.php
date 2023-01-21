<?php
require_once "../../controllers/Languages.controller.php";

$title = "Idiomas";
$children = "list.languages.php";

$languages = new LanguagesController();
$list = $languages->getLanguages();

include("../layout/index.php");
