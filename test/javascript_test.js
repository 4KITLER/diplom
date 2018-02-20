
    //main function
    function main(){
        var answer = 2;
        if answer == 1 {
            alert("Answer 1");
        }
        else alert("Answer 2"); 
    }

    $(document).ready(function(){
        var answer = $(".tx1").text();
        $(".sb1").bind("click", function(){
            var answer = 2;
            if answer == 1 {
                alert("Answer 1");
            }
            else alert("Answer 2"); 
        });
    });
            
