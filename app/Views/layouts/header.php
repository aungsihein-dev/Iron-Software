<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Brand</a>
    <ul class="navbar-nav">
      <?php if(isset($navbar)): ?>
        <?php foreach($navbar as $item): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= esc($item['link']) ?>"><?= esc($item['name']) ?></a>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<!-- End Navbar -->