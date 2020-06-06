<h1>Mon Blog</h1>
<nav>
    
    <ul >
        <li class="icon_menu">
        <ul class="menu" id="submenu">
             <?php if(isset($_SESSION["login"])):?>

             <li><span class="hello_user">Bonjour <?= $_SESSION["login"] ?></span> </li>
             
            <?php endif?>
            <?php
            
            $page= $_SERVER['PHP_SELF'];

            if($page!=='/discussion/index.php'):?>
            <li><a href="index.php">Accueil</a></li>
            <?php endif?>
          
            <li><a href="discussion.php">Chat</a></li>
            <?php if(isset($_SESSION["login"])):?>
                
            <li><a href="profil.php">Profil</a></li>
            
            <li><a href="logout.php">Se déconnecter</a></li>
            <?php endif?>
            <?php if(!isset($_SESSION["login"])):?>
            <li><a href="connexion.php">Se connecter</a></li>
            <li><a href="inscription.php">S'inscrire</a></li>
            <?php endif?>
        </ul>
        </li>
                
          
    </ul>
    
    
    
    
    
</nav>