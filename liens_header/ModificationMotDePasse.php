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
            <section id="section-parametres">
                <h1>Mot de passe</h1>
                <div class="bloc-type-2">  
                    <form action="Result_ModifMotDePasse.php" method="post" class="#">
                        <ul>
                            <li>
                                <label for="mot_de_passe">Mot de passe :</label>
                                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                            </li>
                        </ul>
                    </form>
                </div>
            </section>
        </main>

        <?php require_once ('../composants/footer.php') ?>
        
    </body>
</html>