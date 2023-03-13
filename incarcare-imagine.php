<?php
    session_start();
    include_once "module/modul-functii.php";

    if(! isset($_FILES['imagine']))
    {
        header("Location: travel.php");
        die();
    }

    $erori = [];

    if($_FILES['imagine']['error'] != 0)
        $erori[] = 'Nu s-a incarcat fisier. Ati apasat browse?';
    
    if(Count($erori) == 0)
    {
        if($_FILES['imagine']['size'] > 512 * 1024)
            $erori[] = 'Fișierul este prea mare';
        if(!EsteImagine($_FILES['imagine']['name']))
            $erori[] = 'Fisierul nu este imagine';
    }
    if(! file_exists("imagini/"))
        if(! mkdir("imagini/"))
            $erori[] = "Directorul imagini nu exista";
    if(! is_writable("imagini/"))
        $erori[] = "Directorul imagini nu poate f scris";
    
    if(Count($erori) == 0)
    {
        $destinatie = "imagini/".GenereazaNume($_FILES['imagine']['name']);

        if(! move_uploaded_file($_FILES['imagine']['tmp_name'] , $destinatie))
            $erori[] = 'NU am putut muta fisierul.';
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Imagine nou</title>
    </head>
    <body>
        <div class="container">
            <h1>Incarcare imagine</h1>
            <?php
                if(count($erori) == 0)
                {
                    ?>
                    <div class="alert alert-success">
                        Imaginea s-a încărcat cu succes!
                    </div>
                    <div class="bg-secondary my-5 py-3 text-center">
                        <img src="<?=$destinatie?>" class="img-fluid">
                    </div>
                    <div class="my-5 py-3 text-center">
                        <a href="travel.php" class="btn btn-success">
                            Înapoi la imagini
                        </a>
                    </div>
                    <?php
                }
                else
                {
                    foreach($erori as $E)
                    {
                        ?>
                            <div class="alert alert-danger">
                                <?=$E?>
                            </div>
                        <?php
                    }
                    ?>
                        <div class="my-5 py-3 text-center">
                            <a href="travel.php" class="btn btn-danger">
                                Înapoi la imagini
                            </a>
                        </div>
                    <?php
                }
            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
