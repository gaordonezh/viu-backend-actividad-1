<?php
require_once "../../controllers/Directors.controller.php";

$directors = new DirectorsController();
$list = $directors->getDirectors();
?>

<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>Directores</h1>
    <a type="button" href="create.php" class="btn btn-outline-primary">AGREGAR</a>
  </div>

  <div style="overflow: auto">
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>FECHA NACIMIENTO</th>
          <th>NACIONALIDAD</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list as $director) { ?>
          <tr class="table-light">
            <th><?= $director->id ?></th>
            <td><?= $director->name ?></td>
            <td><?= $director->last_name ?></td>
            <td><?= date('d/m/Y', strtotime($director->date_birth)) ?></td>
            <td><?= $director->nationality ?></td>
            <td>
              <a href="edit.php?id=<?= $director->id ?>" class="btn btn-outline-info" style="padding: 5px 10px;">Editar</a>
              <a href="delete.php?id=<?= $director->id ?>" class="btn btn-outline-danger" style="padding: 5px 10px;">Eliminar</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>
