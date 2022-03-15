<?php
$array=[];
function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo'</pre>';
    return $array;
}






if (isset($_POST["exampleInputEmail1"])) {
    $tableau = [$_POST["exampleInputEmail1"],$_POST["exampleInputPassword1"] ];
    //prendre le fichier csv
    $filename = "./file.csv";
    //écrire dans le fichier csv
    $f = fopen($filename, 'w');
    if ($f === false) {
        die('Error opening the file ' . $filename);
    }
    fputcsv($f, $tableau);
    fclose($f);

}
// if(isset($_Post["exampleInputPassword1"])){
//     $tableau = [$_POST["exampleInputPassword1"], ];
//      //prendre le fichier csv
//      $filename = "./users.csv";
//      //écrire dans le fichier csv
//      $f = fopen($filename, 'w');
//      if ($f === false) {
//          die('Error opening the file ' . $filename);
//      }
//      fputcsv($f, $tableau);
//      fclose($f);
// }

// fputs($f, (chr(0xEF) . chr(0xBB) . chr(0xBF))); // support unicode
//écrire ligne par ligne
//foreach ($array as $row) {
//};
// lire ligne par ligne
/*
while (($row = fgetcsv($f)) !== false) {
	$data[] = $row;
}
// fermer le fichier
fclose($f);
*/