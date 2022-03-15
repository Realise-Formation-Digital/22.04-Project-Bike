<?php
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
        ?>