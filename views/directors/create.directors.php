<section>
  <h1>Crear Director</h1>
  <form method="post" action="create.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" required aria-required="El nombre es requerido" class="form-control" name="name" id="name" placeholder="Ingrese...">
    </div>
    <div class="mb-3">
      <label for="iso_code" class="form-label">Apellido</label>
      <input type="text" required aria-required="El Apellido es requerido" class="form-control" name="last_name" id="last_name" placeholder="Ingrese...">
    </div>
    <div class="mb-3">
      <label for="iso_code" class="form-label">Fecha de nacimiento</label>
      <input type="date" required aria-required="La fecha de nacimiento es requerida" class="form-control" name="date_birth" id="date_birth">
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#date_birth').datepicker({
          "format": "yyyy-mm-dd"
        });
      });
    </script>
    <div class="mb-3">
      <label for="iso_code" class="form-label">Nacionalidad</label>
      <input type="text" required aria-required="La nacionalidad es requerida" class="form-control" name="nationality" id="nationality" placeholder="Ingrese...">
    </div>
    <a href="../directors/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info">Guardar</button>
  </form>
</section>
