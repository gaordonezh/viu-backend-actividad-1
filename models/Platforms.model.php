<?php

require_once "../../config/Connection.php";

class PlatformsModel extends Connection
{
  public function create($fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "INSERT INTO platforms(name) VALUES(?)");
    $prepare->bind_param("s", $fields->name);
    $prepare->execute();
  }

  public function getById($platformId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM platforms WHERE id = ?");
    $prepare->bind_param("i", $platformId);
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function get()
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM platforms ORDER BY id DESC");
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function update($platformId, $fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "UPDATE platforms SET name=? WHERE id=?");
    $prepare->bind_param("si", $fields->name, $platformId);
    $prepare->execute();
  }

  public function delete($platformId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "DELETE FROM platforms WHERE id=?");
    $prepare->bind_param("i", $platformId);
    $prepare->execute();
  }

  public function validateTitle($title, $platformId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, $platformId ? "SELECT COUNT(*) AS founded FROM platforms WHERE name = ? AND id != ?" : "SELECT COUNT(*) AS founded FROM platforms WHERE name = ?");
    if ($platformId)
      $prepare->bind_param("si", $title, $platformId);
    else
      $prepare->bind_param("s", $title);
    $prepare->execute();
    $result = $prepare->get_result();
    return $result;
  }
}
