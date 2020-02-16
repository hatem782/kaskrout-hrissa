<?php

// from html  ;  getting informations from html

$cin = $_POST['cin'];


$email = $_POST['email'];







// here is the connection
session_start();

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

     $sql = "SELECT * FROM `client` WHERE `cin`='$cin' and email = '$email' ;";
     $result = mysqli_query($conn, $sql);
     
     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         
         while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['cin']=$cin;
           
         
            $_SESSION['email']=$email;
           
            
        }
        include 'pagedocmed.html';
         
         }
     else {
        echo "cin or email is wrong!";
     }
}

      
   

   



?>