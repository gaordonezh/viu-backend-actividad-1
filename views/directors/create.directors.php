<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>Crear director</h1>
    <?php if ($errors->exist) { ?>
      <div class="alert alert-dismissible alert-danger m-0 color-white">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="text-white m-0">Ya existe un director creado con el mismo nombre y apellido.</p>
      </div>
    <?php } ?>
  </div>
  <form method="post" action="create.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre <small class="text-danger" style="font-size: 12px;"><?= $errors->name ?></small></label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese..." value="<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>">
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Apellido <small class="text-danger" style="font-size: 12px;"><?= $errors->last_name ?></small></label>
      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ingrese..." value="<?= isset($_POST["last_name"]) ? $_POST["last_name"] : "" ?>">
    </div>
    <div class="mb-3">
      <label for="date_birth" class="form-label">Fecha de nacimiento <small class="text-danger" style="font-size: 12px;"><?= $errors->date_birth ?></small></label>
      <input type="date" class="form-control" name="date_birth" id="date_birth" value="<?= isset($_POST["date_birth"]) ? $_POST["date_birth"] : "" ?>">
    </div>
    <div class="mb-3">
      <label for="nationality" class="form-label">Nacionalidad <small class="text-danger" style="font-size: 12px;"><?= $errors->nationality ?></small></label>
      <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Ingrese..." value="<?= isset($_POST["nationality"]) ? $_POST["nationality"] : "" ?>">
    </div>
    <a href="../directors/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info" name="save" value="save">Actualizar</button>
  </form>
</section>

<script type="text/javascript">
  $(document).ready(function() {
    $('#date_birth').datepicker({
      "format": "yyyy-mm-dd"
    });
  });
</script>
