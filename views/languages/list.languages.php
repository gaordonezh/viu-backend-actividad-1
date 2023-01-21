<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>Idiomas</h1>
    <a type="button" href="create.php" class="btn btn-outline-primary">AGREGAR</a>
  </div>

  <div style="overflow: auto">
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
          <th>ISO CODE</th>
          <th>NOMBRE</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list as $language) { ?>
          <tr class="table-light">
            <th><?= $language->id ?></th>
            <th><?= $language->iso_code ?></th>
            <td><?= $language->name ?></td>
            <td>
              <a href="edit.php?id=<?= $language->id ?>" class="btn btn-outline-info" style="padding: 5px 10px;">Editar</a>
              <a href="delete.php?id=<?= $language->id ?>" class="btn btn-outline-danger" style="padding: 5px 10px;">Eliminar</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>
