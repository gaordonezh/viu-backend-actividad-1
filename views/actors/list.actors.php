<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>Actores</h1>
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
        <?php foreach ($list as $actor) { ?>
          <tr class="table-light">
            <th><?= $actor->id ?></th>
            <td><?= $actor->name ?></td>
            <td><?= $actor->last_name ?></td>
            <td><?= date('d/m/Y', strtotime($actor->date_birth)) ?></td>
            <td><?= $actor->nationality ?></td>
            <td>
              <a href="edit.php?id=<?= $actor->id ?>" class="btn btn-outline-info" style="padding: 5px 10px;">Editar</a>
              <a href="delete.php?id=<?= $actor->id ?>" class="btn btn-outline-danger" style="padding: 5px 10px;">Eliminar</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>
