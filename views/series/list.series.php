<section>
  <div class="d-flex justify-content-between flex-wrap">
    <h1>SERIES</h1>
    <a href="create.php" class="btn btn-outline-primary">AGREGAR <i class="fa-solid fa-plus"></i></a>
  </div>
  <div style="overflow: auto">
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
          <th>TÍTULO</th>
          <th>PLATAFORMA</th>
          <th>DIRECTOR</th>
          <th>ACTORES</th>
          <th>SUBTÍTULOS</th>
          <th>AUDIO</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list as $serie) { ?>
          <tr class="table-light">
            <th><?= $serie->id ?></th>
            <td><?= $serie->title ?></td>
            <td><?= $serie->platform ?></td>
            <td><?= $serie->director ?></td>
            <td>
              <span class="badge rounded-pill bg-secondary" style="cursor: pointer;" role="button" data-bs-toggle="modal" data-bs-target="#modalDetailsActors<?= $serie->id ?>"><?= count($serie->actors) ?> actore(s) <i class="fa-solid fa-eye"></i></span>
              <div class="modal fade" id="modalDetailsActors<?= $serie->id ?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Actores</h5>
                    </div>
                    <div class="modal-body">
                      <?php foreach ($serie->actors as $actor) { ?>
                        <p class="blockquote-footer"><?= $actor ?></p>
                      <?php } ?>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <span class="badge rounded-pill bg-secondary" style="cursor: pointer;" role="button" data-bs-toggle="modal" data-bs-target="#modalDetailsSubtitles<?= $serie->id ?>"><?= count($serie->subtitles) ?> subtítulo(s) <i class="fa-solid fa-eye"></i></span>
              <div class="modal fade" id="modalDetailsSubtitles<?= $serie->id ?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Idiomas de subtítulos</h5>
                    </div>
                    <div class="modal-body">
                      <?php foreach ($serie->subtitles as $subtitle) { ?>
                        <p class="blockquote-footer"><?= $subtitle ?></p>
                      <?php } ?>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <span class="badge rounded-pill bg-secondary" style="cursor: pointer;" role="button" data-bs-toggle="modal" data-bs-target="#modalDetailsAudio<?= $serie->id ?>"><?= count($serie->audios) ?> audio(s) <i class="fa-solid fa-eye"></i></span>
              <div class="modal fade" id="modalDetailsAudio<?= $serie->id ?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Idiomas de audio</h5>
                    </div>
                    <div class="modal-body">
                      <?php foreach ($serie->audios as $audio) { ?>
                        <p class="blockquote-footer"><?= $audio ?></p>
                      <?php } ?>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="btn-group" role="group">
                <a href="edit.php?id=<?= $serie->id ?>" class="btn btn-outline-info" style="padding: 5px 20px"><i class="fa-solid fa-pen"></i></a>
                <a href="delete.php?id=<?= $serie->id ?>" class="btn btn-outline-danger" style="padding: 5px 20px"><i class="fa-solid fa-trash"></i></a>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>
