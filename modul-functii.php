<?php
    function Extensie($nume_fisier)
    {
        $v = explode(".", $nume_fisier);
        return end($v);
        // return $v[Count($v) - 1];
    }

    function EsteImagine($nume_fisier)
    {
         return in_array(strtolower(Extensie($nume_fisier)) , ['jpg', 'jpe', 'jpeg', 'png', 'webp', 'bmp', 'gif']);
    }

    function GenereazaNume($nume_fisier)
    {
        $ext = Extensie($nume_fisier);
        $nume = sha1($nume_fisier.date("y-m-d h:i:s").rand(1 , 100000000));
        return $nume . "." . $ext;
    }
    

    function AfisareVariabila($v)
    {
        if(! is_array($v))
            print $v;
        else
        {
            if(count($v) == 0)
            {
                print "empty array";
                return;
            }
            ?>
                <ul>
                    <?php
                        foreach($v as $indice => $valoare)
                        {
                            ?>
                            <li>
                                <code><?=$indice?></code> => 
                                <?php
                                    if(is_array($valoare))
                                        AfisareVariabila($valoare);
                                    else
                                        print "<code>{$valoare}</code>";
                                ?>
                            </li>
                            <?php
                        }
                    ?>
                </ul>
            <?php
        }
    }

    function MesajAdaugare($text , $tip='success')
    {
        if(! isset($_SESSION['mesaje']))
            $_SESSION['mesaje'] =[];
        $_SESSION['mesaje'][] = [
            'text' => $text,
            'tip' => $tip,
        ];
    }

    function MesajAfisare()
    {
        if(! isset($_SESSION['mesaje']))
            return;
        if(count($_SESSION['mesaje']) == 0)
            return;
        ?>
            <div class="container">
                <?php
                    foreach($_SESSION['mesaje'] as $M)
                    {
                        ?>
                        <div class="alert alert-<?=htmlspecialchars($M['tip'])?>">
                            <?=htmlspecialchars($M['text'])?>
                        </div>
                        <?php
                    }
                ?>
            </div>
        <?php
        unset($_SESSION['mesaje']);
    }

    function Login()
    {
        if(isset($_SESSION['user']))
            return $_SESSION['user'];
        return false;
    }

    function ListaConturi()
    {
        global $separator_parole;
        if(! file_exists('conturi.txt'))
        {
            return [];
        }
        $continut = file_get_contents('conturi.txt');
        $linii=explode(PHP_EOL, $continut);
        $rez = [];
        foreach($linii as $linie)
        {
            $C = explode($separator_parole , $linie);

            if(count($C) == 3)
            {
                $aux = [
                    'user' => $C[0],
                    'hash' => $C[1],
                    'status' => $C[2]
                ];
                $rez[] = $aux;
            }
        }
        return $rez;
    }

    function EsteAdmin($user)
    {
        if($user == false)
            return false;
        $conturi = ListaConturi();
        foreach($conturi as $C)
            if($C['user'] == $user)
                if($C['status'] == 'admin')
                    return true;
                else
                    return false;
        return false;
    }