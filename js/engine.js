 /*Login with Ajax */

$(document).ready(function() {

    $('#login-form').submit(function(e) {

        var data = $(this).serialize();

        $.ajax ({
            url: '../login_form/ajaxHandler.php',
            method: 'POST',
            data: data,
        beforeSend: function() {
            $('#submitButton').html("Sending...");
        },
        success: function(response){
            if (response == "Welcome") {
                window.location.href = "../login_form/home.php";
            } else {
                $('#login-alert').show("fast");
            }
        },
        erorr: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }

        });
        return false;
    });
});

/* Form Validation */

 $( document ).ready( function () {
     $( "#login-form" ).validate( {
         rules: {
             password: {
                 required: true,
                 minlength: 5
             },
             email: {
                 required: true,
                 email: true
             }
         },
         messages: {
             password: {
                 required: "Please provide a password",
                 minlength: "Your password must be at least 4 characters long"
             }
         },
         errorElement: "em",
         errorPlacement: function ( error, element ) {
             // Add the `help-block` class to the error element
             error.addClass( "help-block" );

             if ( element.prop( "type" ) === "checkbox" ) {
                 error.insertAfter( element.parent( "label" ) );
             } else {
                 error.insertAfter( element );
             }
         },
         highlight: function ( element, errorClass, validClass ) {
             $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
         },
         unhighlight: function (element, errorClass, validClass) {
             $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
         }
     });

 });