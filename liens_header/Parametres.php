<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Page paramètres</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/png" href="../img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('../composants/header.php') ?>

        <main>
            <section id="section-parametres">
                <h1>Paramètres</h1>
                <div class="bloc-type-1">  
                    <h2>PRENOM NOM<h2>
                    <h3>Informations générales</h3>
                    <?php echo 'Mail : ' . $_SESSION['email'] ?>
                    
                </div>
            </section>
        </main>

        <?php require_once ('../composants/footer.php') ?>
        
    </body>
</html>