<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./theme-localhost/style/reset.css">
  <link rel="stylesheet" href="./theme-localhost/style/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- modify your name here -->
  <title>localhost Erwann</title>
</head>
<body>

<!-- modify your name here               and your favorite data base manager here-->
  <h1>Localhost de Erwann<a href="./phpmyadmin" class="pma">phpmyadmin</a></h1>
  

  <?php
  // =============================================================
  // modify exclude directory on "$dossiersExclu"
  // =============================================================

    $dossierActuel  = './';
    $dossiers       = scandir($dossierActuel);
    $dossiersExclus = [
      '.',
      '..',
      '.htpasswd',
      '.stylelintrc',
      '.htaccess',
      'index.php',
      'style',
      'theme-localhost',
      'phpmyadmin',
      'adminer'
    ];
  // =============================================================
  ?>

  <div class="navigation">
    <?php foreach ($dossiers as $dossier) : ?>
      <?php if (!in_array($dossier, $dossiersExclus)) : ?>

        <a href="./<?= $dossier ?>" class="nav__item <?= $dossier ?>"><span class="nav__title"><?= $dossier ?></span></a>

      <?php endif ?>
    <?php endforeach ?>
  </div>

  <div class="container__main">
    <img src="./theme-localhost/images/apache.png" alt="" class="img">
  </div>

</body>
</html>