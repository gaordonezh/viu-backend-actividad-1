<?php

require_once "../../config/Connection.php";

class ActorsModel extends Connection
{
  public function create($fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "INSERT INTO actors(name,last_name,date_birth,nationality) VALUES(?,?,?,?)");
    $prepare->bind_param("ssss", $fields->name, $fields->last_name, $fields->date_birth, $fields->nationality);
    $prepare->execute();
  }

  public function getById($actorId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM actors WHERE id = ?");
    $prepare->bind_param("i", $actorId);
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function get()
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM actors ORDER BY id DESC");
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function update($actorId, $fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "UPDATE actors SET name=?,last_name=?,date_birth=?,nationality=? WHERE id=?");
    $prepare->bind_param("ssssi", $fields->name, $fields->last_name, $fields->date_birth, $fields->nationality, $actorId);
    $prepare->execute();
  }

  public function delete($actorId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "DELETE FROM actors WHERE id=?");
    $prepare->bind_param("i", $actorId);
    $prepare->execute();
  }

  public function validateRecord($name, $lastName, $directorId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, $directorId ? "SELECT COUNT(*) AS founded FROM actors WHERE name = ? AND last_name = ? AND id != ?" : "SELECT COUNT(*) AS founded FROM actors WHERE name = ? AND last_name = ?");
    if ($directorId)
      $prepare->bind_param("ssi", $name, $lastName, $directorId);
    else
      $prepare->bind_param("ss", $name, $lastName);
    $prepare->execute();
    $result = $prepare->get_result();
    return $result;
  }
}
