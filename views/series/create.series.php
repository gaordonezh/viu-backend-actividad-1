<section>
  <h1>Crear serie</h1>
  <form method="post" action="create.php">
    <div class="form-group">
      <label for="title" class="form-label">Título <small class="text-danger" style="font-size: 12px;"><?= $errors->title ?></small></label>
      <input type="text" class="form-control" name="title" aria-describedby="nameHelp" id="title" placeholder="Ingrese..." value="<?= isset($_POST["title"]) ? $_POST["title"] : "" ?>">
    </div>
    <div class="form-group">
      <label for="platformsSelect" class="form-label mt-4">Plataforma <small class="text-danger" style="font-size: 12px;"><?= $errors->platform ?></small></label>
      <select class="form-select" id="platformsSelect" name="platform">
        <option value="<?= null ?>" selected hidden>Selecciona...</option>
        <?php foreach ($platformList as $platform) { ?>
          <option value="<?= $platform->id ?>" <?= isset($_POST["platform"]) && $_POST["platform"] == $platform->id ? "selected" : "" ?>><?= $platform->name ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="directorsSelect" class="form-label mt-4">Director <small class="text-danger" style="font-size: 12px;"><?= $errors->director ?></small></label>
      <select class="form-select" id="directorsSelect" name="director">
        <option value="<?= null ?>" seleted hidden>Selecciona...</option>
        <?php foreach ($directorList as $director) { ?>
          <option value="<?= $director->id ?>" <?= isset($_POST["director"]) && $_POST["director"] == $director->id ? "selected" : "" ?>><?= $director->name ?> <?= $director->last_name ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label mt-4">Actores <small class="text-danger" style="font-size: 12px;"><?= $errors->actor ?></small></label>
      <div class="row px-2">
        <?php foreach ($actorList as $actor) {  ?>
          <div class="form-check form-switch col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-check-input" type="checkbox" id="actor_check_<?= $actor->id ?>" name="actor[]" value="<?= $actor->id ?>">
            <label class="form-check-label" for="actor_check_<?= $actor->id ?>"><?= $actor->name ?> <?= $actor->last_name ?></label>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label mt-4">Idiomas de audio <small class="text-danger" style="font-size: 12px;"><?= $errors->audio ?></small></label>
      <div class="row px-2">
        <?php foreach ($languageList as $audio) {  ?>
          <div class="form-check form-switch col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-check-input" type="checkbox" id="audio_check_<?= $audio->id ?>" name="audio[]" value="<?= $audio->id ?>">
            <label class="form-check-label" for="audio_check_<?= $audio->id ?>"><?= $audio->name ?></label>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label mt-4">Idiomas de subtitulo <small class="text-danger" style="font-size: 12px;"><?= $errors->subtitle ?></small></label>
      <div class="row px-2">
        <?php foreach ($languageList as $subtitle) {  ?>
          <div class="form-check form-switch col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-check-input" type="checkbox" id="subtitle_check_<?= $subtitle->id ?>" name="subtitle[]" value="<?= $subtitle->id ?>">
            <label class="form-check-label" for="subtitle_check_<?= $subtitle->id ?>"><?= $subtitle->name ?></label>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="form-group mt-5">
      <a href="../series/" class="btn btn-outline-danger">Cancelar</a>
      <button type="submit" class="btn btn-outline-info" name="save" value="save">Guardar</button>
    </div>
  </form>
</section>
