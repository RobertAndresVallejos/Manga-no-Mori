<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ventes</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/png" href="../img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('../composants/header.php') ?>

        <main>
            <section id="section-ventes">
                <h1>Ventes</h1>
                <div class="bloc-type-1">
                    <h2>1. 📝 Le Processus de Commande</h2>
                    <ul>
                        <li>Validation : Après avoir rempli votre panier, la commande est validée après paiement et vous recevez immédiatement une confirmation par e-mail.</li>
                        <li>Annulation : Si vous changez d'avis, vous pouvez annuler votre commande via votre espace client tant qu'elle n'a pas le statut "En préparation" (généralement dans les 2 heures suivant l'achat).</li>
                    </ul>
                    <h2>2. 💳 Prix et Modalités de Paiement</h2>
                    <ul>
                        <li>Prix Affichés : Tous les prix sur Manga no Mori sont indiqués en Euros (€) et sont TTC (Toutes Taxes Comprises), incluant donc la TVA applicable.</li>
                        <li>Paiement Sécurisé : Nous acceptons Apple Pay, Visa, Mastercard et PayPal. Toutes les transactions sont entièrement sécurisées via un protocole chiffré.</li>
                    </ul>
                    <h2>3. ⚖️ Garanties et Retours</h2>
                    <ul>
                        <li>Droit de Rétractation : Conformément à la loi, vous disposez d'un délai légal de 14 jours pour vous rétracter à compter de la réception de votre colis.</li>
                        <li>Condition des Articles : Les mangas neufs doivent être retournés scellés et dans leur emballage d'origine. Les mangas d'occasion font l'objet d'une description précise sur leur fiche produit, et le retour est possible si l'état ne correspond pas à cette description.</li>
                    </ul>
                </div>
            </section>
        </main>

        <?php require_once ('../composants/footer.php')?>

    </body>
</html>