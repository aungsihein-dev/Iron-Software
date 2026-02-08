<?php echo view('layouts/header'); ?>

<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- LEFT: Text Content -->
      <div class="col-lg-6">
        <div class="hero-content">
            <img src="/images/ironpdfforcplusplus.svg"
             alt="IronPDF for C++"
             class="hero-product-svg mb-3">

            <p class="hero-title">
            <?= esc($heroTitle) ?>
            </p>

            <h1 class="hero-subtitle">
            <?= esc($heroSubtitle_1) ?>
            </h1>

            <h2 class="hero-subtitle-secondary">
            <?= esc($heroSubtitle_2) ?>
            </h2>

            <p class="hero-subtitle-light">
            <?= esc($heroSubtitle_3) ?>
            </p>
        </div>
      </div>
      <!-- RIGHT: Illustration -->
      <div class="col-lg-6 text-end">

        <!-- Main PDF Illustration -->
        <img src="/images/hero-section-img1.svg"
             class="pdf-main"
             alt="PDF Illustration">
      </div>
    </div>
  </div>
</section>
<!-- ROW 2 -->
<section class="row-two">
  <div class="container">
    Second row content
  </div>
</section>

<!-- ROW 3 -->
<section class="row-three">
  <div class="container">
    Third row content
  </div>
</section>

<!-- ROW 4 -->
<section class="row-four">
  <div class="container">
    Fourth row content
  </div>
</section>

<?php echo view('layouts/footer'); ?>
