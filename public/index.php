<?php



require_once __DIR__ . '/../vendor/autoload.php';



use App\Suma;



$resultado = "";

$num1 = "";

$num2 = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (isset($_POST["limpiar"])) {

$num1 = "";

$num2 = "";

$resultado = "";

} else {

$num1 = $_POST["num1"] ?? "";

$num2 = $_POST["num2"] ?? "";



try {

$resultado = Suma::sumar($num1, $num2);

} catch (Exception $e) {

$resultado = $e->getMessage();

}

}

}

?>



<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<title>Suma</title>

</head>

<body>



<h2>Sumar dos números</h2>



<form method="POST">

<input type="text" name="num1" value="<?= htmlspecialchars($num1) ?>"><br><br>

<input type="text" name="num2" value="<?= htmlspecialchars($num2) ?>"><br><br>



<button type="submit">Sumar</button>

<button type="submit" name="limpiar">Limpiar</button>

</form>



<?php if ($resultado !== ""): ?>

<h3>Resultado: <?= htmlspecialchars($resultado) ?></h3>

<?php endif; ?>



</body>

</html>