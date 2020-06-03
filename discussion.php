<meta charset="UTF-8" /> 
<?php
session_start();

date_default_timezone_set('Europe/Paris');

$db= mysqli_connect("localhost","root","","discussion");

if(!isset($_SESSION["id"])){
    header("Location:index.php");
}

if(isset($_POST['send'])){
    $message=htmlspecialchars($_POST['message']);
    $id_user=$_POST['id_user'];
    $date= date('Y-m-d H:i:s');
   $req_msg=" INSERT INTO `messages`( `message`, `id_utilisateur`, `date`) VALUES ('$message', '$id_user', '$date')";
   mysqli_query($db, $req_msg);
   header("Location: discussion.php");
}
$req_fetch_msg="SELECT *
                FROM utilisateurs 
                LEFT JOIN messages 
                ON utilisateurs.id = messages.id_utilisateur ";
$query_msg= mysqli_query($db, $req_fetch_msg);
$data_msg= mysqli_fetch_all($query_msg, MYSQLI_ASSOC);

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/font/fontello/css/fontello.css">
    <title>Ca discute</title>
</head>
<body>
    <header><?php include("header.php");?></header>

    <main class="main_talk">
    
        <div class="message">
            <?php for($i=0; $i <count($data_msg); $i++){?>
            <div class="msg_content">
                
            <span class="user_info"><?php echo $data_msg[$i]["login"] . " " .$data_msg[$i]["date"]?></span>

            <p><?= $data_msg[$i]["message"]?></p>
            </div>
            <?php }?>  

        </div>
             

        <div class="add_comment">
            <form action="" method="post">
                <input type="hidden" name='id_user' value=<?= $_SESSION["id"]?>>
                <input name='message' placeholder="Votre message ici..." class="add_msg">
                <button type="submit" name='send'>Envoyer</button>
            </form>
        </div>
    </main>

    <footer><?php include("footer.php");?></footer>
    
</body>
</html>