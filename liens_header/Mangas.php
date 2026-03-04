<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mangas</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/png" href="../img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('../composants/header.php') ?>

        <main>
            <section id="section-mangas">
                <h1>Mangas</h1>
                <div class="tableau_mangas">
                    <h2>Nos mangas :</h2>
                </div>
            </section>
        </main>

        <?php require_once ('../composants/footer.php') ?>
        
    </body>
</html>

<!-- 
id
titre
auteur
dessinateur
genre
tomes_possedes (nbr de volumes dans le stock)
tomes_total (nombre de tomes existant)
prix
image
statut
-->

<!-- 
Shonen :
Assassination Classroom
Bleach 
Captain Tsubasa 
Dragon Ball 
Eyeshield 21 
Fairy Tail 
Gintama 
Hunter x Hunter 
Inuyasha 
Jujutsu Kaisen 
Kuroko's Basket 
Love Hina
My Hero Academia 
Naruto 
One Piece 
Promised Neverland 
Quintessential Quintuplets 
Radiant 
Slam Dunk 
Toriko 
Undead Unluck 
Valkyrie Apocalypse 
World Trigger 
X-Blade 
Yu-Gi-Oh! 
Zatch Bell!

Seinen:
Akira
Berserk 
Code Geass 
Dorohedoro 
Erased 
Fire Punch 
Gantz 
Hellsing 
Innocent 
Jojo's Bizarre Adventure 
Kingdom 
L'Attaque des Titans 
Mushishi 
Nana 
Oyasumi Punpun 
Pluto 
Q (Ku) 
Real 
Steins;Gate 
Tokyo Ghoul 
Uzumaki 
Vinland Saga 
Wolf Guy 
X 
Young GTO 
Zetman
-->