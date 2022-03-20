<?php
$inscriptionFullFilled = false;
$array=[];

function pre_r($array, $inscriptionOK){
    // 
    if($inscriptionOK == true){
         echo'<pre>';
        print_r("Votre inscription a été confirmée");
        
         echo'</pre>';
     }else if($inscriptionOK == false){
        echo'<pre>';
        print_r("Veuillez vous inscrire je vous prie");
        
         echo'</pre>';
     }
    return $array;
}




if (isset($_POST["exampleInputEmail1"])) {
    $tableau = [$_POST["exampleInputEmail1"],$_POST["exampleInputPassword1"] ];
    //prendre le fichier csv
    $filename = "user.csv";
    //écrire dans le fichier csv
    $f = fopen($filename, 'a');
    if ($f === false) {
        die('Error opening the file ' . $filename);
    }
    fputcsv($f, $tableau);
    fclose($f);

    //as tu rempli le formulaire d'enregistrement ?
    if (isset($_POST["exampleInputEmail1"]) &&
        isset($_POST["exampleInputPassword1"])) {
        $inscriptionFullFilled = true;
    }

}




// les données du formulaire d'authentification corrrespondent-elle 
// aux données du formulaire d'enregistrement ?

$loggedIn = false;
//prendre le fichier csv
$filename = "user.csv";
$f = fopen($filename, 'r');

if($f){

    $trouve = false;
    
    while($line = fgetcsv($f, 1000, ",")) {

        if ($line[0] == $_POST["Login"] && $line[1] == $_POST["Password"]) {
            $trouve = true;

            
        }
        
    }

    if ($trouve) {
        session_start();
        $_SESSION['Login'] = $_POST["Login"];
        header ('location: espace-membre.php');
        exit();
    }
    
}

$name = $_POST['name'];
$emailAddress = $_POST['emailAddress'];
$message = $_POST['message'];


// Capturer les données transmises : formulaire de contact


if (!isset($_POST['name']) || !isset($_POST['emailAddress']) || !isset($_POST['message']) ||
    empty($_POST['name']) || empty($_POST['emailAddress']) ||  empty($_POST['message'])) { 
    $erreur = "Tous les champs doivent être complétés !";
}
else {
    $tableau = [$_POST['name'], $_POST['emailAddress'], $_POST['message']];

    $fp = fopen('file.csv', 'a');
 
    fputcsv($fp, $tableau);

    fclose($fp);

    $confirmation = "Merci pour votre saisie";
}



//fin du formulaire de contact


//début page membre, affichage file.csv


    $tableau2 = [];

            if ($handle = fopen("file.csv", "r")) {
                while ($data = fgetcsv($handle, 1000)) {
                    $tableau2[] = $data;
                }
            }

            //fin page membre
?>
