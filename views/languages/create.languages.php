<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>Crear idioma</h1>
    <?php if ($errors->exist) { ?>
      <div class="alert alert-dismissible alert-danger m-0 color-white">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="text-white m-0">Ya existe un idioma creada con el mismo nombre y código.</p>
      </div>
    <?php } ?>
  </div>
  <form method="post" action="create.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre <small class="text-danger" style="font-size: 12px;"><?= $errors->name ?></small></label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese..." value="<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>">
    </div>
    <div class="mb-3">
      <label for="iso_code" class="form-label">ISO CODE <small class="text-danger" style="font-size: 12px;"><?= $errors->iso_code ?></small></label>
      <input type="text" class="form-control" name="iso_code" id="iso_code" placeholder="Ingrese..." value="<?= isset($_POST["iso_code"]) ? $_POST["iso_code"] : "" ?>" maxlength="4">
    </div>
    <a href="../languages/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info" name="save" value="save">Guardar</button>
  </form>
</section>
