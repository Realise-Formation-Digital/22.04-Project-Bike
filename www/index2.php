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

// if($_POST["exampleInputEmail1"] == $_POST["Login"] &&
// $_POST["exampleInputPassword1"] == $_POST["Password"] ){
//     echo("tu es connecté");
// }else{
//     echo("tu n'es pas connecté");
// }
// if($f = fopen("user.csv")){
//     fgetcsv($f, 1000, ",");

// }
$loggedIn = false;
//prendre le fichier csv
$filename = "user.csv";
$f = fopen($filename, 'r');
//écrire dans le fichier csv



if($f){

    $trouve = false;
    
    while($line = fgetcsv($f, 1000, ",")) {

        if ($line[0] == $_POST["Login"] && $line[1] == $_POST["Password"]) {
            $trouve = true;
            
            echo'<pre>';
         print_r("Vous êtes connécté");
        
         echo'</pre>';
         break;
        }
        
       //erreur ne rentre jamais dans le if suivant
       // for($i = 0; $i<count($line); $i++){
           // var_dump($_POST["Login"].",".$_POST["Password"]);
           
           /*
           var_dump("line i =".$line[0]);
           var_dump("line i+1 =".$line[0+1]);
           if($line[$i] == $_POST["Login"] &&
              $line[$i+1] == $_POST["Password"]){
          // if($line[$i] == $_POST["Login"].",".$_POST["Password"]){
        //   if($line == $_POST["Login"].",".$_POST["Password"]){
            // if(strcmp($_POST["exampleInputEmail1"],$_POST["Login"]) &&
            // strcmp($_POST["exampleInputPassword1"],$_POST["Password"])== 0){
              
            die("test1");
               
               $loggedIn = true;
               return print_r("tu es connecté");
           }else{
               
               return print_r("tu n'es pas connecté");
               
           }
           */
       //}
    }

    
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