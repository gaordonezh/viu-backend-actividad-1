<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>Crear plataforma</h1>
    <?php if ($errors->exist) { ?>
      <div class="alert alert-dismissible alert-danger m-0 color-white">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="text-white m-0">Ya existe una plataforma creada con el mismo nombre.</p>
      </div>
    <?php } ?>
  </div>
  <form method="post" action="create.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre <small class="text-danger" style="font-size: 12px;"><?= $errors->name ?></small></label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese..." value="<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>">
    </div>
    <a href="../platforms/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info" name="save" value="save">Guardar</button>
  </form>
</section>
