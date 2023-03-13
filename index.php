<?php
    session_start();
    $pagina = "index";

    $link = mysqli_connect("localhost", "root", "", "scandi");
    if(! $link)
    {
        die("Conexiune imposibila!");
    }

    if(isset($_POST['operatie']) && $_POST['operatie'] == 'adaugare')
    {
        $q = "INSERT INTO destinatii(nume, oras, tara, nr_zile) VALUES(
            '{$_POST['nume']}', '{$_POST['oras']}', '{$_POST['tara']}', '{$_POST['nr_zile']}'
        )";
        mysqli_query($link, $q);
        header("Location: ./");
        die();
    }

    if(isset($_POST['operatie']) && $_POST['operatie'] == 'editare')
    {
        $q = "UPDATE destinatii SET nume='{$_POST['nume']}', oras='{$_POST['oras']}',
        tara='{$_POST['tara']}', nr_zile='{$_POST['nr_zile']}' WHERE id={$_POST['id']}";
        mysqli_query($link, $q);
        header("Location: ./");
        die();
    }

    if(isset($_POST['operatie']) && $_POST['operatie'] == 'stergere')
    {
        $q = "DELETE FROM destinatii WHERE id={$_POST['id']}";
        mysqli_query($link, $q);
        header("Location: ./");
        die();
    }

    $dest = [];
    $rez = mysqli_query($link, "SELECT * FROM destinatii ORDER BY nume");
    while($L = mysqli_fetch_assoc($rez))
      $dest[] = $L;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Scandinavia</title>
</head>
<body style="background-color: rgb(88,88,88)">
    
    <?php
        include "modul-navigare.php";
    ?>
    
    <div class="bg-dark py-1">
        <div class="container">
            <h1 class="display-2 text-light text-center">
                ~ SCANDINAVIA ~
            </h1>
        </div>
    </div>

    <div class="bg-secondary text-center">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/car-1.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/car-2.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/car-3.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/car-4.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/car-5.jpg">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="bg-dark py-1">
        <div class="bg-secondary text-light m-2 mb-4">
            <p class="m-1">Scandinavia este regiunea culturală și istorică a Peninsulei Scandinave.</p>
        </div>
        <div class="bg-secondary text-light m-2 mb-4">
            <p class="m-1">În Scandinavia se vorbesc limbi germanice de nord: suedeză, norvegiană și
            daneză, limbi care se înrudesc între ele și pot fi înțelese reciproc. Sunt
            înrudite și cu islandeza și feroeza, care însă nu se înțeleg reciproc.</p>
        </div>
        <div class="bg-secondary text-light m-2 mb-4">
            <p class="m-1">Folosirea termenului modern „Scandinavia” derivă de la mișcarea politică
            scandinavistă, activă la mijlocul secolului al XIX-lea, care urmărea unirea
            Danemarcei, Suediei și Norvegiei într-un singur regat unit. Sfârșitul acestei
            mișcări politice a venit în 1864, atunci când Suedia-Norvegia a refuzat să-i 
            acorde Danemarcei sprijin în războiul cu Prusia.</p>
        </div>
        <div class="bg-secondary text-light m-2">
            <p class="m-1">Chiar dacă uniunea politică nu s-a realizat niciodată, în 1873 a luat ființă
            Uniunea Monetară Scandinavă, având coroana drept monedă unică; aceasta
            a funcționat până la Primul Război Mondial.</p>
        </div>
    </div>
    <div class="bg-secondary">
            <div class="container text-center">
                <img class="m-2" src="img/harta.jpg">
            </div>
    </div>
    <div class="bg-dark display-6 text-light text-center">State principale</div>
    <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">Nr.Crt.</th>
                <th scope="col">Țara</th>
                <th scope="col">Capitală</th>
                <th scope="col">Populație</th>
                <th scope="col">Suprafață</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Norvegia</td>
                <td>Oslo</td>
                <td>5.109.056</td>
                <td>385.186 km<sup>2</sup></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Suedia</td>
                <td>Stockholm</td>
                <td>9.745.355</td>
                <td>450.295 km<sup>2</sup></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Finlanda</td>
                <td>Helsinki</td>
                <td>5.472.971</td>
                <td>338.424 km<sup>2</sup></td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Danemarca</td>
                <td>Copenhaga</td>
                <td>5.659.715</td>
                <td>42.916 km<sup>2</sup></td>
                </tr>
            </tbody>
    </table>
    <div class="container border border-4 border-light mt-4">
        <div class="container text-center text-dark bg-light mt-2 py-2 display-4">Evidența călătoriilor</div>
        <div class="container text-center text-light bg-dark py-1 my-2">  
        <a href="./?operatie=adaugare" class="btn btn-success my-3">Adăugare destinație</a>

<?php
    if(isset($_GET['operatie']) && $_GET['operatie'] == 'adaugare')
    {
        ?>
        <div class="container border border-success border border-3 my-4">
            <h3>Adaugare destinatie</h3>
            <form method="post">
                <input type="hidden" name="operatie" value="adaugare">
                <div class="mb-3">
                    <label for="nume">Nume</label>
                    <input name="nume" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="oras">Oraș</label>
                    <input name="oras" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tara">Țara</label>
                    <input name="tara" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nr_zile">Nr. zile petrecute</label>
                    <input name="nr_zile" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
        <?php
    }

    if(isset($_GET['operatie']) && $_GET['operatie'] == 'editare')
    {
        $q = "SELECT * FROM destinatii WHERE id={$_GET['id']}";
        $rez = mysqli_query($link, $q);
        $destinatie = mysqli_fetch_assoc($rez);
        ?>
        <div class="container border border-warning border border-3 my-4">
            <h3>Modificare</h3>
            <form method="post">
                <input type="hidden" name="operatie" value="editare">
                <input type="hidden" name="id" value="<?=$destinatie['id']?>">
                <div class="mb-3">
                    <label for="nume">Nume</label>
                    <input name="nume" class="form-control" value="<?=$destinatie['nume']?>">
                </div>
                <div class="mb-3">
                    <label for="oras">Oraș</label>
                    <input name="oras" class="form-control" value="<?=$destinatie['oras']?>">
                </div>
                <div class="mb-3">
                    <label for="tara">Țara</label>
                    <input name="tara" class="form-control" value="<?=$destinatie['tara']?>">
                </div>
                <div class="mb-3">
                    <label for="nr_zile">Nr. zile petrecute</label>
                    <input name="nr_zile" class="form-control" value="<?=$destinatie['nr_zile']?>">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-warning" value="Salveaza">
                </div>
            </form>
        </div>
        <?php
    }

    if(isset($_GET['operatie']) && $_GET['operatie'] == 'stergere')
    {
        $q = "SELECT * FROM destinatii WHERE id={$_GET['id']}";
        $rez = mysqli_query($link, $q);
        $destinatie = mysqli_fetch_assoc($rez);
        ?>
        <div class="container border border-warning border border-3 my-4">
            <h3>Stergere</h3>
            <form method="post">
                <input type="hidden" name="operatie" value="stergere">
                <input type="hidden" name="id" value="<?=$destinatie['id']?>">
                <div class="mb-3 alert alert-warning">
                    Sigur vrei să ștergi destinația <?=$destinatie['nume']?> ???
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-danger" value="Sterge">
                </div>
            </form>
        </div>
        <?php
    }
?>

<h2>Listă destinații</h2>
<table class="table text-light">
    <tr>
        <td>Nr.crt.</td>
        <td>Nume</td>
        <td>Oraș</td>
        <td>Țara</td>
        <td>Nr. zile petrecute</td>
        <td>Operații</td>
    </tr>
    <?php
        $cnt = 0;
        foreach($dest as $d)
        {
            $cnt++;
            ?>
            <tr>
                <td><?=$cnt?></td>
                <td><?=$d['nume']?></td>
                <td><?=$d['oras']?></td>
                <td><?=$d['tara']?></td>
                <td><?=$d['nr_zile']?></td>
                <td>
                    <a href="./?operatie=editare&id=<?=$d['id']?>" class="btn btn-info">Modificare</a>
                    <a href="./?operatie=stergere&id=<?=$d['id']?>" class="btn btn-danger">Ștergere</a>
                </td>
            </tr>
            <?php
        }
    ?>
</table>
</div>
</div>
    <?php
        include "module/modul-footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
