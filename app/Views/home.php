<?php echo view('layouts/header'); ?>
<!-- HERO -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- LEFT: Text Content -->
            <div class="col-lg-6">
                <div class="hero-content">
                    <img src="/images/ironpdfforcplusplus.svg" alt="IronPDF for C++" class="hero-product-svg mb-3">

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
                <img src="/images/hero-section-img1.svg" class="pdf-main" alt="PDF Illustration">
            </div>
        </div>
    </div>
</section>
<!-- SIGN UP -->
<section class="signup-section">
    <div class="container">
        <div class="row">
            <div class="signup-content">
                <h1 class="signup-title"><?= esc($signupSubtitle_1) ?></h1>
                <h2 class="signup-subtitle"><?= esc($signupSubtitle_2) ?></h2>
                <form class="signup-form">
                    <input type="email" class="signup-input" placeholder="<?= esc($signupPlaceholder) ?>" required />
                    <button type="submit" class="signup-btn">
                        <?= esc($signupButton) ?>
                        <svg width="10" height="10" viewBox="0 0 10 10" style="vertical-align: middle; margin-left: 1px;">
                            <polygon points="0,0 10,5 0,10" fill="#fff" />
                        </svg>
                    </button>
                </form>
                <div class="light-btn-group">
                    <div class="light-btn">
                        <?= esc($signupSubtitle_3) ?>
                    </div>
                    <div class="signup-subtitle-light">
                        <?= esc($signupSubtitle_4) ?>
                    </div>
                    <div class="signup-subtitle-light-two">
                        <?= esc($signupSubtitle_5) ?>
                    </div>
                    <div class="signup-subtitle-light">
                        <?= esc($signupSubtitle_slash) ?>
                    </div>
                    <div class="signup-subtitle-light-two">
                        <?= esc($signupSubtitle_6) ?>
                    </div>
                    <div class="signup-subtitle-light">
                        <?= esc($signupSubtitle_slash) ?>
                    </div>
                    <div class="signup-subtitle-light-two">
                        <?= esc($signupSubtitle_7) ?>
                    </div>
                </div>

            </div>

        </div>
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