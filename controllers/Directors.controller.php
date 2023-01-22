<?php

require_once "../../models/Directors.model.php";

class DirectorsController extends DirectorsModel
{

  /**
   * GET ALL DIRECTORS
   */
  public function getDirectors()
  {
    $result = $this->get();

    $directors = [];
    while ($director = $result->fetch_object(DirectorsModel::class))
      array_push($directors, $director);

    return $directors;
  }

  /**
   * CREATE DIRECTOR
   * @param $fields
   */
  public function createDirector($fields)
  {
    $this->create($fields);
  }

  /**
   * UPDATE DIRECTOR
   * @param $directorId
   * @param $fields
   */
  public function updateDirector($directorId, $fields)
  {
    $this->update($directorId, $fields);
  }

  /**
   * DELETE DIRECTOR
   * @param $directorId
   */
  public function deleteDirector($directorId)
  {
    $this->delete($directorId);
  }

  /**
   * GET DIRECTOR BY ID
   * @param $directorId as number
   */
  public function getDirectorById($directorId)
  {
    $result = $this->getById($directorId);
    return $result->fetch_object(DirectorsModel::class);
  }

  /**
   * GET DIRECTOR BY NAMES
   * @param $directorId as number, $name as string, $lastName as string
   */
  public function validateDirectorNames($name, $lastName, $directorId)
  {
    $result = $this->validateRecord($name, $lastName, $directorId);
    $parse = $result->fetch_object(DirectorsModel::class);
    return $parse->founded;
  }
}
