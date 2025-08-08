<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis" style="background-image: url(<?= $model['top_blog']['thumbnail'] ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="col-lg-10 px-0">
      <h1 class="display-4 fst-italic"><?= $model['top_blog']['title'] ?></h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents</p>
      <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
    </div>
  </div>
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Kabar Pesantren
      </h3>
      <div class="row mb-2">
      <?php foreach ($model['top_two_blog'] as $blog) : ?>
        <div class="col-12 mb-4">
          <div class="border rounded overflow-hiddenmb-4 shadow-sm p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary-emphasis"><?= $blog['category'] ?></strong>
            <h3 class="mb-0" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $blog['title'] ?></h3>
            <div class="mb-1 text-body-secondary"><?= substr($blog['publishedAt'], 0, 10) ?></div>
            <p class="card-text mb-auto"><?= substr($blog['content'], 0, 100) ?></p>
            <a href="#" class="icon-link">
              Continue reading
            </a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Kajian Islami
      </h3>
      <?php foreach ($model['top_two_blog'] as $blog) : ?>
        <div class="col-12 mb-4">
          <div class="border rounded overflow-hiddenmb-4 shadow-sm p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary-emphasis"><?= $blog['category'] ?></strong>
            <h3 class="mb-0" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $blog['title'] ?></h3>
            <div class="mb-1 text-body-secondary"><?= substr($blog['publishedAt'], 0, 10) ?></div>
            <p class="card-text mb-auto"><?= substr($blog['content'], 0, 100) ?></p>
            <a href="#" class="icon-link">
              Continue reading
            </a>
          </div>
        </div>
      <?php endforeach ?>
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Cerita Islami
      </h3>
      <?php foreach ($model['top_two_blog'] as $blog): ?>
        <div class="col-12 mb-4">
          <div class="border rounded overflow-hiddenmb-4 shadow-sm p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary-emphasis"><?= $blog['category'] ?></strong>
            <h3 class="mb-0" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= $blog['title'] ?></h3>
            <div class="mb-1 text-body-secondary"><?= substr($blog['publishedAt'], 0, 10) ?></div>
            <p class="card-text mb-auto"><?= substr($blog['content'], 0, 100) ?></p>
            <a href="#" class="icon-link">
              Continue reading
            </a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">Tentang kami</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>
        <div>
          <h4 class="fst-italic">Recent posts</h4>
          <ul class="list-unstyled">
            <?php foreach ($model['recent_posts'] as $post) :?>
            <li>
              <a href="#" class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top">
                <img src=<?= $blog['image'] ?> alt="" class="h-25 w-25">
                <div class="col-lg-8">
                  <h6 class="mb-0"><?= $post['title'] ?><h6>
                  <small class="text-body-secondary"><?= substr($blog['publishedAt'], 0, 10) ?></small>
                </div>
              </a>
            </li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="p-4">
          <h4 class="fst-italic">Media Sosial</h4>
          <ol class="list-unstyled">
            <li><a href="#">Instagram</a></li>
            <li><a href="#">X</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</main>