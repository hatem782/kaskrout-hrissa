<?php

// from html  ;  getting informations from html

$cin = $_POST['cin'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$pays = $_POST['pays'];






// here is the connection

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "ehealth";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);



if (mysqli_connect_error()) {

    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

   } 
   else 
   {
     // insert statements 

    $insert = "INSERT INTO `client` (`cin`, `nom`, `prenom`, `email`, `city`) VALUES ('$cin' , '$nom', '$prenom' , '$email' , '$pays')";
   
    if (mysqli_query($conn, $insert)) {
        //echo "New account has been added successfully !";
        session_start();
        $_SESSION['cin']=$cin;
        $_SESSION['nom']=$nom;
        $_SESSION['pnom']=$prenom;
        $_SESSION['email']=$email;
        $_SESSION['pays']=$pays;
        
        include 'pagedocmed.html';

     } else {
        echo "information is used in another account";
     }
     mysqli_close($conn);

}
      
      
   

   



?>