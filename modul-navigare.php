<?php
    if(! isset($pagina))
        $pagina = "";
    if(! isset($culoare_text))
        $culoare_text = "light";
    if(! isset($culoare_bg))
        $culoare_bg = "light";
?>
        <nav class="navbar navbar-expand-lg navbar-light text-light bg-info">
                <div class="container-fluid">
                  <a class="navbar-brand text-light" href="index.php">INDEX</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?=$pagina == "norvegia"?"active":""?> "  href="norvegia.php">Norvegia <img src="img/icon-norv.png"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=$pagina == "suedia"?"active":""?> " href="suedia.php">Suedia <img src="img/icon-sue.png"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=$pagina == "finlanda"?"active":""?> " href="finlanda.php">Finlanda <img src="img/icon-fin.png"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=$pagina == "danemarca"?"active":""?> " href="danemarca.php">Danemarca <img src="img/icon-dan.png"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=$pagina == "travel"?"active":""?> " href="travel.php">Travel</a>
                        </li>
                    </ul>
                 </div>
                
            </div>
        </nav>