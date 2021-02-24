<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->e($title); ?></title>
  <!-- MyCSS -->
  <link rel="stylesheet" href="../css/style.css" >
</head>
<body>

  <main>

    <?= $this->section('content'); ?>

    <a href="https://work-shift.herokuapp.com">home</a>
    <a href="https://work-shift.herokuapp.com/login.php">login</a>
    <a href="https://work-shift.herokuapp.com/admin.php">admin</a>

  </main>

  <script src="../js/script.js" type="module"></script>
</body>
</html>