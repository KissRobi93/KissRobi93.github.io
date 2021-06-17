<?php

if(@$_GET["action"]=="getTime"){
    $time1 = Time();  
    $date1 = date("H:i:s",$time1);  
    echo $date1; // time output for ajax request
    die();  
}
$datum = date("Y-m-d");
$datum2 = date("H:i:s");
$divclose = "</div>";
$fejlec = ["<div class='fejlec'>","<div class='fejlec2'>","<div class='fejlec3'>"];
$fejlecsz = ["<h1 style='color:red;'>Bérkalkulátor</h1>","<h1 style='color:green;'>Bérkalkulátor</h1>","<h1 style='color:white;'>Bérkalkulátor</h1>"];
$veletlen = rand(0, count($fejlecsz)-1);
$veletlenfc = rand(0, count($fejlec)-1);
$random = rand(0,1);

if($random == 0) {
    $style = "<link rel='stylesheet' href='style/style.css'>";
}
else {
    $style = "<link rel='stylesheet' href='style/style2.css'>";
}

?>

<!DOCTYPE html>
    <html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo "$style";?>
        <title>Fizezés ellenörző</title>
    </head>
    <body>

    <?php
        echo '<header>'.$fejlec[$veletlenfc].$fejlecsz[$veletlen].$divclose.'</header>';
    ?>
        
        <table>
            
        <tr>
        <th>Leírás</th>
        <th>Adat</th>
        </tr>
        
        <tr>
        <td><label for="ober">Órabér</label></td>
        <td> <input type="number" class="form-control" placeholder="Adja meg az órabérét(HUF)" name="ober" id="ober"></td>
        </tr>
        <tr>
        <td><label for="mora">Ledolgozott óra</label></td>
        <td> <input type="number" class="form-control" placeholder="Összes ledoldozott óraszám" id="mora"></td>
        </tr>
        <tr>
        <td><label for="fsznap">Fizetett Szabadság(óra)</label></td>
        <td> <input type="number" class="form-control" placeholder="Fizetett szabadság óráinak száma" id="fsznap"></td>
        </tr>
        <tr>
        <td><label for="dupotlek">Délutános pótlék (30%)</label></td>
        <td> <input type="number" class="form-control" placeholder="Délutános órák száma" id="dupotlek"></td>
        </tr>
        <tr>
        <td><label for="tora">Túlóra(pihenőnapon)</label></td>
        <td> <input type="number" class="form-control" placeholder="Túlóra száma(óra)" id="tora"></td>
        </tr>
        <tr>
        <td><label for="torafel">Túlóra(munkanapon)</label></td>
        <td> <input type="number" class="form-control" placeholder="Túlóra száma(óra)" id="torafel"></td>
        </tr>
        <tr>
        <td><label for="msztdij">Munkaszüneti táv díj</label></td>
        <td> <input type="number" class="form-control" placeholder="Fizetett munkaszüneti órák száma" id="msztdij"></td>
        </tr>
        <tr>
        <td colspan="2"><button onclick="Szamol(), megJelen()" type="szamol" name="szamol">Számol</button></td>
        </tr>
        
        </table>
        
        
        <table id="tabla2" style="display:none">
        <tr>
        <th colspan="2">Jövedelem</th>
        </tr>
        <tr>
        <td><label for="tber">Törzsbér</label></td>
        <td><p id="tber"></p></td>
        </tr>
        <tr>
        <td><label for="tdsz">Táv.dij.szab</label></td>
        <td><p id="tdsz"></p></td>
        </tr>
        <tr>
        <td><label for="dupjov">Délutános pótlék</label></td>
        <td><p id="dupjov"></p></td>
        </tr>
        <tr>
        <td><label for="msztav">Munkaszünet távdíj</label></td>
        <td><p id="msztav"></p></td>
        </tr>
        <tr>
            <td><label for="tulo">Túlóra(200% pihenő)</label></td>
            <td><p id="tulo"></p></td>
        </tr>
        <tr>
            <td><label for="tulofel">Túlóra(150%)</label></td>
            <td><p id="tulofel"></p></td>
        </tr>
        <tr>
            <td><label for="osszesb">Összesen</label></td>
            <td><p id="osszesb"></p></td>
        </tr>
            <tr>
            <td><label for="osszesn">Nettó jövedelem</label></td>
            <td><p style="font-weight: bold" id="osszesn"></p></td>
            </tr>
            </table>
            

            <?php
            echo '
            <p>'.$datum.'</p>
            <p id="qwe">'.$datum2.'</p>';
            ?>
        
    </body>
    <script src="js/script.js"></script>
    <script src="js/ido.js"></script>
    </html>