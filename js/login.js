
             function funcBefore(){
              $("#info2").text("Ожидание данных...");
            }
            function funcSuccess(data){
                $("#info2").text(data);   
                window.location = "../index.php";
            }
            
            $(document).ready(function(){
                $(".sb1").bind("click", function(){
                    $("#info2").empty();
                    var login = $('.tx1').val();
                    var password = $('.tx2').val();
                        $.ajax({
                            url: "check.php",
                            type: "POST",
                            data: ({login: login, password: password}),
                            datatype: "html",
                            beforeSend: funcBefore,
                            success: funcSuccess
                        });
                });

            });
