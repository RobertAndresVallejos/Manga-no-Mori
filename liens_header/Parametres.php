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
                    <h2><?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?></h2>
                    <h3>Informations générales</h3>
                    <p><?php echo 'Nom : ' . $_SESSION['nom'] ?></p>
                    <p><?php echo 'Prénom : ' . $_SESSION['prenom'] ?></p>
                    <p><?php echo 'Mail : ' . $_SESSION['email'] ?></p>
                    <p><?php echo 'Mot de passe : ********** ' ?><a href="Formulaire_Modification_MotDePasse.php" class="bouton_3">Modifier (mot de passe)</a></p>
                </div>
            </section>
        </main>

        <?php require_once ('../composants/footer.php') ?>
        
    </body>
</html>