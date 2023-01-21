<section>
  <article>
    <div class="container text-center">
      <div class="row">
        <?php foreach ($serieList as $serie) { ?>
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
            <div class="card" style="height: 100%;">
              <h3 class="card-header"><?= $serie->title ?></h3>
              <div class="card-body">
                <h5 class="card-title">Disfrutala en <strong><?= $serie->platform ?></strong></h5>
                <h6 class="card-subtitle text-muted">Dirigido por <strong><?= $serie->director ?></strong></h6>
                <div style="text-align: left;">
                  <p class="card-text">Reparto: </p>
                  <?php foreach ($serie->actors as $actor) { ?>
                    <p class="blockquote-footer"><?= $actor ?></p>
                  <?php } ?>
                </div>
              </div>
              <div class="card-footer d-flex">
                <div style="width: 50%; text-align: left">
                  <p style="margin: 0" class="card-text">Disponible en: </p>
                  <?php foreach ($serie->audios as $audio) { ?>
                    <span class="badge rounded-pill bg-light my-1"><?= $audio ?></span>
                  <?php } ?>
                </div>
                <div style="width: 50%; text-align: left">
                  <p style="margin: 0" class="card-text">Subtítulado a: </p>
                  <?php foreach ($serie->subtitles as $subtitle) { ?>
                    <span class="badge rounded-pill bg-light my-1"><?= $subtitle ?></span>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        <?php }  ?>
      </div>
    </div>
  </article>
</section>
