<?php $vodkaPrice = 119; $homelessMoney = 130; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "Cena vodky: " . $vodkaPrice;
echo "<br> Penize bezdomovce: " . $homelessMoney . "<br>"; 
echo "<br>Peníze bezdomovce před návštěvou večerky: " . $homelessMoney . "<br>";

if($homelessMoney > $vodkaPrice ) {
    echo "</br> Úspěšne sis koupil vodku. Toho samého večera tě srazilo auto při přecházení přes silnici, nevěnoval jsi mu pozornost,";
    echo "</br> jelikož si byl zaneprázdněn hltáním vodky z lahve. Chvíli ležíš na zemi v bolestech v kaluži mixu krve a vodky a sleduješ noční oblohu se slzama v očích a říkáš si"; 
    echo "</br> 'Proč musím tak krutě doplatit na všechna má rozhodnutí? Co jsem komu udělal? Chybí mi můj domov... moje práce... moje žena'";
    echo "</br> a krátce po té ztratíš vědomí. Než na místo dorazila ambulance dávno jsi zemřel.";
    echo "</br> </br> Tragický Konec Objeven! Zahraj si znovu s jiným nastavením měny abys viděl ten další!";
    $homelessMoney = $homelessMoney - $vodkaPrice;
 } elseif($homelessMoney < 119) {
     echo "</br> Bohužel přes všechnu tvou snahu našetřit si na svůj oblíbený alkohol se ti to nepodařilo.";
     echo "</br> Odcházíš z obchodu s prázdnýma rukama a jsi připraven prožít opět noc na pytel, Když tu najednou za tebou přijde nějaká žena a řekne:"; 
     echo "</br> Dobrý den, vypadáte, že máte problémy, napadlo mě vám pomoct, znám jedno místo, kde pomáhají lidem, jako jste vy, jídlo tam mají levné a můžete si tam zaplatit i přespání které je opravdu levné než cokoliv v tom obchodu ze kterého jsem vás viděla odcházet";
     echo "</br> Ty jí hezky zdvořile poděkuješ a vydáš se na to místo, kam tě navedla tato žena";
     echo "</br> Další den si začneš hledat práci s odhodláním najít si práci a nějaké levné malé bydlení.";
     echo "</br> Sice ti to půjde možná blbě, ale ty se nevzdáváš.";
     echo "</br> </br> Šťastný konec... MOŽNÁ???";
 } elseif ($vodkaPrice < 100) {
    echo "Cena vodky spadla nyní si ji můžeš zakoupit";
    echo "Díky slevě sis úspěšně koupil vodku.";
    echo "</br> Toho samého večera tě srazilo auto při přecházení přes silnici, nevěnoval jsi mu pozornost,";
    echo "</br> jelikož si byl zaneprázdněn hltáním vodky z lahve. Chvíli ležíš na zemi v bolestech v kaluži mixu krve a vodky a sleduješ noční oblohu se slzama v očích a říkáš si"; 
    echo "</br> 'Proč musím tak krutě doplatit na všechna má rozhodnutí? Co jsem komu udělal? Chybí mi můj domov... moje práce... moje žena'";
    echo "</br> a krátce po té ztratíš vědomí. Než na místo dorazila ambulance dávno jsi zemřel.";
    echo "</br> </br> Tragický Konec Objeven! Zahraj si znovu s jiným nastavením měny abys viděl ten další!";
    echo "<br>Peníze bezdomovce po návštěvě večerky: " . $homelessMoney . "<br>";
}
echo "</br> </br> Peníze bezdomovce po návštěvě večerky: " . $homelessMoney . "<br>";
?>

</body>
</html>