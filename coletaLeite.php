<?php include 'sistema/database.php';
  $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_STRING);

  $cd_criador = '';
  $dt_coleta = '';
  $cd_gado_leiteiro = '';

  if($id != NULL) {
    $sql = sprintf("SELECT * FROM `tb_coleta_leite` WHERE `CD_CODIGO` = '%s'", $id);
    $consulta = execute_query($sql);

    if(isset($consulta)) {
      foreach($consulta as $dado) {
        $cd_criador = $dado['CD_CRIADOR'];
        $cd_gado_leiteiro = $dado['CD_GADO_LEITEIRO'];
        $dt_coleta = $dado['DT_COLETA'];
      }
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Muuuh</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favVaca.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>Muuuuh</span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li class="drop-down"><a href="">Funções</a>
            <ul>
              <li><a href="gado.php">Gado</a></li>
              <li><a href="coletaLeite.php">Coleta de leite</a></li>
              <li><a href="gadoLeiteiro.php">Gado leiteiro</a></li>
              <li><a href="rebanho.php">Rebanho</a></li>
              <li><a href="fazendeiro.php">Fazendeiro</a></li>
              <li><a href="criador.php">Criador</a></li>
            </ul>
          </li>
          <li><a href="#contact">Coleta</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Coleta de leite</h2>
        </div>

        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="sistema/processar.php" method="post" class="email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                    Criador: <input type="number" name="name" class="form-control" id="name" placeholder="Digite o criador" data-rule="minlen:4" data-msg="" value="<?php echo $cd_criador; ?>"/> 
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  Coleta: <input type="date" class="form-control" name="coleta" id="coleta" placeholder="Digite dados da coleta" data-rule="text" data-msg="l" value="<?php echo $dt_coleta; ?>"/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                Gado leiteiro: <input type="number" class="form-control" name="gado" id="gado" placeholder="Digite o código do gado leiteiro" data-rule="minlen:4" data-msg="" min="0" value="<?php echo $cd_gado_leiteiro; ?>"/>
                <div class="validate"></div>
              </div>
              <div class="text-center">
                <button type="submit" onclick="gravar();"><?php echo ($id != NULL) ? 'Alterar' : 'Cadastrar'; ?></button>
                <button type="reset">Limpar</button>
              </div>
              <input type="hidden" name="tipo" value="tb_coleta_leite">
              <input name="id" id="id" type="hidden" value="<?php echo $id; ?>">
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Us Section -->
    <section class="tabela" data-aos="fade-up" data-aos-delay="300">
          <?php include 'listar/listarColeta.php' ?>
          
    </section>

  </main><!-- End #main -->


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
  <script src="assets/js/validacao.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      let coleta = document.querySelector("#coleta");
      let coletaDoBanco = "<?php echo $dt_coleta; ?>";
      if(coletaDoBanco == '') {
        coleta.value = getDateString();
      }
    });
  </script>

</body>

</html>