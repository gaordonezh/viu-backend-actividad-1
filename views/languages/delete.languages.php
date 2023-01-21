<section>
  <h2>Eliminar Idioma</h2>
  <form method="post" action="delete.php">
    <input type="text" hidden required name="id" value="<?= $values->id ?>">
    <div class="mb-3">
      <h4><?= $values->iso_code ?> - <?= $values->name ?></h4>
      <p>Al presionar el botón "Confirmar", se procederá a eliminar esta idioma</p>
      <a href="../languages/" class="btn btn-outline-danger">Cancelar</a>
      <button type="submit" class="btn btn-outline-info">Confirmar</button>
    </div>
  </form>
</section>
