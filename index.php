<?php
session_start();


if (!isset($_SESSION['arreglo'])) {
    $arreglo = [];
    for ($i = 0; $i < 50; $i++) {
        $arreglo[] = rand(1, 100);
    }
    $_SESSION['arreglo'] = $arreglo;
}

$arreglo = $_SESSION['arreglo'];


echo "<strong>Arreglo original:</strong><br>";
echo implode(", ", $arreglo);
echo "<br><br>";
?>


<form method="post">
    <button type="submit" name="mostrar_maximos">Mostrar los 3 números más grandes</button>
</form>

<?php

if (isset($_POST['mostrar_maximos'])) {
    $copiaArreglo = $arreglo;
    
    
    rsort($copiaArreglo);
    
s
    $tresGrandes = array_slice($copiaArreglo, 0, 3);
    
    echo "<br><strong>Los 3 números más grandes son:</strong><br>";
    echo implode(", ", $tresGrandes);
}
?>
