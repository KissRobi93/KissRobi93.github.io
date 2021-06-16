<?php

?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fizezés Ellenörző</title>
</head>
<body>

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
            <td><label for="tora">Túlóra</label></td>
            <td> <input type="number" class="form-control" placeholder="Túlóra száma(óra)" id="tora"></td>
        </tr>
        <tr>
            <td><label for="msztdij">Munkaszünet távdíj</label></td>
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
                <td><label for="osszesb">Összesen</label></td>
                <td><p id="osszesb"></p></td>
            </tr>
            <tr>
                <td><label for="osszesn">Nettó jövedelem</label></td>
                <td><p style="font-weight: bold" id="osszesn"></p></td>
            </tr>
        </table>


</body>
    <script>

        function Szamol() {
            
            let ober = document.getElementById("ober").value;
            let mora = document.getElementById("mora").value;
            let fsznap = document.getElementById("fsznap").value;
            let dupotlek = document.getElementById("dupotlek").value;
            let tora = document.getElementById("tora").value;
            let msztdij = document.getElementById("msztdij").value;

            let tber = ober*mora;
            document.getElementById("tber").innerHTML = tber;

            let tdsz = ober*fsznap;
            document.getElementById("tdsz").innerHTML = tdsz;

            let dupjov = ober*dupotlek*0.3;
            document.getElementById("dupjov").innerHTML = dupjov;

            let msztav = ober*msztdij;
            document.getElementById("msztav").innerHTML = msztav;

            let tulo = (ober*tora)*2;
            document.getElementById("tulo").innerHTML = tulo;

            let osszesb = tber+tdsz+dupjov+msztav+tulo;
            document.getElementById("osszesb").innerHTML = osszesb+" Ft (Bruttó)";

            let osszesn = (tber+tdsz+dupjov+msztav+tulo)*0.665;
            document.getElementById("osszesn").innerHTML = Math.ceil(osszesn)+" Ft";
        }

        function megJelen() {
            document.getElementById("tabla2").style.display="table";
        }
    
            
    </script>
</html>