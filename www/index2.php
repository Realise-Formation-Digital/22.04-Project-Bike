<?php
$inscriptionFullFilled = false;
$array=[];

function pre_r($array, $inscriptionOK){
    // 
    if($inscriptionOK == true){
         echo'<pre>';
        print_r("Votre inscription a été confirmée");
        
         echo'</pre>';
     }else{
        echo'<pre>';
        print_r("Veuillez vous inscrire je vous prie");
        
         echo'</pre>';
     }
    return $array;
}



// var_dump($_POST);


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
// if($_POST["exampleInputEmail1"] == $_POST["Login"] &&
// $_POST["exampleInputPassword1"] == $_POST["Password"] ){
//     echo("tu es connecté");
// }else{
//     echo("tu n'es pas connecté");
// }

$name = $_POST['name'];
$emailAddress = $_POST['emailAddress'];
$message = $_POST['message'];


// Capturer les données transmises

$tableau = [$_POST['name'], $_POST['emailAddress'], $_POST['message']];



 $fp = fopen('file.csv', 'w');
 
 fputcsv($fp, $tableau);

 fclose($fp);

 ?>