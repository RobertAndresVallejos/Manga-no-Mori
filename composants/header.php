<header>
    <a class="header_lien_gauche" href="/liens_header/Accueil.php">
        <img src="/img/logo/manganomori/1.png" alt="logo_manganomori_1"/>
    </a>
    <nav class="header_liens_central">
        <ul>
            <li><a href="/liens_header/Mangas.php">Mangas</a></li>
            <li><a href="/liens_header/MangasNeufs.php">Mangas neufs</a></li>
            <li><a href="/liens_header/MangasDOccasions.php">Mangas d'occasions</a></li>
        </ul>
    </nav>
    <nav class="header_liens_droite">
        <ul>
            <li><a href="/liens_header/Panier.php"><img src="/img/logo/panier-compte/panier.png" alt="logo_panier"></a></li>
            
            <?php 
                if(isset($_SESSION["email"])){
                    if(isset($_SESSION["role"]) === "admin"){
                    echo '<li><a href="/admin/admin.php"><img src="/img/logo/panier-compte/admin.png" alt="logo_admin"></a></li>';
                }

                echo '<li><a href="/liens_header/inscription_connexion/Deconnexion.php"><img src="/img/logo/panier-compte/deconnexion.png" alt="logo_deconnexion"></a></li>';

                }else{
                    echo '<li><a href="/liens_header/inscription_connexion/Formulaire_Connexion.php"><img src="/img/logo/panier-compte/utilisateur.png" alt="logo_utilisateur"></a></li>';
                }
            ?>
        </ul>
    </nav>
</header>