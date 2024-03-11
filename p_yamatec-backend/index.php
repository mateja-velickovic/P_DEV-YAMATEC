<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="resources/css/style.css" />
    <title>YAMATEC</title>
  </head>
  <body>
    <nav>
      <ul>
        <div>
          <li><a href="">LOGO</a></li>
          <li><a href="">ETML - Électronique</a></li>
        </div>
        <div>
          <li><a href="">LANGUE</a></li>
          <li><a href="">Se connecter</a></li>
        </div>
      </ul>
    </nav>


        <main>

    <?php

    $pdo = new PDO("mysql:host=localhost;dbname=db_p_yamatec;charset=utf8", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $t_yamatec = $pdo->query("SELECT * FROM t_coffee");
    $result = $t_yamatec->fetchAll(PDO::FETCH_ASSOC);

    ?>

        <div class="coffees">
        <?php foreach ($result as $coffee) { ?>
        <div class="box" >
          <div class="img">
            <img src="<?php echo $coffee['lien'] ?>" alt="" />
            <p><?php echo $coffee['nom'] ?></p>
            <p><?php echo $coffee['prix'] ?></p>
          </div>
          <div class="add">
            <a href="">Ajouter</a>
          </div>
        </div>
        <?php }?>



      
    </div>
    <div class="basketSide">
      <div class="basket">
        <p class="basketTitle">Panier</p>
        <div class="selection">a</div>
      </div>
 
    </div>
 
  </main>
  </body>
</html>
