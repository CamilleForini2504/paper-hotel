<?php

// Configuração da base de dados
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'hotel-page';

// Conecta ao banco de dados
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Verifica se a conexão foi estabelecida
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
// Criar tabela para armazenar as reservas
$sql = "CREATE TABLE IF NOT EXISTS reservations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    checkin DATE,
    checkout DATE,
    room VARCHAR(255),
    checkInTime TIME,
    checkOutTime TIME
);";

if (mysqli_query($conn, $sql)) {
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . mysqli_error($conn);
}


// Fechar a conexão com o banco de dados
mysqli_close($conn);
