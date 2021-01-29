<?php

echo 'Testando conexão ';

$servername = '192.168.15.121';
$username = 'phpuser';
$password = 'pass';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die('Conexão falhou: ' . $conn->connect_error);
}
echo 'Connectado com sucesso';
?>