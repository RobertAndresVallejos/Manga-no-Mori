<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Modification de mot de passe</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/png" href="../img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('../composants/header.php') ?>

        <main>
            <section id="section-formulaire-type-1">
                <h1>Mot de passe</h1>
                    <form action="inscription_connexion/Result_ModifMotDePasse.php" method="post" class="formulaire-type-1">
                        <ul>
                            <li>
                                <label for="ancien_mot_de_passe">Ancien mot de passe :</label>
                                <input type="password" id="ancien_mot_de_passe" name="ancien_mot_de_passe" required>
                            </li>
                            <li>
                                <label for="nouveau_mot_de_passe">Nouveau mot de passe :</label>
                                <input type="password" id="nouveau_mot_de_passe" name="nouveau_mot_de_passe" required>
                            </li>
                            <li>
                                <label for="confirmation_nouveau_mot_de_passe">Confirmation du nouveau mot de passe :</label>
                                <input type="password" id="confirmation_nouveau_mot_de_passe" name="confirmation_nouveau_mot_de_passe" required>
                            </li>
                            <li>
                                <input class="bouton_2" type="submit" value="Valider">
                            </li>
                            <li>
                                <a href="Parametres.php" class="bouton_3">Retour</a>
                            </li>
                        </ul>
                    </form>
            </section>
        </main>

        <?php require_once ('../composants/footer.php') ?>
        
    </body>
</html>