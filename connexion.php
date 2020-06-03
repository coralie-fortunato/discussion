<?php
session_start();
$db= mysqli_connect("localhost","root","","discussion");
$error=null;

if(isset($_POST["valider"])){
    $login=htmlentities($_POST["login"]);
    $password= htmlentities($_POST["password"]);
    if(!empty($login) && !empty($password)){

        $req_connect= "SELECT * FROM `utilisateurs` WHERE `login` = '$login' " ;
        $query_connect = mysqli_query($db,$req_connect);
        $data_users = mysqli_fetch_all($query_connect);
   
        if(count($data_users) == 0)
        {
            $error="Login ou mot de passe incorrect";
        }
        elseif(password_verify($password, $data_users[0][2]))
        {
            session_start();
            
            $req_id= "SELECT id FROM `utilisateurs` WHERE `login` = '$login'";
            $query_id = mysqli_query($db,$req_id);
            $id_users = mysqli_fetch_assoc($query_id);
            $_SESSION["login"]= $login;
            $_SESSION["id"]=$id_users['id'];
        
            header("Location: index.php");
        }
        else
        {
            $error="Login ou mot de passe incorrect";
        }

    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/font/fontello/css/fontello.css">
    <title>Connectez vous</title>
</head>
<body>
    <header><?php include("header.php");?></header>
    <main class="main_connect">
        <div class="box">
            <h1>Se connecter</h1>

            <?php if($error): ?>
            <div class="error">
            <p><?=  $error ?></p>
            </div>
            <?php endif; ?>

            <form action="" method="POST">
                
                <input name="login" type="text" placeholder="Votre login" id="login">
              
              
                <input type="password" name="password" placeholder="Mot de passe" id="password">
                
                <button type="submit" name="valider">Valider</button>
            </form>
        </div>
    </main>
    
</body>
</html>
