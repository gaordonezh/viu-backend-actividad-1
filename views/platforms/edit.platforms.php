<section>
  <h1>Editar plataforma</h1>
  <form method="post" action="edit.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" required aria-required="El nombre es requerido" class="form-control" name="name" id="name" placeholder="Ingrese..." value="<?= $values->name ?>">
      <input type="text" hidden required name="id" value="<?= $values->id ?>">
    </div>
    <a href="../platforms/" class="btn btn-outline-danger">Cancelar</a>
    <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
  </form>
</section>
