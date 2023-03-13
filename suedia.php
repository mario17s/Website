<?php
    $pagina = "suedia";
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
    <script defer src="sue-script.js"></script>
</head>
<body style="background-color: rgb(88,88,88)">
    
    <?php
        include "modul-navigare.php";
    ?>

    <div class="py-1">
       <div class="container">
            <h1 class="display-2 bg-dark text-light text-center mt-2">
                ~ SUEDIA ~
            </h1>
    </div>
    </div>
    <div class="bg-secondary">
        <div class="container text-center">
            <img class="m-2" src="img/harta-suedia.png">
        </div>
    </div>

    <div class="container border border-4 border-light">
        <div class="container text-center text-dark bg-light mt-2">INFORMAȚII</div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-light">Suedia este un stat în Europa de Nord, situat în partea 
            estică a peninsulei Scandinave, la țărmurile Mării Baltice (Golful Botnic). 
            Cuprinde și numeroase insule din Marea Baltică. Are frontiera comună cu 
            Norvegia la nord-vest (1.619 km lungime), Finlanda la nord-est (586 km), 
            Marea Nordului împreună cu strâmtorile daneze la sud-vest și Marea Baltică 
            la est. Are o suprafață de 449.964 km<sup>2</sup>.</p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-light">După sfârșitul Războiului Rece, Suedia a aderat 
            în 1995 la Uniunea Europeană, dar a refuzat aderarea la NATO, precum și 
            la zona Euro, în urma unui referendum. Este, de asemenea, un membru al 
            ONU, Consiliul Nordic, Consiliul Europei, Organizația Mondială a Comerțului și OECD.</p>
        </div>
        <div class="container row">
        <div class="col list-group mt-2">
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Locație</h3>
                <a class="btn btn-outline-light" href = "https://www.google.ro/maps/place/Suedia/@61.7423195,8.4446841,5z/data=!3m1!4b1!4m5!3m4!1s0x465cb2396d35f0f1:0x22b8eba28dad6f62!8m2!3d60.128161!4d18.643501?hl=ro">Suedia</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Cel mai înalt punct</h3>
                <h1 class="btn btn-light active">Kebnekaise <strong>-</strong> 2111 m</h1>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Cel mai jos punct</h3>
                <span class="btn btn-light">Kristianstad <strong>-</strong> -2 m</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Sistem politic</h3>
                <span class="btn btn-light">monarhie constituțională</span>
            </div>
        </div>
        <div class="col mt-2">
            <img src="img/suedia-index.jpg">
        </div>
        </div>
        <div class="container text-center text-dark bg-light mt-2">ORAȘE PRINCIPALE</div>

        <div class="container row mb-2">
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/goteborg.jpg" class="card-img-top mt-3">
            <div class="card-body">
              <h5 class="card-title text-light">G&ouml;teborg</h5>
              <p class="card-text text-light">al doilea mare oraș al Suediei dupa 
            Stockholm. Este situat în sud-vestul Suediei, pe malul Mării Nordului</p>
              <a href="https://www.google.ro/maps/place/G%C3%B6teborg,+Suedia/@57.7006827,11.6136667,10z/data=!3m1!4b1!4m5!3m4!1s0x464f8e67966c073f:0x4019078290e7c40!8m2!3d57.70887!4d11.97456?hl=ro" class="btn btn-outline-light">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/malmo.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Malm&ouml;</h5>
              <p class="card-text text-light">este al treilea oraș ca mărime din Suedia. 
            Este separat de capitala Danemarcei, Copenhaga, prin Podul &Oslash;resund.</p>
              <a href="https://www.google.ro/maps/place/Malm%C3%B6,+Suedia/@55.5701485,12.9459333,12z/data=!3m1!4b1!4m5!3m4!1s0x465305a574c491ff:0xd3a905dfbd4888e5!8m2!3d55.604981!4d13.003822?hl=ro" class="btn btn-outline-light">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/uppsala.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Uppsala</h5>
              <p class="card-text text-light">este situat la o distanță de 70 km de la 
            capitala Stockholm, și este un centru important universitar.</p>
              <a href="https://www.google.ro/maps/place/Uppsala,+Suedia/@59.8332609,17.5884081,12z/data=!3m1!4b1!4m5!3m4!1s0x465fcbfb8532ab8d:0xaa4fe90a85820807!8m2!3d59.8585638!4d17.6389267?hl=ro" class="btn btn-outline-light">Maps</a>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/linkoping.jpg" class="card-img-top mt-2">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Link&ouml;ping</h5>
              <p class="card-text text-light">este al cincilea oraș din Suedia, centru al unei 
            vechi regiuni culturale, cu o vechime de peste 700 de ani.</p>
              <a href="https://www.google.ro/maps/place/Link%C3%B6ping,+Suedia/@58.4037694,15.5407345,12z/data=!3m1!4b1!4m5!3m4!1s0x46596e719a049f95:0x400fef341e48e70!8m2!3d58.410807!4d15.6213728?hl=ro" class="btn btn-outline-light">Maps</a>
            </div>
        </div>
        </div>

        <div class="container text-center text-dark bg-light mt-2 display-4">Stockholm</div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-light">Stockholmul este capitala și cel mai mare oraș din Suedia. Fiind capitala Suediei, 
            Stockholm este sediul Guvernului și al Parlamentului. Este de asemenea orașul de reședință al șefului statului, 
            Regele Carol al XVI-lea Gustaf.</p>
        </div>
        <div class="container text-center bg-dark py-1 mt-2">  
            <p class="text-light">Prima atestare documentară a orașului datează din 1252, când era o piață importantă 
            în comerțul cu fier din minele de la Bergslagen. Se spune că orașul a fost fondat de Birger Jarl, cu scopul de 
            a proteja Suedia de invazia maritimă a forțelor străine și pentru a împiedica jefuirea unor cetăți ca Sigtuna 
            pe lacul M&auml;laren.
            </p>
        </div>
        
        <div class="container row">
        <div class="col list-group mt-2">
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Locație</h3>
                <a class="btn btn-outline-light" href="https://www.google.ro/maps/place/Stockholm,+Suedia/@59.3260668,17.8419707,11z/data=!3m1!4b1!4m5!3m4!1s0x465f763119640bcb:0xa80d27d3679d7766!8m2!3d59.3293235!4d18.0685808?hl=ro">Stockholm</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Regiune</h3>
                <a class="btn btn-light">Stockholm</a>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Populație</h3>
                <span class="btn btn-light">885.653 locuitori</span>
            </div>
            <div class="list-group-item bg-dark">
                <h3 class="text-light">Densitate</h3>
                <span class="btn btn-light">2321 loc / km<sup>2</sup></span>
            </div>
        </div>
        <div class="col mt-2">
            <img src="img/stockholm.jpg">
        </div>
        </div>
        <div class="container text-center text-dark bg-light mt-2">OBIECTIVE TURISTICE</div>

        <div class="container row mb-2">
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/stock-gamla-stan.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-light">Gamla Stan - Centrul Vechi</h5>
              <p class="card-text text-light">datează încă din anii 1200 și este locul în care se găsesc 
                o mulțime de cafenele, restaurante cu mâncare tradițional-autentică suedeză, magazine tip boutique.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/stock-djurgarden.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Djurgarden</h5>
              <p class="card-text text-light">Această insulă este un spațiu de recreere pentru populație.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/stock-primaria.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Primăria</h5>
              <p class="card-text text-light">situată pe marginea lacului, este una dintre cele mai reprezentative 
                clădiri din Stockholm, ce de-a lungul timpului a apărut pe numeroase cărți poștale suedeze.</p>
            </div>
        </div>
        <div class="col card bg-dark" style="width: 18rem;">
            <img src="img/stock-skyview.jpg" class="card-img-top mt-4">
            <div class="card-body">
              <h5 class="card-title text-light mt-2">Skyview</h5>
              <p class="card-text text-light">este cea mai mare clădire sferică din lume, de unde se poate vedea întregul oraș.</p>
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
