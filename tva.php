<?php
$prixHorsTaxes = 100;
$tauxTva = 19.6;
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Calcul de TVA</title>
</head>
<body>
    <h1>Calcul de TVA</h1>
    <ul>
        <li>Prix hors taxes = <?php echo $prixHorsTaxes; ?> €</li>
        <li>Taux de TVA = <?php echo $tauxTva; ?>%</li>
        <li>Prix TTC = <?php echo $prixHorsTaxes * (1 + $tauxTva / 100); ?> €</li>
    </ul>
</body>
</html>