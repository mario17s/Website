<?php
    $pagina = "norvegia";
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
    <link href="stiluri.css" rel="stylesheet">
    <script defer src="scripturi/norv-script.js"></script>
</head>
<body style="background-color: rgb(170, 189, 224);">
    
    <?php
        include "module/modul-navigare.php";
    ?>

    <div class="py-1">
       <div class="container">
            <h1 class="display-2 bg-dark text-info text-center mt-2">
                ~ NORVEGIA ~
            </h1>
    </div>
    </div>
    <div class="bg-secondary">
        <div class="container text-center">
            <img class="m-2" src="img/harta-norvegia.jpg">
        </div>
    </div>

    <div class="container border border-4 border-info">
        <div class="container text-center text-dark bg-info mt-2">INFORMAȚII</div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Norvegia, oficial Regatul Norvegiei, este un stat suveran și 
            unitar, guvernat ca o monarhie, al cărui teritoriu cuprinde partea de vest a
             Peninsulei Scandinave, plus insula Jan Mayen și arhipelagul Svalbard. Norvegia 
             revendică și o secțiune din Antarctica, cunoscută sub numele de Țara Reginei Maud.
            Până în 1814, Regatul cuprindea și Insulele Feroe (din 1035), Groenlanda (1261) și 
            Islanda (1262), și până în 1468, deținea și insulele Shetland și Orkney.</p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Norvegia are o suprafață totală de 385.207 km<sup>2</sup> și o 
            populație de 5.391.369 locuitori. Țara are o lungă frontieră spre est cu 
            Suedia (1.619 km lungime). Norvegia se mai învecinează cu Finlanda și cu Rusia la nord-est 
            și, peste Strâmtoarea Skagerrak, la sud, cu Danemarca. Norvegia are o coastă extinsă, la 
            Oceanul Atlantic de Nord și la Marea Barents.</p>
        </div>
        <div class="container row">
        <div class="col list-group mt-2">
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Locație</h3>
                <a class="btn btn-outline-info" href = "https://www.google.ro/maps/place/Norvegia/@63.477061,0.1090276,4z/data=!3m1!4b1!4m5!3m4!1s0x461268458f4de5bf:0xa1b03b9db864d02b!8m2!3d60.472024!4d8.468946?hl=ro">Norvegia</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Cel mai înalt punct</h3>
                <span class="btn btn-info">Galdh&oslash;piggen - 2469 m</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Cel mai jos punct</h3>
                <span class="btn btn-info">Marea Norvegiei - 0 m</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Sistem politic</h3>
                <span class="btn btn-info">monarhie constituțională</span>
            </div>
        </div>
        <div class="col mt-2">
            <img src="img/norv-index.jpg">
        </div>
        </div>
        <div class="container text-center text-dark bg-info mt-2">ORAȘE PRINCIPALE</div>

        <div class="container row mb-2">
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/bergen.jpg" class="card-img-top mt-1">
            <div class="card-body">
              <h5 class="card-title text-info">Bergen</h5>
              <p class="card-text text-info">este un oraș în județul Hordaland, vestul Norvegiei.</p>
              <a href="https://www.google.ro/maps/place/Bergen,+Norvegia/@60.3648911,5.1489964,10z/data=!3m1!4b1!4m5!3m4!1s0x46390d4966767d77:0x9e42a03eb4de0a08!8m2!3d60.3912628!4d5.3220544?hl=ro" class="btn btn-outline-info">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/stavanger.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Stavanger</h5>
              <p class="card-text text-info">este un oraș în județul Rogaland, vestul Norvegiei.</p>
              <a href="https://www.google.ro/maps/place/Stavanger,+Norvegia/@58.9485777,5.540255,11z/data=!3m1!4b1!4m5!3m4!1s0x463a3549dd29f795:0xad7aeb21b80a9259!8m2!3d58.9699756!4d5.7331074?hl=ro" class="btn btn-outline-info">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/trondheim.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Trondheim</h5>
              <p class="card-text text-info">este un oraș în județul S&oslash;r-Tr&oslash;ndelag, vestul Norvegiei.</p>
              <a href="https://www.google.ro/maps/place/Trondheim,+Norvegia/@63.4187191,10.368723,12z/data=!3m1!4b1!4m5!3m4!1s0x466d319747037e53:0xbf7c8288f3cf3d4!8m2!3d63.4305149!4d10.3950528?hl=ro" class="btn btn-outline-info">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/drammen.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Drammen</h5>
              <p class="card-text text-info">este un oraș în județul Buskerud, sudul Norvegiei.</p>
              <a href="https://www.google.ro/maps/place/Drammen,+Norvegia/@59.7340031,10.1140132,12z/data=!3m1!4b1!4m5!3m4!1s0x46413cb4aa728419:0xc578916649a336d9!8m2!3d59.7440738!4d10.2044565?hl=ro" class="btn btn-outline-info">Maps</a>
            </div>
        </div>
        </div>

        <div class="container text-center text-dark bg-info mt-2 display-4">Oslo</div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Oslo este capitala și cea mai populată comună a Norvegiei. 
                Se află la o altitudine de 23 m deasupra nivelului mării. Împreună cu comunele 
                provinciei (fylke) Akershus formează o zonă metropolitană locuită de aproximativ 
                1,4 milioane de oameni.</p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Oslo este situat în capul fiordului Oslo. Fiordul se află în sudul 
                orașului. În partea opusă se află dealuri și munți. Există 40 de insule pe teritoriul 
                orașului, cea mai mare fiind Malm&oslash;ya (0,56 km<sup>2</sup>). Oslo are 343 de lacuri, cel mai mare 
                fiind Maridalsvannet (3,91 km<sup>2</sup>). Acesta îi este și sursa cea mai importantă de apă potabilă.
            </p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Iarna este lungă și relativ rece. Temperaturi sub 0 °C pot fi întâlnite din septembrie 
            până în mai, cu ianuarie drept cea mai friguroasă lună, cu temperatura medie de -4.3 °C. Cea mai joasă 
            temperatură înregistrată la Oslo a fost -27,1 °C în ianuarie 1942. Nivelul mediu de precipitații este de 763 
            mm pe an, iernile fiind ceva mai uscate decât verile.
            </p>
        </div>
        <div class="container row">
        <div class="col list-group mt-2">
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Locație</h3>
                <a class="btn btn-outline-info" href="https://www.google.ro/maps/place/Oslo,+Norvegia/@59.8937806,10.6450354,11z/data=!3m1!4b1!4m5!3m4!1s0x46416e61f267f039:0x7e92605fd3231e9a!8m2!3d59.9138688!4d10.7522454?hl=ro">Oslo</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Regiune</h3>
                <a class="btn btn-info">&Oslash;stlandet</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Populație</h3>
                <span class="btn btn-info">951.581 locuitori</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Densitate</h3>
                <span class="btn btn-info">1400 loc / km<sup>2</sup></span>
            </div>
        </div>
        <div class="col mt-2">
            <img src="img/oslo.jpg">
        </div>
        </div>
        <div class="container text-center text-dark bg-info mt-2">OBIECTIVE TURISTICE</div>

        <div class="container row mb-2">
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/oslo-akerchus.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-info">Cetatea Akershus</h5>
              <p class="card-text text-info">este un castel medieval din Oslo.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/oslo-primarie.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Primăria</h5>
              <p class="card-text text-info">a fost proiectată de Arnstein Arneberg și Magnus Poulson și are două turnuri.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/oslo-opera.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Opera</h5>
              <p class="card-text text-info">este cea mai mare clădire culturală construită în Norvegia.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/oslo-palat.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Palatul Regal</h5>
              <p class="card-text text-info">este simbolul independenței statului norvegian din anul 1814, fiid 
                  reședința permanentă a familiei regale.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="container my-4" id="quiz">
        <div id="question-container" class="hide">
            <div id="question" class="d-flex justify-content-center">Question</div>
            <div id="answer-buttons" class="btn-grid" class="d-flex justify-content-center">
                <button class="btn btn-primary">Answer 1</button>
                <button class="btn btn-primary">Answer 2</button>
                <button class="btn btn-primary">Answer 3</button>
                <button class="btn btn-primary">Answer 4</button>
            </div>
        </div>
        <div class="controls">
            <button id="start-btn" class="start-btn btn btn-primary mx-2">Start quiz</button>
            <button id="next-btn" class="next-btn btn btn-primary hide">Next</button>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>