<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PhP</title>
</head>
<body>
    

<?php

function fibonacci($n) {
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

$meses = 13; // 13 meses contando com o momento de adesão dos coelhos
echo "Pares de coelhos ao longo de 1 ano: ";
for ($i = 0; $i < $meses; $i++) {
    echo fibonacci($i) . " ";
}

?>

</body>
</html>
