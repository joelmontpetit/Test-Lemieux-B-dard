<?php
session_start();
//check if session already exist
if (isset($_SESSION['loggedIN'])) {
    header("Location: hidden.php");
    exit();
} 

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <?php include 'includes/navbar.php'; ?>



<!--modal-->

<div class="modal" id="myModal" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content p-5">
      <div class="modal-header">
        <h5 class="modal-title fs-1 fw-bold">Lorem Ipsum</h5>
        <button type="button" class="btn-close fs-1 fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fw-bold fs-3 text-decoration-underline">Lorem Ipsum</p>
        <p class="mb-5 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ducimus est mollitia architecto quas deserunt 
            vitae perferendis exercitationem soluta nemo voluptatum officiis itaque eius harum, repudiandae explicabo. 
            Architecto, iure. Fugiat velit, animi sapiente quo, numquam voluptates impedit amet, quidem repellendus 
            expedita consequuntur sequi maxime adipisci reprehenderit quas soluta sed tenetur!</p>
      </div>
      
    </div>
  </div>
</div>


<!--Showcase-->

<section class="container-fluid text-light mb-5" id="head">
    <div class="container">
            <div class="title">
                <h1 class="sm-pt-2 d-md-flex justify-content-center py-5 fw-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </h1>
            </div>
            
    </div>
</section>


<!--Title slider-->

<section class="slider p-5">
    <div class="container py-5 text-sm-start">
        <h2 class="fw-bold fs-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporx</h2> 
    </div>



<!--Slider-->    

    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/image01.jpg" class="d-block w-100" alt="poules">
                </div>
                <div class="carousel-item">
                    <img src="img/image02.jpg" class="d-block w-100" alt="Poules">
                </div>
                <div class="carousel-item">
                    <img src="img/image03.jpg" class="d-block w-100" alt="Poules">
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<!--LogIn-->

<section class="loginForm">
    <div class="container pt-5 pb-5" id="loginForm">
        
        <div class="d-md-flex justify-content-between">
            <div class="col-md-4 pb-5">
                <div class="login-form bg-light">
                    <form action="index.php" method="post" class="row g-3 needs-validation" novalidate>
                        <h2><span class="fw-bold fs-2">Login</span></h2>
                        <div class="col-12">
                            <label class="logtext fs-3 fw-normal" >User name</label>
                            <input type="text" name="username" id="email" class="form-control" placeholder="Username" required="required">
                        </div>
                        <div class="col-12">
                            <label class="logtext fs-3 fw-normal">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    By checking here, I confirm that I am lorem 
                                    ipsum professional currently practicing in Canada.
                                </label>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-8 mx-start">
                            <button type="button" class="btn btn-dark btn-lg float-end" id="login">
                            <div class="buttonText">   
                            LOGIN
                            </div> 
                            <div class="buttonIcon">
                                <i class="bi bi-chevron-right bi-4x"></i>
                            </div>
                            
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="pb-3 mb-3"><span class="title-bold fw-bold fs-2">Lorem ipsum</span></h3>
                <ul class="ul-font ml-4">
                    <li class="fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li class="fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li class="fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                </ul>            
            </div>    
    </div>
</section>

<!--Is valid-->

<!--
<script>

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

</script>
-->


<!--LoginPHP-->

<?php 
    

    if (isset($_POST['login'])) {
        $connection = new mysqli( "localhost", "root","","logintestlemieux");
        //data
        //security

        $email = $connection->real_escape_string($_POST['emailPHP']);
        $password = md5($connection->real_escape_string($_POST['passwordPHP']));

        //Check in table
        $data = $connection->query("SELECT firstName FROM users WHERE email='$email' AND password='$password'");
        if ($data->num_rows > 0) { //Everything OK , lets login
            $_SESSION['loggedIN'] = '1';
            $_SESSION['email'] = $email;
            exit('<font color="green">Login success</font>');
        } else 
            exit('Please check your inputs');
            
        
       
    }
?>


<!--Cards-->

<section>
    <div class="container pt-5">
        <div class="row g-4">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title pb-4 fw-bold fs-1">Lorem ipsum</h2>
                            <p class="card-text fs-3">
                                <span class="fw-bold">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</span> 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title pb-4 fw-bold fs-1">Lorem ipsum</h2>
                            <p class="card-text fs-3">
                                <span class="fw-bold">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</span> 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title pb-4 fw-bold fs-1">Lorem ipsum</h2>
                            <p class="card-text fs-3">
                                <span class="fw-bold">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</span> 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip
                            </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Paragraphe-->    

</section>
    <div class="container pt-5 mb-5"> 
        <div class="row align-items-center justify-content-between pb-5 mb-4 fs-3">
            <div class="link"><a href="x" class="black-link"><span>Click here</span></a> to lorem ipsum dolor sit.</div>
        </div>
            <div class="col-md" id="paragEnd">
                <div>
                    <p class="condlight">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque 
                        porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore 
                        et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, 
                        quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut 
                        aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
                        qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum 
                        qui dolorem eum fugiat quo voluptas nulla pariatur.
                    </p>
                </div>
            </div>
    </div> 
</Section>



<!--Policy-->

<div class="container pt-5 pr-4 mb-5">
    <div class="row">
        <div class="col">
        <p class="fs-4">Terms of use &nbsp;&nbsp;&nbsp;&nbsp; Policy</p>
        </div>
    </div>
</div>
  

<!--End-->

<?php include 'includes/footer.php'; ?>
      
<!--<script src="js/vendor/bootstrap.min.js"></script>-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


<script type="text/javascript" src="js/main.js"></script>


<!--jQuery login-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
    crossorigin="anonymous"></script>


    <script type="text/javascript">
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
    </script>

<!--Modal load-->

<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>



</body>
</html>
