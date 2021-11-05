<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified JavaScript -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <title>SF PHP FS || PHP Practice</title>
  <link rel="stylesheet" href="css/style.css" />
  <script defer src="js/app.js"></script>
</head>

<body>

  <header>
    <?php include 'includes/menu.inc.php' ?>
  </header>

  <main class="section no-pad-bot" id="index-banner">
    <section id="task">

      <div class="container">
        <h1 class="header center purple-text">
          <?php  echo $p  ?>
        </h1>


        <?php include 'includes/task.inc.php' ?>

      </div>
    </section>

    <section id="gallery">
      <?php include 'includes/gallery.inc.php' ?>

    </section>

    <section id="info">
      <div class="container">
        <?php include 'includes/info.inc.php' ?>
      </div>
    </section>

  </main>


  <?php include 'includes/footer.inc.php' ?>

</body>

</html>