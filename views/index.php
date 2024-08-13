

<?php

include_once 'db.php';
include_once 'livro.php';

$database = new Database();
$db = $database->getConnection();

$livro = new Livro($db);

$stmt = $livro->read();


echo '<table class="table table-bordered">';
echo '<tr><th>titulo</th><th>autor</th><th>genero</th></tr>';


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    echo '<tr>';
    echo '<td>'. $titulo . '</td>';
    echo '<td>'. $autor . '</td>';
    echo '<td>'. $genero. '</td>';
    echo '</tr>';
}

echo '</table>';



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>