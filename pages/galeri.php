<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="ekskul" class="py-5 mt-5">
  <div class="container">
    <div class="mb-5 text-center">
      <h2 class="display-4 pb-3 fw-semibold"> <span class="text-info">Galery</span></h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 text-center">
          <img src="<?= base_url('assets/img/about/s-6.jpg'); ?>" class="card-img-top" alt="Foto 1">
          <h5 class="card-title p-3">Rapat Komite</h5>
          <p class="card-text"></p>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="<?= base_url('assets/img/about/s-7.jpg'); ?>" class="card-img-top" alt="Foto 2">
          <h5 class="card-title p-3">Workshop</h5>
          <p class="card-text"></p>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center">
          <img src="<?= base_url('assets/img/about/s-8.jpg'); ?>" class="card-img-top" alt="Foto 3">
          <h5 class="card-title p-3">Lomba Bersih & Hias Kelas</h5>
          <p class="card-text"></p>
        </div>
      </div>

      <!-- Video 1 -->
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/lt-IB88Al7Q" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <!-- Video 2 -->
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/vBSshSvQt2Y" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <!-- Video 2 -->
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/Fyv6xOvEB5k" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>
