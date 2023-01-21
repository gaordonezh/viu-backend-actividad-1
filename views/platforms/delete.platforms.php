<section>
  <h2>Eliminar plataforma</h2>
  <form method="post" action="delete.php">
    <input type="text" hidden required name="id" value="<?= $values->id ?>">
    <div class="mb-3">
      <h4><?= $values->name ?></h4>
      <p>Al presionar el botón "Confirmar", se procederá a eliminar esta plataforma</p>
      <a href="../platforms/" class="btn btn-outline-danger">Cancelar</a>
      <button type="submit" class="btn btn-outline-info">Confirmar</button>
    </div>
  </form>
</section>
