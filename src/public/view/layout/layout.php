<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->e($title); ?></title>
  <!-- MyCSS -->
  <link rel="stylesheet" href="../css/style.css" >
  <!-- Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
  <!-- FullCalendar -->
  <?= $this->section('links_full_calendar') ?>
</head>
<body>
  <header class="Header">
    <?= $this->section('header'); ?>
  </header>

  <main>

    <?= $this->section('content'); ?>

  </main>

  <script src="../js/script.js" type="module"></script>
</body>
</html>