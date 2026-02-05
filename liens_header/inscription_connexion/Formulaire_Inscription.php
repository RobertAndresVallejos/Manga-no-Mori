<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" type="image/png" href="../../img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('../../composants/header.php') ?>

        <main>
            <section id="section_formulaire_inscription">
                <h1>Inscription</h1>
                <form action="Result_Inscription.php" method="post" class="formulaire_inscription">
                    <ul>
                        <li>
                            <label for="nom">Nom :</label>
                            <input type="text" id="nom" name="nom" required>
                        </li>
                        <li>
                            <label for="prenom">Prénom :</label>
                            <input type="text" id="prenom" name="prenom" required>
                        </li>
                        <li>
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" required>
                        </li>
                        <li>
                            <label for="mot_de_passe">Mot de passe :</label>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                        </li>
                        <li>
                            <label for="confirmation_mot_de_passe">Confirmation du mot de passe :</label>
                            <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" required>
                        </li>
                        <li>
                            <input class="bouton_2" type="submit" value="Valider">
                        </li>
                        <a href="Formulaire_Connexion.php" class="bouton_3">Se connecter</a>
                    </ul>
                </form>
            </section>
        </main>

        <?php require_once ('../../composants/footer.php')?>

    </body>
</html>