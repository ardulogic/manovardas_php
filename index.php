<?php
$atstumas = rand(0, 1000);
$kuro_suvartojimas = 7.5;
$kuro_kaina = 1.3;
$bako_talpa = 40;
$mano_pinigai = 100;

$suvartota_litru = $atstumas / 100 * $kuro_suvartojimas;
$keliones_kaina = $suvartota_litru * $kuro_kaina;

$p = "Nuvažiavus $atstumas km, mašina sunaudos $suvartota_litru litrų kuro.<br>";
$p .= "Kaina: $keliones_kaina pinigų<br>";

if ($keliones_kaina > $mano_pinigai) {
    $p .= 'Aš sau negaliu to leisti';
} else {
    $p .= 'Aš sau tai galiu leisti.';
}
$p .= '<br>';

// Bronze užduoties dalis
$uzsipylimai = $suvartota_litru / $bako_talpa;
if ($uzsipylimai > 1) {
    $p .= 'Kurą pakartotinai pilti reikės';
} else {
    $p .= "Kuro pakartotinai pilti nereikės.";
}

// Silver užduoties dalis
$tolimiausia_kelione = $mano_pinigai / $kuro_kaina / $kuro_suvartojimas * 100;
$p .= "Tolimiausia galima kelionė su turimais pinigais: $tolimiausia_kelione km";
$p .= '<br>';

// Gold užduoties dalis
// Galima sumergint'i su bronze dalimi
if ($uzsipylimai > 1) {
    $p .= 'Kurą pakartotinai pilti reikės ' . ceil($uzsipylimai - 1) . ' kart(ą)us.';
}
?>
<html>
    <head>
        <title>Kuro Skaičiuoklė</title>
    </head>
    <body>
        <p><?php print $p; ?></p> 
    </body>
</html>
