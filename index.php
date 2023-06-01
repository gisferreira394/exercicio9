<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
        
        <input type="number" name="soma">
        <button type="submit" name="Verificar">Converta</button>
    </form>

    <?php

$n;

if(isset($_POST["Verificar"])){
    $n = $_POST["soma"];
$resultado = ($n**2);
}

echo "O número ". $n . " ao quadrado é " . $resultado;

?>
</body>
</html>