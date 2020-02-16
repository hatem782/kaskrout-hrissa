<?
// here is the connection
session_start();
// $_POST["sikness"]=$sick;
$sick='Flu';

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
       if ($sick='stress' || $sick='depression' || $sick='anxiety' ){
        $sql = "SELECT * FROM `client` WHERE city=' $_SESSION['pays'] ' and specialty='Psychologist' ;";}
        else{        $sql = "SELECT * FROM `client` WHERE city=' $_SESSION['pays'] ' and specialty='Generalist';";}
    }
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result)>0) {
        echo('this is the list of doctors in you city that can help you: <br>');
        while($row = mysqli_fetch_assoc($result)) {
            echo('name:'.$row['nom_docteur'].' '.$row['prenom_docteur'].'<br>');
            echo("adresse:".$row['adresse'].'<br>');}
            else{echo 'we cant find any doctors in your city';}


   }

?>