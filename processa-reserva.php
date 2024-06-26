<?php
// Configuração da base de dados
$db_host = 'localhost';
$db_username = 'root'; // usuario padrão do banco de dados
$db_password = ''; // quando não definida, a senha do root é vazia
$db_name = 'hotel-page'; //Nome do banco de dados

// Conecta ao banco de dados
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Verifica se a conexão foi estabelecida
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Processa os dados do formulário
var_dump($_POST);
// Preparar os dados
$name =  $_POST['name'];
$email =  $_POST['email'];
$checkin =  $_POST['checkin'];
$checkout = $_POST['checkout'];
$room =  $_POST['room'];
$checkInTime =  $_POST['checkInTime'];
$checkOutTime =  $_POST['checkOutTime'];

// Armazenar as informações do formulário na tabela
$sql = "INSERT INTO reservations (name, email, checkin, checkout, room, checkInTime, checkOutTime)
    VALUES ('$name', '$email', '$checkin', '$checkout', '$room', '$checkInTime', '$checkOutTime')";
if (mysqli_query($conn, $sql)) {
    echo "Reserva cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar reserva: " . mysqli_error($conn);
}


// Fechar a conexão
mysqli_close($conn);
