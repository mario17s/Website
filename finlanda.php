<?php
    $pagina = "finlanda";
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
    <script defer src="fin-script.js"></script>
</head>
<body style="background-color: rgb(170, 189, 224);">
    
    <?php
        include "modul-navigare.php";
    ?>

    <div class="py-1">
       <div class="container">
            <h1 class="display-2 bg-dark text-info text-center mt-2">
                ~ FINLANDA ~
            </h1>
    </div>
    </div>
    <div class="bg-secondary">
        <div class="container text-center">
            <img class="m-2" src="img/harta-finlanda.jpg">
        </div>
    </div>

    <div class="container border border-4 border-info">
        <div class="container text-center text-dark bg-info mt-2">INFORMAȚII</div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Finlanda este o țară nordică situată în regiunea finoscandică a 
            Europei de Nord. Se învecinează cu Suedia la vest, cu Norvegia la nord și cu Rusia 
            la est, în timp ce Estonia se află la sud, peste Golful Finlandei. În Finlanda trăiesc 
            circa 5,4 milioane de oameni, majoritatea fiind concentrată în regiunile sudice. În 
            termeni de suprafață, este a opta țară din Europa și cea mai rarefiat populată țară 
            a Uniunii Europene.</p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Din secolul al XII-lea și până la începutul secolului al XIX-lea, 
            Finlanda a constituit provincia estică a Suediei. Apoi a devenit Mare Ducat autonom în cadrul 
            Imperiului Rus până la Revoluția Rusă. Aceasta s-a soldat cu declararea independenței Finlandei.</p>
        </div>
        <div class="container row">
        <div class="col list-group mt-2">
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Locație</h3>
                <a class="btn btn-outline-info" href = "https://www.google.com/maps?q=finlanda&source=lmns&bih=754&biw=1536&hl=ro&sa=X&ved=2ahUKEwjmgKbC8dnzAhX7JMUKHV9TCQ8Q_AUoAXoECAEQAQ">Finlanda</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Cel mai înalt punct</h3>
                <span class="btn btn-info">Halti <strong>-</strong> 1324 m</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Cel mai jos punct</h3>
                <span class="btn btn-info">Marea Baltică <strong>-</strong> 0 m</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Sistem politic</h3>
                <span class="btn btn-info">republică parlamentară</span>
            </div>
        </div>
        <div class="col mt-2">
            <img src="img/finlanda-index.jpg">
        </div>
        </div>
        <div class="container text-center text-dark bg-info mt-2">ORAȘE PRINCIPALE</div>

        <div class="container row mb-2">
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/espoo.jpg" class="card-img-top mt-3">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Espoo</h5>
              <p class="card-text text-info">este al doilea oraș ca mărime din Finlanda. 
                Este situat în zona urbană Helsinki, pe coasta sudică a țării.</p>
              <a href="https://www.google.ro/maps/place/Espoo,+Finlanda/@60.2064642,24.3949397,10z/data=!3m1!4b1!4m5!3m4!1s0x468df2faa43d4be1:0xf0b890b45d33539f!8m2!3d60.2054911!4d24.6559?hl=ro" class="btn btn-outline-info">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/tampere.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-info mt-4">Tampere</h5>
              <p class="card-text text-info">este un oraș în sud-vestul Finlandei, în provincia Finlanda de Vest. 
                Este al treilea cel mai mare oraș al Finlandei și cel mai mare oraș fără ieșire la mare din Țările Nordice.</p>
              <a href="https://www.google.ro/maps/place/Tampere,+Finlanda/@61.6316413,23.5501196,10z/data=!3m1!4b1!4m5!3m4!1s0x468edf554593da5d:0x6adfe3bd1e0b22c0!8m2!3d61.4977524!4d23.7609535?hl=ro" class="btn btn-outline-info">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/vantaa.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Vantaa</h5>
              <p class="card-text text-info">este un oraș și comună de pe coasta sudică a Finlandei. Orașul 
                face parte din zona urbană Helsinki. Este cunoscut pentru că este locul unde a fost construit 
                aeroportul internațional Helsinki-Vantaa</p>
              <a href="https://www.google.ro/maps/place/Vantaa,+Finlanda/@60.3190656,24.8297057,11z/data=!3m1!4b1!4m5!3m4!1s0x469207b83a3845b5:0xe2b7cd7632a1804f!8m2!3d60.2933524!4d25.0377686?hl=ro" class="btn btn-outline-info">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/oulu.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Oulu</h5>
              <p class="card-text text-info"> este un oraș important în nordul Finlandei, la 550 de km de Helsinki,
                pe malul râului Oulujoki. Este poarta de intrare a nordului Finlandei, prin al doilea aeroport ca trafic din țară.</p>
              <a href="https://www.google.ro/maps/place/Oulu,+Finlanda/@65.2032821,24.8824473,9z/data=!3m1!4b1!4m5!3m4!1s0x468032a8c02185c1:0x8bb02d322b12e97d!8m2!3d65.0120888!4d25.4650772?hl=ro" class="btn btn-outline-info">Maps</a>
            </div>
        </div>
        </div>

        <div class="container text-center text-dark bg-info mt-2 display-4">Helsinki</div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Helsinki este capitala și cel mai mare oraș al Finlandei. Orașul este situat în sudul țării, 
            pe malul golfului Finic. Zona urbană Helsinki este formată din municipiul capitalei și orașele Espoo, Vantaa 
            și Kauniainen. Helsinki împreună cu regiunile limitrofe alcătuiesc o populație de peste 1.000.000 de locuitori. 
            În această zonă există 29% din locurile de muncă și o treime din produsul intern brut al Finlandei.</p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-info">Helsinki fiind un oraș important, întâlnim sediul guvernului statului dar și edificii culturale, 
            educaționale sau de cercetare. În regiunile din împrejurimile orașului se întâlnesc în total 8 universități și 6 parcuri 
            tehnologice. 80% din sediile companiilor străine aflate în Finlanda se află în Helsinki și zonele învecinate. Creșterea 
            populației urbane se datorează imigrării persoanelor din mediul rural.
            </p>
        </div>
        <div class="container row">
        <div class="col list-group mt-2">
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Locație</h3>
                <a class="btn btn-outline-info" href="https://www.google.ro/maps/place/Oslo,+Norvegia/@59.8937806,10.6450354,11z/data=!3m1!4b1!4m5!3m4!1s0x46416e61f267f039:0x7e92605fd3231e9a!8m2!3d59.9138688!4d10.7522454?hl=ro">Helsinki</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Regiune</h3>
                <a class="btn btn-info">Uusimaa</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Populație</h3>
                <span class="btn btn-info">1.159.211 locuitori</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Densitate</h3>
                <span class="btn btn-info">2832 loc / km<sup>2</sup></span>
            </div>
        </div>
        <div class="col mt-2">
            <img src="img/helsinki.jpg">
        </div>
        </div>
        <div class="container text-center text-dark bg-info mt-2">OBIECTIVE TURISTICE</div>

        <div class="container row mb-2">
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/suomenlinna.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-info">Suomenlinna</h5>
              <p class="card-text text-info">denumită și „Gibraltarul Nordului” este o fortificație ce a fost 
            construită la jumătatea secolului al XVIII-lea de Augustin Ehrensvard.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/seurasaari.png" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-info mt-4">Seurasaari</h5>
              <p class="card-text text-info">Muzeul în aer liber Seurasaari este situat pe una din insulele din împrejurimile 
            orașului Helsinki, la doar câțiva kilometri de centrul orașului.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/ateneu-hel.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Ateneul</h5>
              <p class="card-text text-info">adăpostește cel mai cunoscut muzeu de artă din Finlanda, muzeu ce cuprinde unele 
                  dintre cele mai îndrăgite lucrări clasice ale artei finlandeze ce datează din secolul al XIX-lea până în anul 1950.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/stadion-hel.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-info mt-2">Stadionul</h5>
              <p class="card-text text-info">a fost construit în anul 1938 și a găzduit Jocurile olimpice din anul 1952.</p>
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
