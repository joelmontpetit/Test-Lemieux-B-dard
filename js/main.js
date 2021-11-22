
//validate

(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()


//jQuery login

$(document).ready(function() {
    //this code
    $("#login").on('click', function() {
        //capt input
        var email = $("#email").val();
        var password = $("#password").val();
        //check if empty
        if (email== "" || password == "")
            alert("Please check your input");
        else {
            $.ajax(
            {
                    url:'index.php',
                    method: 'POST', 
                    data: {
                        login: 1,
                        //key expected in php
                        emailPHP: email,
                        passwordPHP: password
                    },
                    success: function (response) {
                        $("#response").html(response);

                        if (response.indexOf('success') >= 0)
                            window.location ='hidden.php';
                    },
                    dataType: 'text'
                }
            );
        }



        //send details to server    
        
    });
});



//Modal load 

$(window).on('load', function() {
    $('#myModal').modal('show');
});

