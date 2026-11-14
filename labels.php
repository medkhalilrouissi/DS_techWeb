<?php 
function getBadgeCategorie(string $categorie): array
{
    switch ($categorie)
    {
        case "ECO":
            return ["label"=>"Economique",
                    "class"=>"badge-eco"];
                   
        case "SUV":
            return ["label"=>"SUV familial",
                    "class"=>"badge-suv"];
                    
        case "LUXE":
            return ["label"=>"Premium",
                    "class"=>"badge-prem"];
                   
        default:
            return ["label"=>"Inconnue",
                    "class"=>"badge-inconnue"];
           

}
}

function getLibelleStatut(string $libelle): string
{
    switch ($libelle)
    {
        case "DISPO":
            return "Disponible immédiatement";
            
        case "LOUEE":
            return "Actuellement louée";
            
        case "MAINTENANCE":
            return "En maintenance";
            
        default:
             return  "Libelle non disponible";
            
    }

}
?>