<?php
    $pagina = "danemarca";
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
    <script defer src="dan-script.js"></script>
</head>
<body style="background-color: rgb(88,88,88)">
    
    <?php
        include "modul-navigare.php";
    ?>

    <div class="py-1">
       <div class="container">
            <h1 class="display-2 bg-dark text-light text-center mt-2">
                ~ DANEMARCA ~
            </h1>
    </div>
    </div>
    <div class="bg-secondary">
        <div class="container text-center">
            <img class="m-2" src="img/harta-danemarca.jpg">
        </div>
    </div>

    <div class="container border border-4 border-light">
        <div class="container text-center text-dark bg-light mt-2">INFORMAȚII</div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-light">Danemarca este un stat suveran din Europa de Nord, având și două teritorii autonome 
            constituente de peste mări, care fac parte integrantă din regat: Insulele Feroe în Atlanticul de Nord 
            și Groenlanda în America de Nord. Danemarca propriu-zisă este cea mai sudică dintre țările nordice, 
            aflată la sud-vest de Suedia și la sud de Norvegia, învecinându-se la sud cu Germania, și având frontieră 
            maritimă cu Regatul Unit.</p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-light">Țara constă dintr-o peninsulă mare, Iutlanda, și mai multe insule, dintre care 
            cele mai mari sunt Zealand, Funen, Lolland, Falster și Bornholm, precum și sute de insulițe denumite în 
            general „Arhipelagul Danez”.</p>
        </div>
        <div class="container row">
        <div class="col list-group mt-2">
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Locație</h3>
                <a class="btn btn-outline-light" href = "https://www.google.ro/maps/place/Danemarca/@56.2097969,9.3001605,7z/data=!3m1!4b1!4m5!3m4!1s0x464b27b6ee945ffb:0x528743d0c3e092cd!8m2!3d56.26392!4d9.501785?hl=ro">Danemarca</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Cel mai înalt punct</h3>
                <h1 class="btn btn-light active">M&oslash;lleh&oslash;j <strong>-</strong> 171 m</h1>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Cel mai jos punct</h3>
                <span class="btn btn-light">Lammefjorden <strong>-</strong> -7,5 m</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Sistem politic</h3>
                <span class="btn btn-light">monarhie constituțională</span>
            </div>
        </div>
        <div class="col mt-2">
            <img src="img/dan-index.jpg">
        </div>
        </div>
        <div class="container text-center text-dark bg-light mt-2">ORAȘE PRINCIPALE</div>

        <div class="container row mb-2">
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/aarhus.jpg" class="card-img-top mt-3">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Aarhus</h5>
              <p class="card-text text-light">este al doilea oraș ca mărime și principalul port, fiind supranumit 
                  „Capitala Iutlandei”.</p>
              <a href="https://www.google.ro/maps/place/Aarhus,+Danemarca/@56.1780842,10.1119349,12z/data=!3m1!4b1!4m5!3m4!1s0x464c4cb15397788b:0x8c4dd7d9912ea2af!8m2!3d56.162939!4d10.203921?hl=ro" class="btn btn-outline-light">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/aalborg.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Aalborg</h5>
              <p class="card-text text-light">este un oraș industrial și universitar în nordul Iutlandei</p>
              <a href="https://www.google.ro/maps/place/Aalborg,+Danemarca/@57.0268172,9.8377345,12z/data=!3m1!4b1!4m5!3m4!1s0x464933b25fdf3d0d:0x4eb1b46a2eec26c3!8m2!3d57.0488195!4d9.921747?hl=ro" class="btn btn-outline-light">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/roskilde.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Roskilde</h5>
              <p class="card-text text-light">este un oraș in Estul Danemarcei. Catedrala din Roskilde a fost înscrisă în anul 
                  1995 pe lista patrimoniului cultural mondial UNESCO.</p>
              <a href="https://www.google.ro/maps/place/4000+Roskilde,+Danemarca/@55.6700637,11.9412232,11z/data=!3m1!4b1!4m5!3m4!1s0x46525fc995012f29:0xa00afcc1d507710!8m2!3d55.64191!4d12.087845?hl=ro" class="btn btn-outline-light">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/odense.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Odense</h5>
              <p class="card-text text-light">este un oraș în SE Danemarcei.</p>
              <a href="https://www.google.ro/maps/place/Odense,+Danemarca/@55.3841677,10.2577369,11z/data=!3m1!4b1!4m5!3m4!1s0x464cd935429724c1:0x3b1e34d53b2ff5ec!8m2!3d55.403756!4d10.40237?hl=ro" class="btn btn-outline-light">Maps</a>
            </div>
        </div>
        </div>

        <div class="container text-center text-dark bg-light mt-2 py-2 display-4">Copenhaga</div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-light">Copenhaga este capitala Danemarcei, fiind situată pe coasta orientală a insulei Sj&aelig;lland 
            și în mica insulă Amager, față în față cu strâmtoarea &Oslash;resund. Numele său din daneză, K&oslash;benhavn 
            (română Portul comercianților) amintește de poziția sa strategică la Marea Baltică.</p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-light">Populația daneză a regiunii metropolitane a Copenhagăi este de 1.800.000 locuitori, 
            din care o treime locuiește în localitatea Frederiksberg, o treime în comitatul Copenhaga, iar restul în 
            celelalte localități din regiune.
            </p>
        </div>
        
        <div class="container row">
        <div class="col list-group mt-2">
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Locație</h3>
                <a class="btn btn-outline-light" href="https://www.google.ro/maps/place/Copenhaga,+Danemarca/@55.6712474,12.5237844,12z/data=!3m1!4b1!4m5!3m4!1s0x4652533c5c803d23:0x4dd7edde69467b8!8m2!3d55.6760968!4d12.5683372?hl=ro">Copenhaga</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Regiune</h3>
                <a class="btn btn-light">Hovedstaden</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Populație</h3>
                <span class="btn btn-light">518.574 locuitori</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Densitate</h3>
                <span class="btn btn-light">5876 loc / km<sup>2</sup></span>
            </div>
        </div>
        <div class="col mt-2">
            <img src="img/copenhaga.jpg">
        </div>
        </div>
        <div class="container text-center text-dark bg-light mt-2">OBIECTIVE TURISTICE</div>

        <div class="container row mb-2">
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/mica-sirena.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-light">Mica Sirenă</h5>
              <p class="card-text text-light">este o statuie din bronz a lui Edvard Eriksen.
            Sculptura este expusă pe o stâncă de pe malul apei la promenada Langelinie.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/christiania.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-light mt-4">Christiania</h5>
              <p class="card-text text-light">este o comunitate intenționată și o comună de aproximativ 850 până 
            la 1.000 de locuitori, care acoperă 7,7 hectare în cartierul Christianhavn din capitala daneză Copenhaga.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/christianborg.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Palatul Christianborg</h5>
              <p class="card-text text-light">situat pe insulița Slotsholmen în centrul capitalei Copenhaga este 
            sediul Parlamentului danez, biroul primului ministru și sediul Curții Supreme Daneze.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/stroget.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Str&oslash;get</h5>
              <p class="card-text text-light">este o zonă de cumpărături pietonală și fără mașini din Copenhaga, 
            Danemarca. Această atracție turistică populară din centrul orașului este una dintre cele mai lungi străzi 
            comerciale pietonale din Europa, la 1,1 km.</p>
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
