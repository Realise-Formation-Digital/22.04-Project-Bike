<?php
$name = $_POST['name'];
$emailAddress = $_POST['emailAddress'];
$message = $_POST['message'];


// Capturer les données transmises

$tableau = [$_POST['name'], $_POST['emailAddress'], $_POST['message']];
  
   
  
 $fp = fopen('file.csv', 'w');
 
 fputcsv($fp, $tableau);

 fclose($fp);

?>