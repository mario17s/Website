<?php
    $pagina = "travel";
    include_once "module/modul-functii.php";

    if(isset($_POST['fisier_de_sters']))
    {

            if(file_exists($_POST['fisier_de_sters']))
            {
                unlink($_POST['fisier_de_sters']);
                MesajAdaugare("Fișierul a fost șters.", 'success');
                header("Location: travel.php");
                die();
            }
            else
            {
                MesajAdaugare("Fișierul nu exista.", 'danger');
                header("Location: travel.php");
                die();
            }
    }
    $fisiere = [];
    $dir = opendir("imagini"); /// resursa
    while($nf = readdir($dir))
    {
        if(! is_dir("imagini/{$nf}") && EsteImagine($nf))
        {
            $fisiere[] = $nf;
        }
    }
    closedir($dir);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/stil.css" rel="stylesheet">
    <title>Scandinavia</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: rgb(88,88,88)">
    
    <?php
        include "module/modul-navigare.php";
    ?>

    <div class="py-1">
       <div class="container">
            <h1 class="display-2 bg-dark text-light text-center mt-2">
                ~ CĂLĂTORII ~
            </h1>
        </div>
    </div>

    <div class="container border border-4 border-light">
        <div class="container text-center text-dark bg-light mt-2 display-4">Galerie Foto</div>
        <div class="container text-center text-light bg-dark py-1 my-2">                      
        <form method="post" action="incarcare-imagine.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <input type="file" name="imagine">
                    </div>
                    <div class="col">
                        <input type="submit" value="Încărcare" class="btn btn-primary">
                    </div>
                </div>
            </form>
            <?php
                
                if(isset($_GET['fis']))
                {
                    if(file_exists($_GET['fis']))
                    {
                        $prev = false;
                        $next = false;
                        foreach($fisiere as $I => $nf)
                            if($nf == basename($_GET['fis']))
                            {
                                if($I > 0)
                                    $prev = $fisiere[$I-1];
                                if($I < count($fisiere) - 1)
                                    $next = $fisiere[$I+1];
                            }
                        ?>
                        <div class="text-center my-5 bg-secondary p-3">
                            <div class="float-end">
                                <div>
                                    <?php
                                        if($prev === false)
                                        {
                                            ?>
                                            <a href="#" disabled class="btn btn-info disabled">
                                                <i class="fas fa-angle-left"></i>
                                            </a>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                                <a href="travel.php?fis=imagini/<?=$prev?>" class="btn btn-info">
                                                    <i class="fas fa-angle-left"></i>
                                                </a>
                                            <?php
                                        }

                                        if($next === false)
                                        {
                                            ?>
                                            <a href="#" disabled class="btn btn-info disabled">
                                                <i class="fas fa-angle-right"></i>
                                            </a>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                                <a href="travel.php?fis=imagini/<?=$next?>" class="btn btn-info">
                                                    <i class="fas fa-angle-right"></i>
                                                </a>
                                            <?php
                                        }
                                    ?>
                                </div>
                                
                                        <form method="post" class="mt-2" onsubmit="return confirm('Sigur ștergeți fișierul:<?=htmlspecialchars($_GET['fis'])?>');">
                                            <input type="hidden" name="fisier_de_sters" value="<?=htmlspecialchars($_GET['fis'])?>">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                                Ștergere
                                            </button>
                                        </form>
                                       
                            </div>
                            <img class="img-fluid" src="<?=htmlspecialchars($_GET['fis'])?>">
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="alert alert-warning">
                            Fisierul nu exista.
                        </div>
                        <?php
                    }
                }
            ?>
            <div class="row">
            <?php
                foreach($fisiere as $nf)
                {
                    ?>
                        <div class="col-6 col-md-4">
                            <a href="travel.php?fis=imagini/<?=htmlspecialchars($nf)?>">
                                <img src="imagini/<?=htmlspecialchars($nf)?>" class="img-fluid my-3">
                            </a>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>