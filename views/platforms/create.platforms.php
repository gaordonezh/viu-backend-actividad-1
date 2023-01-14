<?php
require_once "../../controllers/Platforms.controller.php";
$platformInstance = new PlatformsController();

if (isset($_POST["name"])) {
  $platformInstance->createPlatform((object)["name" => $_POST["name"]]);
  header("location: ../platforms/");
}
?>

<section>
  <h1>Crear plataforma</h1>
  <form method="post" action="create.platforms.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" required aria-required="El nombre es requerido" class="form-control" name="name" id="name" placeholder="Ingrese..." value="">
    </div>
    <a href="../platforms/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info">Guardar</button>
  </form>
</section>
