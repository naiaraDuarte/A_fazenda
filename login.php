<?php
    include 'sistema/database.php';
    session_start();

    if(!empty($_SESSION['id'])){
        header('Location: index.php');
    }

    if(!empty($_POST)) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM `usuarios` WHERE `username` = '$username' AND `senha` = '$password'";
        $resultado = execute_query($sql);
        //$resultado = array("id"=>0, "username"=>"will", 'email'=>"wil@123");

        if(isset($resultado)) {
            foreach($resultado as $usuario) {
                if(isset($usuario)){
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['username'] = $usuario['username'];
                    $_SESSION['email'] = $usuario['email'];
                    header("Location: index.php");
                } 
            }
        }         
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favVaca.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <main id="main" class="login-main">
        <section id="login" class="info-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="" method="post" class="">
                            <div class="form-row">
                                <div class="col-lg-12 form-group">
                                    Login: <input type="text" name="username" class="form-control" id="username" placeholder="Nome de Usuário" data-rule="minlen:4" data-msg=""/> 
                                <div class="validate"></div>
                                </div>
                                <div class="col-lg-12 form-group">
                                Senha: <input type="password" class="form-control" name="password" id="password" placeholder="Senha" data-rule="text" data-msg="l"/>
                                <div class="validate"></div>
                                </div>
                            </div>
                            <div class="text-center col-lg-12 form-group">
                                <button type="submit">Logar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>