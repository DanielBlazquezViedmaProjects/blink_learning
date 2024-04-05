$lista1 = [1, 4, 3, 0];
$lista2 = [1, 2, [5, 8], 4];
$lista3 = [0, [6, 2], null, 7, 1];


function sumArray($ar) {
    $sum = 0;
    foreach ($ar as $item) {
        if (is_array($item)) {
            $sum += sumArray($item);
        } elseif (is_numeric($item)) {
            $sum += $item;
        }
    }
    return $sum;
}

echo sumArray($lista1);
echo sumArray($lista2);
echo sumArray($lista3);

