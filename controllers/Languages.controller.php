<?php

require_once "../../models/Languages.model.php";

class LanguagesController extends LanguagesModel
{
  /**
   * CREATE LANGUAGE
   * @param $fields
   */
  public function createLanguage($fields)
  {
    $this->create($fields);
  }

  /**
   * GET ALL LANGUAGES
   */
  public function getLanguages()
  {
    $result = $this->get();

    $languages = [];
    while ($language = $result->fetch_object(LanguagesModel::class))
      array_push($languages, $language);

    return $languages;
  }

  /**
   * UPDATE LANGUAGE
   * @param $languageId
   * @param $fields
   */
  public function updateLanguage($languageId, $fields)
  {
    $this->update($languageId, $fields);
  }

  /**
   * DELETE LANGUAGE
   * @param $languageId
   */
  public function deleteLanguage($languageId)
  {
    $this->delete($languageId);
  }

  /**
   * GET LANGUAGE BY ID
   * @param $languageId as number
   */
  public function getLanguageById($languageId)
  {
    $result = $this->getById($languageId);
    return $result->fetch_object(LanguagesModel::class);
  }

  /**
   * GET LANGUAGE BY ID
   * @param $languageId as number
   */
  public function validateExistRecord($name, $isoCode, $languageId)
  {
    $result = $this->validateRecord($name, $isoCode, $languageId);
    $parse = $result->fetch_object(LanguagesModel::class);
    return $parse->founded;
  }
}
