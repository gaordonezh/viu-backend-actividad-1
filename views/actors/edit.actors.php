<?php
require_once "../../controllers/Actors.controller.php";
$actorsInstance = new ActorsController();

if (isset($_POST["id"])) {
  $actorsInstance->updateActor($_POST["id"], (object)[
    "name" => $_POST["name"],
    "last_name" => $_POST["last_name"],
    "date_birth" => $_POST["date_birth"],
    "nationality" => $_POST["nationality"]
  ]);
  header("location: ../actors/");
}

$values = $actorsInstance->getActorById($_GET["id"]);
?>

<section>
  <h1>Editar Actor</h1>
  <form method="post" action="edit.actors.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" required aria-required="El nombre es requerido" class="form-control" name="name" id="name" placeholder="Ingrese..." value="<?= $values->name ?>">
      <input type="text" hidden required name="id" value="<?= $values->id ?>">
    </div>
    <div class="mb-3">
      <label for="iso_code" class="form-label">Apellido</label>
      <input type="text" required aria-required="El Apellido es requerido" class="form-control" name="last_name" id="last_name" placeholder="Ingrese..." value="<?= $values->last_name ?>">
    </div>
    <div class="mb-3">
      <label for="iso_code" class="form-label">Fecha de nacimiento</label>
      <input type="date" required aria-required="La fecha de nacimiento es requerida" class="form-control" name="date_birth" id="date_birth" value="<?= $values->date_birth ?>">
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#date_birth').datepicker({
          "format": "yyyy-mm-dd"
        });
      });
    </script>
    <div class="mb-3">
      <label for="iso_code" class="form-label">Nacionalidad</label>
      <input type="text" required aria-required="La nacionalidad es requerida" class="form-control" name="nationality" id="nationality" placeholder="Ingrese..." value="<?= $values->nationality ?>">
    </div>
    <a href="../actors/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info">Actualizar</button>
  </form>
</section>
