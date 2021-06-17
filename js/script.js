function Szamol() {
            
    let ober = document.getElementById("ober").value;
    let mora = document.getElementById("mora").value;
    let fsznap = document.getElementById("fsznap").value;
    let dupotlek = document.getElementById("dupotlek").value;
    let tora = document.getElementById("tora").value;
    let torafel = document.getElementById("torafel").value;
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

    let tulofel = (ober*torafel)*1.5;
    document.getElementById("tulofel").innerHTML = tulofel;

    let osszesb = tber+tdsz+dupjov+msztav+tulo+tulofel;
    document.getElementById("osszesb").innerHTML = osszesb+" Ft (Bruttó)";

    let osszesn = (osszesb)*0.665;
    document.getElementById("osszesn").innerHTML = Math.ceil(osszesn)+" Ft";
}

function megJelen() {
    document.getElementById("tabla2").style.display="table";
}