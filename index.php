<!-- database dei dischi -->
<?php @include "database.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi</title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,600,400,800" rel="stylesheet">
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="header-container">
        <div class="logo">
          <img src="img/spotify.png" alt="">
        </div>

        <div class="music-select">
          <select class="select" name="">
            <option value="disc">Genere</option>
            <option value="Rock">Rock</option>
            <option value="Pop">Pop</option>
            <option value="Jazz">Jazz</option>
          </select>
        </div>
      </div>
    </header>
    <!-- fine header -->

    <!-- MAIN -->
    <main>
      <div class="disc-list">

        <!-- ciclo foreach per stampare tutti i dischi -->
        <?php foreach ($database as $database_item){ ?>
          <div class="disc <?php echo ($database_item["genre"]) ?>">
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

    <!-- Template Handlebars -->
    <script id="template" type="text/x-handlebars-template">
      <div class="disc {{genre}}">
        <ul>
          <li><img src="{{poster}}" alt=""> </li>
          <li><h3>{{title}}</h3></li>
          <li><p>{{author}}</p></li>
          <li><p>{{year}}</p></li>
        </ul>
      </div>
    </script>
    <!-- fine template handlebars -->

    <script type="text/javascript" src="dist/app.js"></script>
  </body>
</html>
