<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Result</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" type="image/png" href="../../img/logo/manganomori/2.png">
</head>

<body>

    <?php require_once('../../composants/header.php') ?>

    <main>
        <?php
        
            require_once('../../Database.php');

            //récupération des variables depuis le formulaire
            $email = $_POST['email'];
            $mot_de_passe = $_POST['mot_de_passe'];

            //initialisation d'une requête SQL
            $request = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
            //liaisons de requêtes avec bindParam
            $request->bindParam(':email', $email);
            //exécution de la requête et envoi de données à la BDD
            $request->execute();
            
            //récupération du résultat sous la forme d'un tableau
            $result = $request->fetchAll();

            //vérification des données pour la connexion
            if(count($result) > 0 && password_verify($mot_de_passe, $result[0]["mot_de_passe"])){
                $_SESSION["id"] = $result[0]["id"];
                $_SESSION["role"] = $result[0]["role"];    
                $_SESSION["nom"] = $result[0]["nom"]; 
                $_SESSION["prenom"] = $result[0]["prenom"];
                $_SESSION["email"] = $email;
                header('Location: ../Accueil.php');
                exit;
            }else{
                echo "Email ou mot de passe incorrect.";
            }

        ?>
    </main>

    <section>

    </section>

    <?php require_once('../../composants/footer.php') ?>

</body>

</html>