<?php



use PHPUnit\Framework\TestCase;



class FormularioTest extends TestCase

{

public function testFormularioSuma()

{

$_SERVER["REQUEST_METHOD"] = "POST";

$_POST["num1"] = 4;

$_POST["num2"] = 6;



ob_start();

include __DIR__ . '/../public/index.php';

$output = ob_get_clean();



$this->assertStringContainsString("Resultado: 10", $output);

}

}