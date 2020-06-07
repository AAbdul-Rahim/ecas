// function to close success msg 
$("document").ready(function(){

    $("#close").on("click",function(){

        $("#success_msg").hide();
    });
});
// function to close failed msg 
$("document").ready(function(){

    $("#close").on("click",function(){

        $("#fail_msg").hide();
    });
});
