<!-- database dei dischi -->
<?php @include "database.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi</title>
    <link rel="stylesheet" href="dist/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,600,400,800" rel="stylesheet">
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="container">
        <img src="img/spotify.png" alt="">
      </div>
    </header>
    <!-- fine header -->

    <!-- MAIN -->
    <main>
      <div class="container flex">

        <!-- ciclo foreach per stampare tutti i dischi -->
        <?php foreach ($database as $database_item){ ?>
          <div class="disc">
            <ul>
              <li><img src="<?php echo ($database_item["poster"]) ?>" alt=""> </li>
              <li><h3><?php echo($database_item["title"]) ?></h3></li>
              <li><p><?php echo($database_item["author"]) ?></p></li>
              <li><p><?php echo($database_item["year"]) ?></p></li>
            </ul>
          </div>
        <?php }; ?>
      </div>
    </main>
    <!-- fine main -->
  </body>
</html>
