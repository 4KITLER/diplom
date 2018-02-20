<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login page</title>
        <link  rel="stylesheet" type="text/css" href="../css/main.css">
         <script>    
            function validate(form){
                var fail = false;
                var tx1 = form.tx1.value;
                if (tx1==="" || tx1===" "){
                    fail = "Вы не ввели логин!";
                }
                if (fail){
                   alert(fail); 
                   return false;
                }
                else return true;
            }
        </script>
    </head>
    <body>
        <div class="reg">
            <form action="check.php" method="post" onsubmit="validate(this)">
                <p class="p1">Логин</p>
                <input type="text" name="tx1" class="tx1">
                <p class="p2">Пароль</p>
                <input type="password" name="tx2" class="tx2"></br>
                <input type="submit" name="sb1" class="sb1" value="Вход">
            </form>
        </div>
    </body>
</html>
