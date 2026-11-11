<?php
$arreglo = [];
for ($i = 0; $i < 50; $i++) {
    $arreglo[] = rand(1, 100);
}
echo implode(", ", $arreglo);
?>
