


  <?php
  session_start();
  session_unset();
  session_destroy();
  if (!isset($_session['login'])) {header ('location: index.php'); 
  exit();}
include ("index2.php");
//pre_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Bienvenue dans l'espace privÃ© !</h1>
                
            
                                                                <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Consulter le formulaire de contact
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Boite de reception</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                                <table class="table">
                                                    <?php 
                                                    // $tableau2 = [];
                                                    // if (($handle = fopen("file.csv", "r")) !== FALSE) {
                                                    //     while (($data = fgetcsv($handle, 1000)) !== FALSE) {
                                                    //         $tableau2[] = $data;            
                                                    //     }
                                                    // }
                                                    foreach($tableau2 as $data) { ?>
                                                        <tr>
                                                            <td>
                                                               <?php echo $data[0] ?>
                                                            </td>
                                                            <td>
                                                               <?php echo $data[1] ?>
                                                            </td>
                                                            <td>
                                                               <?php echo $data[2] ?>
                                                            </td>   
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                                
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>


            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>