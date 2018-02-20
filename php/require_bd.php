<?php

require_once 'check.php';
$conn = new mysqli($hm, $un, $pw, $db);
if ($conn->connect_error){
    die($conn->connect_error);   
}

$query = "SELECT * FROM users";
$result = $conn->query($query);
if (!$result) {
    die($conn->error); 
}

$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo 'ID'.' = '.$row['ID'].'</br>';
    echo 'login'.' = '.$row['login'].'</br>';
    echo 'password'.' = '.$row['password'].'</br>';
    
    if($row['login'] === $login && $row['password'] === $password){
        echo 'Вход выполнен!';
    }
    
}

//закрытие соединения
$result->close();
$conn->close();