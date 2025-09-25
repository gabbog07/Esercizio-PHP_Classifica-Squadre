<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome1 = $_POST["nome1"];
    $vinte1 = (int)$_POST["vinte1"];
    $pareggiate1 = (int)$_POST["pareggiate1"];
    $sconfitte1 = (int)$_POST["sconfitte1"];
    $partite1 = $vinte1 + $pareggiate1 + $sconfitte1;
    $punti1 = $vinte1 * 3 + $pareggiate1;

    $nome2 = $_POST["nome2"];
    $vinte2 = (int)$_POST["vinte2"];
    $pareggiate2 = (int)$_POST["pareggiate2"];
    $sconfitte2 = (int)$_POST["sconfitte2"];
    $partite2 = $vinte2 + $pareggiate2 + $sconfitte2;
    $punti2 = $vinte2 * 3 + $pareggiate2;

    echo "<h2>Classifica</h2>";

    if ($punti1 > $punti2) {
        echo "<p>$nome1 = $punti1</p>";
        echo "<p>$nome2 = $punti2</p>";
    } else {
        echo "<p>$nome2 = $punti2</p>";
        echo "<p>$nome1 = $punti1</p>";
    }

    if ($partite1 != $partite2) {
        echo "<p><b>Le due squadre hanno giocato un numero di partite diverso.</b></p>";
    }
}
?>