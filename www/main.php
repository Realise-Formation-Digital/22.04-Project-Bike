<?php
$name = $_POST['name'];
$emailAddress = $_POST['emailAddress'];
$message = $_POST['message'];


// Capturer les données transmises

$tableau = [$_POST['name'], $_POST['emailAddress'], $_POST['message']];
  
   
  
 $fp = fopen('file.csv', 'w');
 
 fputcsv($fp, $tableau);

 fclose($fp);


    if ( isset( $_GET['submit'] ) ) {
        /* récupérer les données du formulaire en utilisant 
           la valeur des attributs name comme clé 
        */
        $email = $_GET['Login'];
        $password = $_GET['Password'];

        echo '<h3>Informations récupérées en utilisant GET</h3>'; 
		echo 'Login : ' . $email . ' Password : ' . $password; 
		exit;
    }

    $csvFile = file('users.csv');
    $data = [];
    foreach ($csvFile as $line) {
        $data[] = str_getcsv($line);
        }
        ?>  -->

<?php

$row =1;
    if (($handle = fopen("users.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    

        }
    }
?>