<?php
require_once "../../controllers/Actors.controller.php";
$actorsInstance = new ActorsController();

if (isset($_POST["id"])) {
  $actorsInstance->deleteActor($_POST["id"]);
  header("location: ../actors/");
}

$values = $actorsInstance->getActorById($_GET["id"]);
?>

<section>
  <h2>Eliminar Actor</h2>
  <form method="post" action="delete.actors.php">
    <input type="text" hidden required name="id" value="<?= $values->id ?>">
    <div class="mb-3">
      <h4><?= $values->name ?> <?= $values->last_name ?> </h4>
      <p>Al presionar el botón "Confirmar", se procederá a eliminar este actor</p>
      <a href="../actors/" class="btn btn-outline-danger">Cancelar</a>
      <button type="submit" class="btn btn-outline-info">Confirmar</button>
    </div>
  </form>
</section>
