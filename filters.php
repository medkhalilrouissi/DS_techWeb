<?php
function filtrerDisponibles(array $vehicules): array
{
    //fn est une fonction flechée 
    return array_filter($vehicules, fn($vehicule)=>$vehicule["statut"]==="DISPO");


}

?>