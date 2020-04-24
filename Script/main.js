$(document).ready(function(){
    $("#customer_reg_form").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "includes/customers_reg.php",
            processData: false,
            cache: false,
            contentType: false,
            data: new FormData(this),
            success: function(response){
                //$("#responseText").slideDown();
                $("#responseText").html(response);
            }
        });
    });

    $("#login_form").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "includes/login.php",
            processData: false,
            cache: false,
            contentType: false,
            data: new FormData(this),
            success: function(response){
                //$("#responseText").slideDown();
                $("#responseText").html(response);
            }
        });
    });


});
