<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 6 exercice 6</title>
    </head>
    <body>
        <a href="index.php?building=12&room=101">Clique ici !</a>
        <?php 
            if (isset($_GET['building']) && isset($_GET['room'])){
                echo '<p>Votre suite ce trouve dans le bâtiment ' . $_GET['building'] . ', chambre ' . $_GET['room'] . '</p>';
            }
        ?>
    </body>
</html>