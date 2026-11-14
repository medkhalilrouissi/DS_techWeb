<?php
require_once 'config/settings.php';
require_once 'functions/pricing.php';
require_once 'functions/labels.php';
require_once 'functions/filters.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
<title> AutoLoc </title>
<link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
$vehicules=[
    ["id"=>1,"modele"=>"Renault Clio","jours"=>3,"categorie"=>"ECO","statut"=>"DISPO"],
    ["id"=>2,"modele"=>"Range Rover","jours"=>10,"categorie"=>"LUXE","statut"=>"LOUEE"],
    ["id"=>3,"modele"=>"Dacia Duster","jours"=>5,"categorie"=>"SUV","statut"=>"DISPO"],
    ["id"=>4,"modele"=>"Peugeot 208","jours"=>8,"categorie"=>"ECO","statut"=>"MAINTENANCE"]
];

$total=0;

foreach($vehicules as $vehicule)
{
    $prix=CalculerPrixLocation($vehicule["jours"],TARIF_JOUR_BASE);
    $total=$total+$prix;

    $badge=getBadgeCategorie($vehicule["categorie"]);
    $statut=getLibelleStatut($vehicule["statut"]);
?>

    <div class="card">

        <h2>
            <?php echo $vehicule["modele"]; ?>
        </h2>

        <p>
            Nombre de jours : <?php echo $vehicule["jours"]; ?>
        </p>

        <p>
            Prix : <?php echo $prix; ?> TND
        </p>

        <span class="<?php echo $badge["class"]; ?>">
            <?php echo $badge["label"]; ?>
        </span>

        <p class="<?php echo 'statut-' . $vehicule["statut"]; ?>">
            Statut : <?php echo $statut; ?>
        </p>

    </div>

<?php
}

$disponibles=filtrerDisponibles($vehicules);
?>

<p>
    Nombre de véhicules disponibles : <?php echo count($disponibles); ?>
</p>

<p>
    Montant total : <?php echo $total; ?> TND
</p>
</body>
</html>


