<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 30.01.2018
 * Time: 11:28
 */
// funktsioon soodustuse arvutamiseks
function soogiHind($taisHind, $soodusKaart = false, $kasOledOpilane = false){
    // funktsiooni sisu
    $soodusProtsent = 15; //
    $soodusHind = $taisHind;

    if ($soodusKaart == true){
        $soodusHind = $taisHind * ((100 - $soodusProtsent) / 100);
    }
    if ($kasOledOpilane){
        $soodusHind = $soodusHind - $toetus;
        // soodushind - opilastoetus; // - operaatori lühendatud kuju
    }
    return $soodusHind;
}// funtktsiooni lõpp

// testimiseks paneme erinevad väärtused paika, kasutame selleks massiivi (sooduskaart, kasOledOpilane
// kasutajate tabel (massiivis)
// esimene õpilased
// teine õpetajad
// kolmas külalised
$kasutajad = array(
    array(
        'roll' => 'opilane',
        'soodus' => true,
        'opilaskaart' => true
    ),
    array(
        'roll' => 'opetaja',
        'soodus' => true,
        'opilaskaart' => false
    ),
    array(
        'roll' => 'kylaline',
        'soodus' => false,
        'opilaskaart' => false
    )
);
$praed = array(
    array(
        'prae nimetus' => 'Šnitsel',
        'prae kirjeldus' => 'Šnitsel sealihast, lisand, kaste, salat, leib',
        'prae taishind' => '2.58'
    ),
    array(
        'prae nimetus' => 'Seapraad',
        'prae kirjeldus' => 'Seapraad, lisand, kaste, salat, leib',
        'prae taishind' => '2.65'
    ),
    array(
        'prae nimetus' => 'Hakklihapallid tomatikastmes',
        'prae kirjeldus' => 'Hakklihapallid, lisand, laste, salat, leib',
        'prae taishind' => '1.30'
    ),
    array(
        'prae nimetus' => 'Kalasupp',
        'prae kirjeldus' => 'Supp, leib',
        'prae taishind' => '1.25'
    ),
    array(
        'prae nimetus' => 'Rassolnik',
        'prae kirjeldus' => 'Supp, hapukoor, leib',
        'prae taishind' => '1.20'
    )
);
// vaatame kasutajate massiivi läbi
// for on tsükli muutuja defineerija, tingimuse ja kehtivuse kontroll
foreach ($kasutajad as $kasutaja){
    foreach ($kasutajad as $voti=>$vaartus){
        // kutsume funktsiooni tööle
        $soogiHind = sooogiHind( taisHind 2.65, $kasutaja['soodus'], $kasutaja'opilaskaart')};
    echo 'Prae hind '.$kasutaja['roll'].' = '.round($soogiHind, precision 2).' €<br/>';
}