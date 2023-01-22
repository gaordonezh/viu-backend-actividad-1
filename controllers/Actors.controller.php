<?php

require_once "../../models/Actors.model.php";

class ActorsController extends ActorsModel{

  /**
   * GET ALL ACTORS
   */
  public function getActors()
  {
    $result = $this->get();

    $actors = [];
    while ($actor = $result->fetch_object(ActorsModel::class))
      array_push($actors, $actor);

    return $actors;
  }

  /**
   * CREATE ACTOR
   * @param $fields
   */
  public function createActor($fields)
  {
    $this->create($fields);
  }

  /**
   * UPDATE ACTOR
   * @param $actorId
   * @param $fields
   */
  public function updateActor($actorId, $fields)
  {
    $this->update($actorId, $fields);
  }

  /**
   * DELETE ACTOR
   * @param $actorId
   */
  public function deleteActor($actorId)
  {
    $this->delete($actorId);
  }

  /**
   * GET ACTOR BY ID
   * @param $actorId as number
   */
  public function getActorById($actorId)
  {
    $result = $this->getById($actorId);
    return $result->fetch_object(ActorsModel::class);
  }

  /**
   * GET DIRECTOR BY NAMES
   * @param $autorId as number, $name as string, $lastName as string
   */
  public function validateAutorNames($name, $lastName, $autorId)
  {
    $result = $this->validateRecord($name, $lastName, $autorId);
    $parse = $result->fetch_object(ActorsModel::class);
    return $parse->founded;
  }
}
