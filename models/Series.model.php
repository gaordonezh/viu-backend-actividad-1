<?php

require_once "../../config/Connection.php";

class SeriesModel extends Connection
{
  public function get()
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT
                                              s.id,
                                              s.title,
                                              p.name AS platform,
                                              CONCAT(d.name,' ',d.last_name) AS director,
                                              (SELECT GROUP_CONCAT(CONCAT(a.name,' ',a.last_name) SEPARATOR '|') FROM serie_actor sa LEFT JOIN actors a ON sa.actor_id = a.id WHERE s.id = sa.serie_id) AS actors,
                                              (SELECT GROUP_CONCAT(l.name SEPARATOR '|') FROM serie_language sl LEFT JOIN languages l ON sl.language_id = l.id WHERE s.id = sl.serie_id AND type = 0) AS subtitles,
                                              (SELECT GROUP_CONCAT(l.name SEPARATOR '|') FROM serie_language sl LEFT JOIN languages l ON sl.language_id = l.id WHERE s.id = sl.serie_id AND type = 1) AS audios
                                          FROM series s
                                              LEFT JOIN platforms p ON s.platform_id = p.id
                                              LEFT JOIN directors d ON s.director_id = d.id
                                          ORDER BY s.id DESC");
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function create($fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "INSERT INTO series(title, platform_id, director_id) VALUES(?, ?, ?)");
    $prepare->bind_param("sii", $fields->title, $fields->platform, $fields->director);
    $prepare->execute();
    return $prepare->insert_id;
  }

  public function update($serieId, $fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "UPDATE series SET title=?, platform_id=?, director_id=? WHERE id=?");
    $prepare->bind_param("siii", $fields->title, $fields->platform, $fields->director, $serieId);
    $prepare->execute();
  }

  public function createSerieActor($actor, $serie)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "INSERT INTO serie_actor(actor_id, serie_id) VALUES(?, ?)");
    $prepare->bind_param("ii", $actor, $serie);
    $prepare->execute();
  }

  public function createSerieLanguage($type, $serie, $language)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "INSERT INTO serie_language(type, serie_id, language_id) VALUES(?, ?, ?)");
    $prepare->bind_param("iii", $type, $serie, $language);
    $prepare->execute();
  }

  public function getById($serieId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM series WHERE id = ?");
    $prepare->bind_param("i", $serieId);
    $prepare->execute();
    $result = $prepare->get_result();
    return $result;
  }

  public function delete($serieId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "DELETE FROM series WHERE id=?");
    $prepare->bind_param("i", $serieId);
    $prepare->execute();
  }

  public function languagesBySerie($serieId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM serie_language WHERE serie_id=?");
    $prepare->bind_param("i", $serieId);
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function actorsBySerie($serieId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM serie_actor WHERE serie_id=?");
    $prepare->bind_param("i", $serieId);
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function deleteActorsBySerie($serieId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "DELETE FROM serie_actor WHERE serie_id=?");
    $prepare->bind_param("i", $serieId);
    $prepare->execute();
  }

  public function deleteLanguagesBySerie($serieId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "DELETE FROM serie_language WHERE serie_id=?");
    $prepare->bind_param("i", $serieId);
    $prepare->execute();
  }

  public function validateTitle($title, $serieId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, $serieId ? "SELECT COUNT(*) AS founded FROM series WHERE title=? AND id != ?" : "SELECT COUNT(*) AS founded FROM series WHERE title=?");
    if ($serieId)
      $prepare->bind_param("si", $title, $serieId);
    else
      $prepare->bind_param("s", $title);
    $prepare->execute();
    $result = $prepare->get_result();
    return $result;
  }
}
