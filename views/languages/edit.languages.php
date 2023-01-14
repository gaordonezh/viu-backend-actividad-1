<?php
require_once "../../controllers/Languages.controller.php";
$languageInstance = new LanguagesController();

if (isset($_POST["id"])) {
  $languageInstance->updateLanguage($_POST["id"], (object)[
    "name" => $_POST["name"],
    "iso_code" => $_POST["iso_code"]
  ]);
  header("location: ../languages/");
}

$values = $languageInstance->getLanguageById($_GET["id"]);
?>

<section>
  <h1>Editar idioma</h1>
  <form method="post" action="edit.languages.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" required aria-required="El nombre es requerido" class="form-control" name="name" id="name" placeholder="Ingrese..." value="<?= $values->name ?>">
      <input type="text" hidden required name="id" value="<?= $values->id ?>">
    </div>
    <div class="mb-3">
      <label for="iso_code" class="form-label">ISO CODE</label>
      <input type="text" required aria-required="El código ISO es requerido" class="form-control" name="iso_code" id="iso_code" placeholder="Ingrese..." value="<?= $values->iso_code ?>" maxlength="4" max="4">
    </div>
    <a href="../languages/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info">Actualizar</button>
  </form>
</section>