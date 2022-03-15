<?php
function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo'</pre>';
}





//prendre le fichier csv
$filename = "users.csv";
//écrire dans le fichier csv
$f = fopen($filename, 'w');
if ($f === false) {
	die('Error opening the file ' . $filename);
}
fputs($f, (chr(0xEF) . chr(0xBB) . chr(0xBF))); // support unicode
//écrire ligne par ligne
foreach ($array as $row) {
	fputcsv($f, $row);
};
// fermer le fichier
fclose($f);