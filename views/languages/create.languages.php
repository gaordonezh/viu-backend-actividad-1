<section>
  <h1>Crear Idioma</h1>
  <form method="post" action="create.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" required aria-required="El nombre es requerido" class="form-control" name="name" id="name" placeholder="Ingrese..." value="">
    </div>
    <div class="mb-3">
      <label for="iso_code" class="form-label">ISO CODE</label>
      <input type="text" required aria-required="El nombre es requerido" class="form-control" name="iso_code" id="iso_code" placeholder="Ingrese..." value="" maxlength="4">
    </div>
    <a href="../languages/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info">Guardar</button>
  </form>
</section>
