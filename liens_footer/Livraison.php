<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Livraison</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/png" href="../img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('../composants/header.php') ?>

        <main>
            <section id="section-livraison">
                <h1>Livraison</h1>
                <div class="bloc-type-1">
                    <h2>1. 📦 Modes et Délais de Livraison</h2>
                    <ul>
                        <li>Texte d'introduction: Chez Manga no Mori, nous veillons à ce que vos mangas soient emballés avec soin et expédiés dans les plus brefs délais. Voici tout ce que vous devez savoir sur la réception de votre commande.</li>
                    </ul>
                    <h2>2. ⏱️ Préparation et Délais</h2>
                    <ul>
                        <li>Délai de Préparation: Votre commande est traitée, préparée et expédiée sous 24 à 48 heures (jours ouvrés).</li>
                        <li>Délai de Transport: Une fois expédiée, la livraison standard prend généralement 2 à 5 jours ouvrés pour arriver à destination.</li>
                    </ul>
                    <h2>3. 💸 Frais de Port et Gratuité</h2>
                    <ul>
                        <li>Livraison Offerte: La livraison est GRATUITE pour toutes les commandes supérieures à 50 € d'achat.</li>
                        <li>Coûts Standards: Pour les commandes inférieures à ce montant, les frais de port commencent à partir de 4,90 €.</li>
                    </ul>
                    <h2>4. 🚚 Nos Transporteurs et Suivi</h2>
                    <ul>
                        <li>Options de Transport: Nous travaillons avec des partenaires de confiance comme Colissimo (La Poste) et Mondial Relay pour vous offrir le choix entre la livraison à domicile et en point relais.</li>
                        <li>Suivi de Colis: Un numéro de suivi vous sera communiqué par email dès l'expédition pour que vous puissiez suivre l'acheminement de votre colis en temps réel.</li>
                    </ul>
                </div>
            </section>
        </main>
        
        <?php require_once ('../composants/footer.php') ?>

    </body>
</html>