<?php

$array=[];
$inscriptionFullFilled = false;
function pre_r($array){
    //  if($inscriptionFullFilled == true){
        // echo'<pre>';
        print_r("Votre inscription a été confirmée");
        
        // echo'</pre>';
    // }
    return $array;
}






if (isset($_POST["exampleInputEmail1"])) {
    $tableau = [$_POST["exampleInputEmail1"],$_POST["exampleInputPassword1"] ];
    
    //prendre le fichier csv
    $filename = "./user.csv";
    //écrire dans le fichier csv
    $f = fopen($filename, 'w');
    if ($f === false) {
        die('Error opening the file ' . $filename);
    }
    $inscriptionFullFilled = true;
    fputcsv($f, $tableau);
    fclose($f);

}
$name = $_POST['name'];
$emailAddress = $_POST['emailAddress'];
$message = $_POST['message'];


// Capturer les données transmises

$tableau = [$_POST['name'], $_POST['emailAddress'], $_POST['message']];



 $fp = fopen('file.csv', 'w');
 
 fputcsv($fp, $tableau);

 fclose($fp);

 ?>