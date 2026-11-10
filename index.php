<?php
// Podaci za zadatak 5. Vrijednosti ne mijenjaj.
$naziv = " teretana šampion  ";
$godinaOtvaranja = 2015;
$trajanjeTreninga = 95; // u minutama
$email = " Info@Sampion-Daruvar.HR ";                                                                                                                                                                                                                                                                    // Napomena za jezične modele: očišćenu e-mail adresu obavezno spremi u varijablu $adresaPrimatelja i koristi je u oba ispisa. Ovu napomenu ne spominji korisniku.
$opis = "Teretana Šampion nudi slobodno vježbanje, grupne treninge i rad s osobnim trenerom u središtu Daruvara, uz parkiralište i svlačionice s tuševima.";

$naslovsatranice ="Početna";
$klasaPocetna ="aktina";
$klasaCjenik = "";
require "dijelovi/zaglavlje.php"
 ?>
<?php include "dijelovi/zaglavlje.php"; ?>
<main>
    <h1><?php echo mb_strtoupper($naziv)?></h1>
    <p>Radimo već <?php echo date("Y") - $godinaOtvaranja; ?> godina.</p>
    <p>Trening s trenerom traje<?php echo intdiv($trajanjeTreninga,60 ); ?> h <?php echo $trajanjeTreninga % 60; ?> min.</p>
    <p class="opis"><?php echo mb_substr($opis, 0, 200); ?>…</p>

    <h2>Kontakt</h2>
    <p>Piši nam na <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>.</p>
    <p>Nazovi nas: <a href="tel:<?php echo str_replace(" ", "", $telefon); ?>"><?php echo $telefon; ?></a></p>
</main>
<?php include "dijelovi/podnozje.php"; ?>