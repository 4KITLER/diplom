
    //main function

    function funcBefore(){
      $("#info2").text("Ожидание данных...");
    }
    function funcSuccess(data){
        $("#info2").text(data);   
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
                    data: ({login: login, password1: password1, password2: password2, email: email}),
                    datatype: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
        });
        $(".tx1").change(function(){
            alert("Элемент был изменен!");
        });
    });
            
