<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" type="image/png" href="../../img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('../../composants/header.php') ?>

        <main>
            <section id="section-formulaire-type-1">
                <h1>Connexion</h1>
                <form action="Result_Connexion.php" method="post" class="formulaire-type-1">
                    <ul>
                        <li>
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" required>
                        </li>
                        <li>
                            <label for="mot_de_passe">Mot de passe :</label>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                        </li>
                        <li>
                            <input class="bouton_2" type="submit" value="Valider">
                        </li>
                        <a href="Formulaire_Inscription.php" class="bouton_3">S'inscrire</a>
                    </ul>
                </form>
            </section>
        </main>

        <?php require_once ('../../composants/footer.php')?>

    </body>
</html>