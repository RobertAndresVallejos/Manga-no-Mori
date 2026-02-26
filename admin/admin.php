<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/png" href="../img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('../composants/header.php') ?>

        <main>
            <section id="section-admin">
                <h1>Admin</h1>
                    <section class="bloc-arrangement-type-1">
                        <div class="bloc-type-1">
                            <h2>Commandes</h2>
                                <a href="Commandes.php">
                                    <img class="to_be_continued" src="../img/fond/to_be_continued.png" alt="to_be_continued"/>
                                </a>
                            <p>Suivi et gestion des étapes de livraison.</p>
                        </div>
                        <div class="bloc-type-1">
                            <h2>Stocks</h2>
                                <a href="Stocks.php">
                                    <img class="to_be_continued" src="../img/fond/to_be_continued.png" alt="to_be_continued"/>
                                </a>
                            <p>État des stocks et inventaire du magasin.</p>
                        </div>
                        <div class="bloc-type-1">
                            <h2>Tableau des utilisateurs</h2>
                                <a href="Tableau_des_utilisateurs.php">
                                    <img class="to_be_continued" src="../img/fond/to_be_continued.png" alt="to_be_continued"/>
                                </a>
                            <p>Administration et modification des comptes.</p>
                        </div>
                    </section>
            </section>
        </main>

        <?php require_once ('../composants/footer.php') ?>
        
    </body>
</html>