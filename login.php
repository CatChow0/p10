<?php
session_start();

if (isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', 'root');

    $sql = "SELECT * FROM user WHERE email = '$email' ";
    $result = $db->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0)
    {
        $data = $result->fetchAll();
        if (password_verify($pass, $data[0]["password"]))
        {
            $_SESSION['email'] = $email;
            header("Location: index.php");
        }
        else 
        {   
            // ---------------------------------- Renvois sur la page de connexion -------------------------------->
            header("Location: index.php");
        }
    }
    else 
    
    {
        

        // ------------------------------- Ajoute un user dans la base de donnees et chiffre le mot de passe ---------------------------------->
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (email, password) VALUES ('$email', '$pass') ";
        $req = $db->prepare($sql);
        $req->execute();
        header("Location: index.php");
    }

}

?>