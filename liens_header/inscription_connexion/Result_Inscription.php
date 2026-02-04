<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Result_Inscription</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" type="image/png" href="../../img/logo/manganomori/2.png">
</head>

<body>

    <?php require_once('../../composants/header.php') ?>

    <main>
        <?php

            require_once('../../Database.php');

            //récupération des variables
            $email = $_POST['email'];
            $mot_de_passe = $_POST['mot_de_passe'];
            $confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'];

            //vérification de présence
            if(empty($email) || empty($mot_de_passe) || empty($confirmation_mot_de_passe)){
                header('Location: Formulaire_Inscription.php');
                exit;
            }

            //vérification de la confimation du mot de passe
            if($mot_de_passe !== $confirmation_mot_de_passe){
                echo "Les mots de passe ne correspondent pas.";
            }else{
                $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

                //Insertion dans la BDD
                try{
                    //initialisation d'une requête SQL
                    $request = $pdo->prepare('INSERT INTO utilisateur (email, mot_de_passe) VALUES (:email, :mot_de_passe)');
                    //liaisons de requêtes avec bindParam
                    $request->bindParam(':email', $email);
                    $request->bindParam(':mot_de_passe', $mot_de_passe_hache);
                    //exécution de la requête et envoi de données à la BDD
                    $request->execute();

                    //vérification de la présence des données dans la BDD
                    if($request->rowCount() === 1){
                        echo "L'utilisateur a été ajouté avec succès.";
                    }else{
                        echo "Une erreur est survenue lors de l'ajout de l'utilisateur";
                    }
                } catch(PDOException $e){
                    echo "Échec de la connexion : " . $e->getMessage();
                }
            }

        ?>
    </main>

    <section>

    </section>

    <?php require_once('../../composants/footer.php') ?>

</body>

</html>