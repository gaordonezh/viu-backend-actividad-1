<?php
require_once "../../controllers/Platforms.controller.php";

$platforms = new PlatformsController();
$list = $platforms->getPlatforms();
?>
<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>Plataformas</h1>
    <a type="button" href="create.php" class="btn btn-outline-primary">AGREGAR</a>
  </div>

  <table class="table table-hover">
    <thead>
      <tr class="table-primary">
        <th>CÓDIGO</th>
        <th>NOMBRE</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list as $platform) { ?>
        <tr class="table-light">
          <th><?= $platform->id ?></th>
          <td><?= $platform->name ?></td>
          <td>
            <a href="edit.php?id=<?= $platform->id ?>" class="btn btn-outline-info" style="padding: 5px 10px;">Editar</a>
            <a href="delete.php?id=<?= $platform->id ?>" class="btn btn-outline-danger" style="padding: 5px 10px;">Eliminar</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</section>
