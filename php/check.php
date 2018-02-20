<?php
    //echo '<pre>';var_dump($_POST);echo '</pre>';exit(); 
    sleep(3);

    $url = '../index.php';

    //Вход на страницу
    //данные для подключения к БД
    $hm = 'localhost';
    $db = 'test';
    $un = 'root';
    $pw = '123456789';
    
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    
    
    $conn = new mysqli($hm, $un, $pw, $db);
    if ($conn->connect_error){
        die($conn->connect_error);   
    }

    
    //Проверка на существование данного логина
    $query_test =  "SELECT * FROM users WHERE (login = '$login' AND password = '$password')";
    $result_test= mysqli_query($conn, $query_test);
    if( mysqli_num_rows($result_test) == 1 and ($login != 'admin')){
        echo "Вход выполнен!";   
        exit();
       

    }
    else if($login=='admin' and $password='admin'){
        echo "Вход выполнен,Admin!";
        exit();
        /*$query = "SELECT * FROM users";
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
                echo 'Вход выполнен!'.'</br>';
            }
            else {
                echo '</br>'.'Данные не верны!';
            }
        }*/
    }
    else{
        echo "Ошибка ввода!";
        sleep(3);
        exit();        
    }

    $login = "";
    //закрытие соединения
    $result->close();
    $conn->close();