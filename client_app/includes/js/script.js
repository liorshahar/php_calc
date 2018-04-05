var myfunc;

var num1;
var num2;
var num3;
var ret

function myFunction(thisObj){
    myfunc = thisObj.name;
    $(thisObj).css("background-color", "gray");
}

$(document).ready(function(){

    $("#add_btn").click(function(){
        myFunction(this);
    });

    $("#avg_btn").click(function(){
        myFunction(this);
    });

    $("#mult_btn").click(function(){
        myFunction(this);
    });

    $("#reset_btn").click(function(){
        location.reload();
    });

    $("#post_btn").click(function(){

        $("#post_btn").css("background-color", "gray");
        num1 = $("#num1").val();
        num2 = $("#num2").val();
        num3 = $("#num3").val();

        $.post(
            '../service_calculator/service.php',
            {func:myfunc , num1 , num2 , num3 },
            function( data ) {
                $(".result").append(" " + data.retVal);
                console.log( "Return data:" + " " + data.retVal);
            });

    });

    $("#get_btn").click(function(){

        $("#get_btn").css("background-color", "gray");
        num1 = $("#num1").val();
        num2 = $("#num2").val();
        num3 = $("#num3").val();


        $.get(
            '../service_calculator/service.php',{func:myfunc , num1 , num2 , num3},
            function( data ) {
                $(".result").append(" " + data.retVal);
                console.log( "Return data:" + " " + data.retVal);
            });

    });

    $("#put_btn").click(function(){

        $("#put_btn").css("background-color", "gray");
        num1 = $("#num1").val();
        num2 = $("#num2").val();
        num3 = $("#num3").val();

        var dataObj = {func:myfunc , num1 , num2 , num3};
        $.ajax({
            url: '../service_calculator/service.php',
            data: dataObj,
            type: 'PUT',
            success: function(data){
                $(".result").append(" " + data.retVal);
                console.log( "Return data:" + " " + data.retVal);
            }
        });

    });

});