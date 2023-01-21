<section>
  <h2>Eliminar serie</h2>
  <form method="post" action="delete.php">
    <input type="text" hidden required name="id" value="<?= $values->id ?>">
    <div class="mb-3">
      <h4><?= $values->title ?></h4>
      <p>Al presionar el botón "Confirmar", se procederá a eliminar esta serie</p>
      <a href="../series/" class="btn btn-outline-danger">Cancelar</a>
      <button type="submit" class="btn btn-outline-info">Confirmar</button>
    </div>
  </form>
</section>
