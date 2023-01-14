<?php

require_once "../../config/Connection.php";

class PlatformModel extends Connection
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

    return $result->fetch_object(PlatformModel::class);
  }

  public function get()
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM platforms ORDER BY id DESC");
    $prepare->execute();
    $result = $prepare->get_result();

    $platforms = [];
    while ($platform = $result->fetch_object(PlatformModel::class))
      array_push($platforms, $platform);

    return $platforms;
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
}
