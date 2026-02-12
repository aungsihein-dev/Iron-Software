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
                    <input type="email" placeholder="<?= esc($signupPlaceholder) ?>" required />
                    <button type="submit">
                        <img src="/images/singupnow.svg" alt="Sign Up Now">
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
<!-- Feature Section -->
<section class="feature-first-section">
    <!-- FULL-WIDTH ROW -->
    <div class="feat-title-row">
        <div class="container">
            <img src="/images/feature-title.svg" alt="feature title">
        </div>
    </div>
    <div class="features-row">
        <div class="container">
            <div class="features-items">
                <div class="feature-item">
                    <span class="feat-hash"><?= esc($feat_hash) ?></span>
                    <span class="feat-sub"><?= esc($feat_sub_one) ?></span>
                </div>
                <div class="feature-item">
                    <span class="feat-hash"><?= esc($feat_hash) ?></span>
                    <span class="feat-sub"><?= esc($feat_sub_two) ?></span>
                </div>
                <div class="feature-item">
                    <span class="feat-hash"><?= esc($feat_hash) ?></span>
                    <span class="feat-sub"><?= esc($feat_sub_three) ?></span>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="feature-second-section">
    <div class="container">
        <div class="row feat-description">
            <p class="desc">
                <span class="feat-desc"><?= esc($feat_desc_one_start) ?></span><span
                    class="feat-desc-bold"><?= esc($feat_desc_one_bold) ?></span><span
                    class="feat-desc"><?= esc($feat_desc_one_end) ?></span>
            </p>
            <p class="desc">
                <span class="feat-desc-bold"><?= esc($feat_desc_two_start_bold) ?></span><span
                    class="feat-desc"><?= esc($feat_desc_two_end) ?></span>
            </p>
        </div>
    </div>
</section>
<!-- Proposition Section -->
<section class="proposition-section">
    <div class="container">
        <div class="row proposition">
            <div class="col-md-4">
                <img src="/images/HTMLtoPDF.svg" alt="HTML to PDF">
            </div>
            <div class="col-md-8">
                <div class="row propose-title">
                    <h1>
                        <span class="propose-title-start"><?= esc($propose_TitleStart) ?></span>
                        <span class="propose-title-end"><?= esc($propose_TitleEnd) ?></span>
                    </h1>
                </div>
                <div class="row propose-desc">
                    <p class="desc"><?= esc($propose_description_one) ?></p>
                </div>
                <div class="row propose-desc">
                    <p class="desc"><?= esc($propose_description_two) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Early access Section -->
<section class="early-access-section">
    <div class="container">
        <div class="row early-access">
            <div class="row early-access-title">
                <h1>
                    <span class="early-access-title-start"><?= esc($early_TitleStart) ?></span>
                    <span class="early-access-title-end"><?= esc($early_TitleEnd) ?></span>
                </h1>
            </div>
            <div class="row">
                <p class="early-access-desc"><?= esc($early_description) ?></p>
            </div>
            <div class="row early-access-btns gap-4">
                <div class="tech-card">
                    <div class="tech-badge">
                        <span><?= esc($early_btn_one) ?></span>
                    </div>

                    <div class="tech-logo">
                        <img src="/images/forJava.svg" alt="Java">
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-badge-two">
                        <span><?= esc($early_btn_two) ?></span>
                    </div>

                    <div class="tech-logo">
                        <img src="/images/forPython.svg" alt="Python">
                    </div>
                </div>
                <div class="tech-card">
                    <div class="tech-badge-two">
                        <span><?= esc($early_btn_three) ?></span>
                    </div>

                    <div class="tech-logo">
                        <img src="/images/forNodejs.svg" alt="Node.js">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer-signup-section">
    <div class="container">
        <div class="row footer-signup-title">
            <h1>
                <span class="early-access-title-start"><?= esc($signupTo) ?></span>
                <span class="early-access-title-end"><?= esc($beta) ?></span>
            </h1>
        </div>

        <div class="row">
            <form class="signup-form-two">
                <input type="email" placeholder="<?= esc($signupPlaceholder) ?>" required />
                <button type="submit">
                    <img src="/images/singupnow.svg" alt="Sign Up Now">
                </button>
            </form>
        </div>
</section>
<?php echo view('layouts/footer'); ?>