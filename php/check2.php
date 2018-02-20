<?php

    /* Проверка передачи данных на сервер
       echo '<pre>';var_dump($_POST);echo '</pre>';exit(); */
    //htmlspecialchars
    
     //данные для подключения к БД
    $hm = 'localhost';
    $db = 'test';
    $un = 'root';
    $pw = '123456789';
    
     //данные
    $login =htmlspecialchars($_POST['login']);
    $password1 =htmlspecialchars( $_POST['password1']);
    $password2 = htmlspecialchars($_POST['password2']);
    $email = htmlspecialchars($_POST['email']);

    function test($login, $password1, $password2){
        if ($login === ' ' or  $login === ''){
            echo 'Пустое имя ';
            exit();
        }
        if ($password1 != $password2){
            echo 'Пароли не совпадают ';
            exit();
        }
    };

    test($login, $password1, $password2);
    
    $conn = new mysqli($hm, $un, $pw, $db);
    if ($conn->connect_error){
        die($conn->connect_error);   
    }

    //Запрос к БД 
    $query_test =  "SELECT * FROM users WHERE login = '$login'";
    $result_test= mysqli_query($conn, $query_test);
    
    //Проверка на существование логина
    if( mysqli_num_rows($result_test) == 0){
        $query = "INSERT INTO  users(login,password) VALUES ('$login', '$password1')";
        $result = $conn->query($query);
        if($result == true){ 
           echo "Ваш аккаунт зарегистрирован. Перенаправление на страницу входа через 3 секунды."; 
        }
        else {echo "Ваш аккаунт не зарегистрирован!";}
       
    }
    else {
        echo 'Такой логин уже существует!';
        $login = "";
    }
    
    //echo "Ничего не произошло";
    
    //Закрытие соединения
    mysqli_close($conn);
   
   
   
 
  