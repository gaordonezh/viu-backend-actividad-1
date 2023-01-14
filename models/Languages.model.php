<?php

require_once "../../config/Connection.php";

class LanguagesModel extends Connection
{
  public function create($fields)
  {
    var_dump($fields->name, $fields->iso_code);
    $this->connect();
    $prepare = mysqli_prepare($this->con, "INSERT INTO languages(name, iso_code) VALUES(?,?)");
    $prepare->bind_param("ss", $fields->name, $fields->iso_code);
    $prepare->execute();
  }

  public function getById($languageId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM languages WHERE id = ?");
    $prepare->bind_param("i", $languageId);
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function get()
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "SELECT * FROM languages ORDER BY id DESC");
    $prepare->execute();
    $result = $prepare->get_result();

    return $result;
  }

  public function update($languageId, $fields)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "UPDATE languages SET name=?, iso_code=? WHERE id=?");
    $prepare->bind_param("ssi", $fields->name, $fields->iso_code, $languageId);
    $prepare->execute();
  }

  public function delete($languageId)
  {
    $this->connect();
    $prepare = mysqli_prepare($this->con, "DELETE FROM languages WHERE id=?");
    $prepare->bind_param("i", $languageId);
    $prepare->execute();
  }
}
