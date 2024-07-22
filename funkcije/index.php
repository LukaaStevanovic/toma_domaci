<?php

    function izracunaj_pdv($cena)
    {
        if(is_string($cena)){
            die("Broj mora biti numericka vrednost");
        }else{
            if($cena < 1){
                echo "Broj ne moze biti manji od 1";
            }else
            {
                $cena_pdv = $cena * 0.22;
            }
        }
        echo "PDV iznosi $cena_pdv";
    }
    izracunaj_pdv(100);
