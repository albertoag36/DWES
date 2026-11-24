<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 6;
    $b = 2;
    $original = $a;

    $suma = $a + $b;
    $resta = $a - $b;
    $multiplicacion = $a * $b;
    $division = $a / $b;
    $resto = $a % $b;
    $potencia = $a ** $b;
    $negacion = -$a;

    $igual = $a === $b;
    $distinto = $a<>$b;
    $noIdentico = $a !== $b;
    $menor = $a < $b;
    $mayor = $a > $b;
    $menorIgual = $a <= $b;
    $mayorIgual = $a >= $b;

    $and = $a && $b;
    $or = $a || $b;
    $xor = ($a xor $b);
    $not = !$a;

    $asignacion = $b;
    $asignacionSuma = ($a += $b);
    $a = $original;
    $asignacionResta = ($a -= $b);
    $a = $original;
    $asignacionProducto = ($a *= $b);
    $a = $original;
    $asignacionDivision = ($a /= $b);
    $a = $original;
    $asignacionResto = ($a %= $b);
    $a = $original;
    $concatenacion = ($a .= $b);
    $a = $original;
    $incremento = ++$a;
    $a = $original;
    $decremento = --$a;
    $a = $original;

    echo '--- Operaciones aritméticas ---';
    echo "<p>Suma a + b --> $a + $b = $suma</p>";
    echo "<p>Resta a - b --> $a - $b = $resta</p>";
    echo "<p>Multiplicación a * b --> $a * $b = $multiplicacion</p>";
    echo "<p>División a / b --> $a / $b = $division</p>";
    echo "<p>Resto a % b --> $a % $b = $resto</p>";
    echo "<p>Potencia a % b --> $a ** $b = $potencia</p>";
    echo "<p>Negación -a --> a = $a --> $negacion</p>";
    echo '--- Operaciones comparación ---';
    echo "<p>Igual a = b --> $a = $b --> $igual</p>";
    echo "<p>Distinto a <> b --> $a <> $b --> $distinto</p>";
    echo "<p>No idéntico a !== b --> $a !== $b --> $noIdentico</p>";
    echo "<p>Menor a < b --> $a > $b --> $menor</p>";
    echo "<p>Mayor a > b --> $a > $b --> $mayor</p>";
    echo "<p>Menor o igual a <= b --> $a >= $b --> $menorIgual</p>";
    echo "<p>Mayor o igual a >= b --> $a >= $b --> $mayorIgual</p>";
    echo '--- Operaciones lógicos ---';
    echo "<p>AND a && b --> $a && $b --> $and</p>";
    echo "<p>OR a || b --> $a || $b --> $or</p>";
    echo "<p>XOR a xor b --> $a xor $b --> $xor</p>";
    echo "<p>NOT !a --> !$a --> $not</p>";
    echo '--- Operaciones asignación ---';
    echo "<p>Asignación a = b --> $a = $b --> $asignacion</p>";
    echo "<p>Asignación suma a += b --> $a += $b --> $asignacionSuma</p>";
    echo "<p>Asignación resta a -= b --> $a -= $b --> $asignacionResta</p>";
    echo "<p>Asignación producto a *= b --> $a *= $b --> $asignacionProducto</p>";
    echo "<p>Asignación división a /= b --> $a /= $b --> $asignacionDivision</p>";
    echo "<p>Asignación resto a %= b --> $a %= $b --> $asignacionResto</p>";
    echo "<p>Concatenación a .= b --> $a .= $b --> $concatenacion</p>";
    echo "<p>Incremento ++a --> a = $a --> $incremento</p>";
    echo "<p>Decremento --a --> a = $a --> $decremento</p>";
    ?>
</body>

</html>