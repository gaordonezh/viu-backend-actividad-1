<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>Plataformas</h1>
    <a href="create.php" class="btn btn-outline-primary">AGREGAR <i class="fa-solid fa-plus"></i></a>
  </div>

  <div style="overflow: auto">
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
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
              <div class="btn-group" role="group">
                <a href="edit.php?id=<?= $platform->id ?>" class="btn btn-outline-info" style="padding: 5px 20px"><i class="fa-solid fa-pen"></i></a>
                <a href="delete.php?id=<?= $platform->id ?>" class="btn btn-outline-danger" style="padding: 5px 20px"><i class="fa-solid fa-trash"></i></a>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>
