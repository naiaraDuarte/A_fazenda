<?php include 'sistema/database.php';
  $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_STRING);

  $nm_nome = '';
  $dt_nasc = '';
  $nm_cpf = '';
  $nm_rg = '';
  $nm_sexo = '';
  $nm_endereco = '';
  $vl_salario = '';

  if($id != NULL) {
    $sql = sprintf("SELECT * FROM `tb_criador` WHERE `CD_CODIGO` = '%s'", $id);
    $consulta = execute_query($sql);

    if(isset($consulta)) {
      foreach($consulta as $dado) {
        $nm_nome = $dado['NM_NOME'];
        $dt_nasc = $dado['DT_NASC'];
        $nm_cpf = $dado['NM_CPF'];
        $nm_rg = $dado['NM_RG'];
        $nm_sexo = $dado['NM_SEXO'];
        $nm_endereco = $dado['NM_ENDERECO'];
        $vl_salario = $dado['VL_SALARIO'];
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
              <li><a href="coletaLeite.php">Coleta de leite</a></li>
              <li><a href="gadoLeiteiro.php">Gado leiteiro</a></li>
              <li><a href="fazendeiro.php">Fazendeiro</a></li>
              <li><a href="rebanho.php">Rebanho</a></li>
              <li><a href="gado.php">Gado</a></li>
              <li><a href="criador.php">Criador</a></li>
            </ul>
          </li>
          <li><a href="#contact">Criador</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Criador</h2>
        </div>

        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="processar.php" method="post" class="email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                    Nome: <input type="text" name="nm_nome" class="form-control" id="nm_nome" placeholder="Digite o nome" data-rule="minlen:4" data-msg="" value="<?php echo $nm_nome; ?>"/> 
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                    Data nascimento: <input type="date" name="dt_nasc" class="form-control" id="dt_nasc" data-rule="minlen:4" data-msg="" value="<?php echo $dt_nasc; ?>"/> 
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                    CPF <input type="text" name="nm_cpf" class="form-control" id="nm_cpf" data-rule="minlen:4" data-msg="" maxlength="14" onkeyup="validar(this)" value="<?php echo $nm_cpf; ?>"/> 
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                    RG <input type="text" name="nm_rg" class="form-control" id="nm_rg" placeholder="Digite o RG" data-rule="minlen:4" data-msg="" onkeypress="validar(this)" value="<?php echo $nm_rg; ?>"/> 
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  Endereço <input type="text" name="nm_endereco" class="form-control" id="nm_endereco" placeholder="Digite o endereço" data-rule="minlen:4" data-msg="" value="<?php echo $nm_endereco; ?>"/> 
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                Salário <input type="number" name="vl_salario" class="form-control" id="vl_salario" placeholder="Digite o salário" data-rule="minlen:4" data-msg="" value="<?php echo $vl_salario; ?>"/> 
              <div class="validate"></div>
            </div>          
              </div>
                <div class="col-lg-7 form-group">
                  Sexo 
                  <label>
                    <input name="nm_sexo" type="radio" id="Feminino" value="F" <?php echo ($nm_sexo == 'F' || $id == NULL) ? 'checked' : '' ?>/>
                    <span>Feminino</span>
                </label>
                <label>
                    <input name="nm_sexo" type="radio" id="masculino" value="M" <?php echo ($nm_sexo == 'M' || $id == NULL) ? 'checked' : '' ?>/>
                    <span>Masculino</span>
                </label>                  
                <div class="validate"></div>
              </div>                  
              <div class="text-center">
              <button type="submit" onclick="gravar();"><?php echo ($id != NULL) ? 'Alterar' : 'Cadastrar'; ?></button>
              <button type="reset">Limpar</button>
              </div>
              <input type="hidden" name="tipo" value="tb_criador">
              <input name="id" id="id" type="hidden" value="<?php echo $id; ?>">
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Us Section -->
    <section class="tabela">
          <?php include 'listar/listarCriador.php' ?>
          
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
    let criador = document.querySelector("#criador");
    criador.value = getDateString();
  </script>
</body>

</html>