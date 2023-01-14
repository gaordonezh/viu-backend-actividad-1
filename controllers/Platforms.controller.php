<?php

require_once "../../models/Platform.model.php";

class PlatformController extends PlatformModel
{
  /**
   * CREATE PLATFORM
   * @param $fields
   */
  public function createPlatform($fields)
  {
    $this->create($fields);
  }

  /**
   * GET ALL PLATFORMS
   */
  public function getPlatforms()
  {
    $result = $this->get();

    $platforms = [];
    while ($platform = $result->fetch_object(PlatformModel::class))
      array_push($platforms, $platform);

    return $platforms;
  }

  /**
   * UPDATE PLATFORM
   * @param $platformId
   * @param $fields
   */
  public function updatePlatform($platformId, $fields)
  {
    $this->update($platformId, $fields);
  }

  /**
   * DELETE PLATFORM
   * @param $platformId
   */
  public function deletePlatform($platformId)
  {
    $this->delete($platformId);
  }

  /**
   * GET PLATFORM BY ID
   * @param $platformId as number
   */
  public function getPlatformById($platformId)
  {
    $result = $this->getById($platformId);
    return $result->fetch_object(PlatformModel::class);
  }
}
