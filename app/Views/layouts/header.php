<?php
$siteJsonPath = ROOTPATH . 'data/site.json';
$site = [];

if (file_exists($siteJsonPath)) {
  $site = json_decode(file_get_contents($siteJsonPath), true);
}

// fallback
$author = $site['author'] ?? 'Aung Si Hein';
$metaTitle = $site['meta_title'] ?? 'Iron Software';
$metaDescription = $site['meta_description'] ?? '';
$keywords = $site['keywords'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Meta Data -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="<?= esc($author) ?>">
  <title><?= esc($meta_title ?? $metaTitle) ?></title>
  <meta name="description" content="<?= esc($meta_description ?? $metaDescription) ?>">
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= esc($meta_title ?? $metaTitle) ?>">
  <meta property="og:description" content="<?= esc($meta_description ?? $metaDescription) ?>">
  <meta property="og:url" content="<?= current_url() ?>">
  <meta property="og:image" content="<?= base_url('images/hero-section-img1.svg') ?>">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= esc($meta_title ?? $metaTitle) ?>">
  <meta name="twitter:description" content="<?= esc($meta_description ?? $metaDescription) ?>">
  <meta name="twitter:image" content="<?= base_url('images/hero-section-img1.png') ?>">

  <link rel="canonical" href="<?= current_url() ?>">
  <meta name="keywords" content="<?= esc($keywords) ?>">
  <meta name="robots" content="index, follow">
  <!-- Fonts & CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/assets/css/custom.css">
  <!-- Iron Software Link Icon -->
  <link rel="icon" type="image/png" href="/images/iron-software-icon.png">

</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar position-absolute w-100 top-0 p-3">
      <div class="container-fluid d-flex align-items-center justify-content-start gap-4">

        <!-- Logo -->
        <a class="navbar-brand" href="#" id="logoMenuToggle">
          <img src="/images/logo.svg" alt="Iron Software Logo">
        </a>

        <!-- Desktop Menu (left side, next to logo) -->
        <ul class="navbar-nav d-none d-lg-flex flex-row align-items-center">
          <!-- Products Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              PRODUCTS
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Iron Suite</a></li>
              <li><a class="dropdown-item" href="#">Iron PDF</a></li>
              <li><a class="dropdown-item" href="#">Iron Word</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link text-white" href="#">ABOUT US</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">CAREER</a></li>
        </ul>
      </div>

      <!-- Mobile Menu -->
      <ul class="navbar-nav flex-column d-lg-none bg-dark p-3" id="mobileMenu" style="display: none;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            PRODUCTS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Iron Suite</a></li>
            <li><a class="dropdown-item" href="#">Iron PDF</a></li>
            <li><a class="dropdown-item" href="#">Iron Word</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link text-white" href="#">ABOUT US</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">CAREER</a></li>
      </ul>
    </nav>
    <!-- End Navbar -->
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>