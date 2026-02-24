<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Result_ModifMotDePasse</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" type="image/png" href="../../img/logo/manganomori/2.png">
</head>

<body>

    <?php require_once('../../composants/header.php') ?>

    <main>
        <?php

            require_once('../../Database.php');

            //récupération des variables du formulaire
            $ancien_mot_de_passe = $_POST['ancien_mot_de_passe'];
            $nouveau_mot_de_passe = $_POST['nouveau_mot_de_passe'];
            $confirmation_nouveau_mot_de_passe = $_POST['confirmation_nouveau_mot_de_passe'];

            //récupération de l'id de la session
            $id = $_SESSION['id'];

            //vérification de présence
            if(empty($ancien_mot_de_passe) || empty($nouveau_mot_de_passe) || empty($confirmation_nouveau_mot_de_passe)){
                header('Location: Formulaire_Modification_MotDePasse.php');
            }

            //initialisation d'une requête SQL
            $request = $pdo->prepare('SELECT mot_de_passe FROM utilisateur WHERE id = :id');
            //liaisons de requêtes avec bindParam
            $request->bindParam(':id', $id);
            //exécution de la requête et envoi de données à la BDD
            $request->execute();

            //récuération du résultat sous la forme d'un tableau
            $result = $request->fetchAll();

            //vérification des données pour la modification de mot de passe
            //mot_de_passe en BDD = nouveau_mot_de_passe saisie dans le formulaire ?
            if(count($result) > 0 && password_verify($ancien_mot_de_passe, $result[0]["mot_de_passe"])){
                //nouveau_mot_de_passe = confirmation_nouveau_mot_de_passe ?
                if($nouveau_mot_de_passe !== $confirmation_nouveau_mot_de_passe){
                    echo "Les mots de passe ne correspondent pas.";
                }else{
                    $nouveau_mot_de_passe_hache = password_hash($nouveau_mot_de_passe, PASSWORD_DEFAULT);

                    //insertion dans la BDD
                    try{
                        //initialisation d'une requête SQL
                        $request = $pdo->prepare('UPDATE utilisateur SET mot_de_passe = :nouveau_mot_de_passe WHERE id = :id');
                        //liaisons de requêtes avec bindParam
                        $request->bindParam(':id', $id);
                        $request->bindParam(':nouveau_mot_de_passe', $nouveau_mot_de_passe_hache);
                        //exécution de la requête et envoi de données à la BDD
                        $request->execute();

                        //vérification de la présence des données dans la BDD
                        if($request->rowCount() === 1){
                            echo "Le nouveau mot de passe a été ajouté avec succès";
                            header('Location: ../Accueil.php');
                            // header('refresh:3;url=../Accueil.php');
                            exit;
                        }else{
                            echo "Une erreur est survenue lors de l'ajout du mot de passe";
                        }
                    }catch(PDOException $e){
                        echo "Échec de la connexion :" . $e->getMessage();
                    }
                }
            }else{
                echo "Mot de passe incorrect.";
            }

        ?>
    </main>

    <section>

    </section>

    <?php require_once('../../composants/footer.php') ?>

</body>

</html>