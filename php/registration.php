<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration page</title>
        <link  rel="stylesheet" type="text/css" href="../css/reg.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
       
        <script > 
            function funcBefore(){
              $("#info").text("Ожидание данных...");
            }
            function funcSuccess(data){
                $("#info2").text(data);
                $window.setTimeout(location, 3000); 
            }
            
            function location() {
                window.location = 'login.php';
            }

            $(document).ready(function(){
                $(".sb1").bind("click", function(){
                    $("#info2").empty();
                    var login = $('.tx1').val();
                    var password1 = $('.tx3').val();
                    var password2 = $('.tx4').val();
                    var email = $('.tx2').val();
                        $.ajax({
                            url: "check2.php",
                            type: "POST",
                            data: ({login1: login, password1: password1, password2: password2, email: email}),
                            datatype: "html",
                            beforeSend: funcBefore,
                            success: funcSuccess
                        });
                });
                
            });
        </script>  
        
        </head>
    <body>
       <div id="info2"></div>
        <div class="name">
            Регистрация
        </div>
        <div class="reg">
            
                <p class="p1">Имя пользователя:</p>
                <input type="text" name="tx1" class="tx1">
               
                
                <p class="em">Email адрес:</p>
                <input type="text" name="tx2" class="tx2">
                
                <p class="pwd1">Пароль:</p>
                <input type="password" name="pwd1" class="tx3"></br>
                
                <p class="pwd2">Повторите пароль:</p>
                <input type="password" name="pwd2" class="tx4"></br>
                
                <input type="submit" name="sb1" class="sb1" value="Регистрация">
               
        </div>
    </body>
</html>
