<?php

require_once "../../models/Series.model.php";

class SeriesController extends SeriesModel
{
  /**
   * CREATE SERIE
   * @param $fields
   */
  public function createSerie($fields)
  {
    $serie_id = $this->create($fields);
    foreach ($fields->actor as $actor_id)
      $this->createSerieActor($actor_id, $serie_id);
    foreach ($fields->audio as $audio_id)
      $this->createSerieLanguage(1, $serie_id, $audio_id);
    foreach ($fields->subtitle as $subtitle_id)
      $this->createSerieLanguage(0, $serie_id, $subtitle_id);
  }

  /**
   * GET ALL SERIES
   */
  public function getSeries()
  {
    $result = $this->get();

    $series = [];
    while ($serie = $result->fetch_object(SeriesModel::class)) {
      if (isset($serie->actors))
        $serie->actors = explode("|", $serie->actors);
      if (isset($serie->subtitles))
        $serie->subtitles = explode("|", $serie->subtitles);
      if (isset($serie->audios))
        $serie->audios = explode("|", $serie->audios);

      array_push($series, $serie);
    }

    return $series;
  }

  /**
   * UPDATE SERIE
   * @param $serieId
   * @param $fields
   */
  public function updateSerie($serieId, $fields)
  {
    $this->update($serieId, $fields);
    $this->deleteActorsBySerie($serieId);
    $this->deleteLanguagesBySerie($serieId);

    foreach ($fields->actor as $actor_id)
      $this->createSerieActor($actor_id, $serieId);
    foreach ($fields->audio as $audio_id)
      $this->createSerieLanguage(1, $serieId, $audio_id);
    foreach ($fields->subtitle as $subtitle_id)
      $this->createSerieLanguage(0, $serieId, $subtitle_id);
  }

  /**
   * DELETE SERIE
   * @param $serieId
   */
  public function deleteSerie($serieId)
  {
    $this->delete($serieId);
  }

  /**
   * GET SERIE BY ID
   * @param $serieId as number
   */
  public function getSerieById($serieId)
  {
    $result = $this->getById($serieId);
    return $result->fetch_object(SeriesModel::class);
  }

  /**
   * GET LANGUAGES BY SERIE_ID
   * @param $serieId as number
   */
  public function getLanguagesBySerie($serieId)
  {
    $result = $this->languagesBySerie($serieId);

    $filtered = (object)["audios" => [], "subtitles" => []];

    while ($language = $result->fetch_object(SeriesModel::class)) {
      if ($language->type == 1)
        array_push($filtered->audios, $language->language_id);

      if ($language->type == 0)
        array_push($filtered->subtitles, $language->language_id);
    }

    return $filtered;
  }

  /**
   * GET ACTORS BY SERIE_ID
   * @param $serieId as number
   */
  public function getActorsBySerie($serieId)
  {
    $result = $this->actorsBySerie($serieId);

    $filtered = [];
    while ($actor = $result->fetch_object(SeriesModel::class)) {
      array_push($filtered, $actor->actor_id);
    }

    return $filtered;
  }
}
