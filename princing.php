<?php

function CalculerPrixLocation(int $j, float $t): float

{
    $prix = $j * $t ;
    if( $j > 7)
        {
            $prix= $prix*0.85;
        }
    return $prix ;
}
/*hello word*/
/*hello word*/
/*hello word*/
/*hello*/
?>