<section>
  <h2>Eliminar Director</h2>
  <form method="post" action="delete.php?id=<?= $_GET["id"] ?>">
    <input type="text" hidden required name="id" value="<?= $values->id ?>">
    <div class="mb-3">
      <h4><?= $values->name ?> <?= $values->last_name ?> </h4>
      <p>Al presionar el botón "Confirmar", se procederá a eliminar este director</p>
      <a href="../directors/" class="btn btn-outline-danger">Cancelar</a>
      <button type="submit" class="btn btn-outline-info">Confirmar</button>
    </div>
  </form>
</section>
