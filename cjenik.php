<?php
$godinaCjenika = 2026;
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teretana Šampion | Cjenik</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
<header>
    <p class="logo">Teretana Šampion</p>
    <nav>
        <a href="index.php">Početna</a>
        <a href="cjenik.php">Cjenik</a>
    </nav>
</header>
<main>
    <h1>Članarine i cijene</h1>
    <p>Cijene vrijede za <?php echo $godinaCjenika; ?>. godinu.</p>
    <table>
        <tr>
            <th>Stavka</th>
            <th>Bez PDV-a</th>
            <th>PDV</th>
            <th>Ukupno</th>
            <th>Za učenike (−15 %)</th>
        </tr>
        <tr>
            <td>Mjesečna članarina</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
        </tr>
        <tr>
            <td>Paket 10 dolazaka</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
        </tr>
        <tr>
            <td>Godišnja članarina</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
            <td>[ ]</td>
        </tr>
        <tr class="zbroj">
            <td>Sve tri stavke zajedno</td>
            <td></td>
            <td></td>
            <td>[ ]</td>
            <td></td>
        </tr>
    </table>
    <p>Cijene ažurirane: [DANAŠNJI DATUM]</p>
</main>
<footer>
    <p>© [GODINA] Teretana Šampion · Daruvar</p>
</footer>
</body>
</html>
