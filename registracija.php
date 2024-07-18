<?php

    $imenaValid = ["Toma", "Petar", "Marko"];

    $proveriIme = isset($_POST['ime']);
    if($proveriIme == false){
        die("Niste uneli ime");
    }
    $ime = $_POST['ime'];

    $duzinaImena = strlen($ime);
    if($duzinaImena < 3){
        die("Ime mora imati 3 karaktera");
    }

    $imeLower = strtolower($ime);

    $proveraListe = false;

    foreach($imenaValid as $Validime){
        if(strtolower($Validime) == $imeLower){
            $proveraListe = true;
            break;
        }
    }

    if($proveraListe == true){
        echo("Uspesno ste se ulogovali");
    }else{
        echo("Niste uneli ime iz liste");
    }
