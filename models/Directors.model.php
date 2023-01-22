<?php

require_once "../../config/Connection.php";

class DirectorsModel extends Connection
{
  public function create($fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "INSERT INTO directors(name,last_name,date_birth,nationality) VALUES(?,?,?,?)");
    $prepare->bind_param("ssss", $fields->name, $fields->last_name, $fields->date_birth, $fields->nationality);
    $prepare->execute();
  }

  public function getById($directorId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM directors WHERE id = ?");
    $prepare->bind_param("i", $directorId);
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function get()
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM directors ORDER BY id DESC");
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function update($directorId, $fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "UPDATE directors SET name=?,last_name=?,date_birth=?,nationality=? WHERE id=?");
    $prepare->bind_param("ssssi", $fields->name, $fields->last_name, $fields->date_birth, $fields->nationality, $directorId);
    $prepare->execute();
  }

  public function delete($directorId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "DELETE FROM directors WHERE id=?");
    $prepare->bind_param("i", $directorId);
    $prepare->execute();
  }

  public function validateRecord($name, $lastName, $directorId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, $directorId ? "SELECT COUNT(*) AS founded FROM directors WHERE name = ? AND last_name = ? AND id != ?" : "SELECT COUNT(*) AS founded FROM directors WHERE name = ? AND last_name = ?");
    if ($directorId)
      $prepare->bind_param("ssi", $name, $lastName, $directorId);
    else
      $prepare->bind_param("ss", $name, $lastName);
    $prepare->execute();
    $result = $prepare->get_result();
    return $result;
  }
}
