$(document).ready(function(){
    $(".pwd1").change(function{
        var password = $(".pwd1").val();
        if (password == 1234){
            $("#info2").text("Неправильный формат пароля!");
        }
    });
});
