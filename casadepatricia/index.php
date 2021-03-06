<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Guilherme Gomes">
  <link rel="shortcut icon" href="assets/img/logobg.png" />

  <title>Pagina Inicial - Casa de Patricia</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    .box-img{

    vertical-align: middle;
    height: 50%;

    align-self: center;
    }

    .box-txt{
    flex:1;

    font-size:30px;
    }

    .box-content{
    display: flex;
    flex-direction: column;


    }

    .header-img{
    width:20%;
    }

    .navbar-brand{
    font-size:1.5em;
    }

    </style>

</head>

<body id="page-top">

  <?php
    // CONFIGURAÇÃO DOS ALERTS


    if(isset($_GET['op']) && $_GET['op'] == 'cadastro'){?>

            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Sucesso!</strong> Pessoa cadastrada com sucesso no sistema! :)
            </div>

    <?php
    }
    

    if(isset($_GET['op']) && $_GET['op'] == 'alterar'){?>

    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Sucesso!</strong> As informações da Pessoa foram atualizadas! :)
    </div>

    <?php
    }
    ?>
    <?php
    if(isset($_GET['op']) && $_GET['op'] == 'excluir'){?>

    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Sucesso!</strong> A Pessoa foi desvinculada da associação :'(
    </div>               


    <?php
    }
    ?>

    <?php
    if(isset($_GET['op']) && $_GET['op'] == 'vincular'){?>

    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Sucesso!</strong> A Pessoa revinculada à associação :')
    </div>               


    <?php
    }
    ?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Icon -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Casa de Patricia</div>
      </a>

      <!-- Barra divisora -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Página Inicial</span></a>
      </li>

      <!-- Barra divisora -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Eventos
      </div>

      <!-- Eventos -->
      <li class="nav-item">
        <a class="nav-link" href="eventos.php">
          <i class="fas fa-fw fa-table"></i>
          <span><strong>Eventos</strong></span></a>
      </li>

      <!-- Barra divisora -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Relatório
      </div>

      <!-- Relatório -->
      <li class="nav-item">
        <a class="nav-link" href="selecionarcampos.php">
          <i class="fas fa-fw fa-table"></i>
          <span><strong>Relatório</strong></span></a>
      </li>

      <!-- Barra divisora -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Ficha Individual
      </div>

      <!-- Ficha Individual -->
      <li class="nav-item">
        <a class="nav-link" href="gerarfichaindividual.php">
          <i class="fas fa-fw fa-table"></i>
          <span><strong>Ficha Individual</strong></span></a>
      </li>

      <!-- Barra divisora -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Mais Opções
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span><strong>PDFs</strong></span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Opções:</h6>
           
              <!-- PDF - Ficha de Frequência Idosos -->
          <div class="modal-body"> 
                <div class="container-hero" >
                    <div class="row">
                        <script>
                            function abrirUrl(url){
                                let win = window.open(url, '_blank');
                                          win.focus();
                                              }
                        </script>
                      <div class="" onclick="abrirUrl('gerarpdfmanual.php?tipo=Idoso');">          <ul class="list-group">
                           <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 110px;">
                                <img src="assets/img/pdf.png" alt="Idosos" class="box-img">
                                <span><h7 class="price text-dark"> PDF - Ficha de Frequência Idosos</h7></span>
                            </li>
                        </ul>                
                      </div>
                    </div>            
                </div>
            </div>

            <!-- PDF - Ficha de Frequência Deficientes -->
            <div class="" onclick="abrirUrl('gerarpdfmanual.php?tipo=Deficiente');">
                <ul class="list-group">
                    <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 110px;">
                       <img src="assets/img/pdf.png" alt="Idosos" class="box-img">
                       <span><h7 class="price text-dark"> PDF - Ficha de Frequência Deficientes</h7></span>
                    </li>
                </ul>       
            </div>
            
            <!-- PDF - Folha de Cadastro Manual -->
            <div class="" onclick="window.open('includes/cadastroManual.pdf')" style="cursor:pointer">
              <ul class="list-group">
                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 110px;">
                  <img src="assets/img/pdf.png" alt="Idosos" class="box-img">
                  <span><h7 class="price text-dark">PDF - Folha de Cadastro Manual</h7></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>

<!-- Barra lateral -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Pesquisa -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquise aqui..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Informações do Usuario -->
            <l
            i class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    Guilherme Gomes
                  </span>  
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Registro de atividade
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </l
            i>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Conteúdo da página inicial -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Página Inicial</h1>
            </div>

            <!-- Botão Cadastrar -->
            <div class="row">
              <div class="col"> <section class="pricing-table" style="padding: -15px;">
                <div class="container">
                    <div class="pricing-area text-center">
                        <div class="row">
                            <div class="col-sm-4 plan price red wow fadeInDown">
                              <a href="cadastro.php">
                                <ul class="list-group">
                                  <li class="list-group-item heading box-content" data-bs-hover-animate="pulse" style="height: 257px;">
                                    <img src="img/mesclado.png" alt="Idosos" class="box-img">
                                    <br><br>
                                    <h1 class="box-txt">Cadastrar<h1>
                                  </li>
                              </ul>    
                             </a>
                         </div>
                    
                          <!-- Botão Consultar -->
                                <div class="col-sm-4 plan price green wow fadeInDown">
                                  <a href="consulta.php">
                                   <ul class="list-group">
                                        <li class="list-group-item heading box-content" data-bs-hover-animate="pulse" style="height: 257px;">
                                            <img src="img/search.png" alt="Idosos" class="box-img">
                                            <br><br>
                                            <h1 class="box-txt">Consultar</h1>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-sm-4 plan price yellow wow fadeInDown" style="cursor:pointer">
                            <?php 
                                        $fuso = new DateTimeZone('America/Fortaleza');
                                        $data = new DateTime();
                                        $data->setTimezone($fuso);
                                        $mesAtual =  $data->format('m');
                                        $anoAtual =  $data->format('Y');
                                        $linkModal = 'data-toggle="modal" data-target="#modal-frequencia"';    
                                    
                                    ?>
                                <a href="consultafrequencia.php?mes=<?php echo $mesAtual;?>&ano=<?php echo $anoAtual;?>" >
                                    <ul class="list-group">
                                        <li class="list-group-item heading box-content" data-bs-hover-animate="pulse" style="height: 257px;">
                                            <img src="assets/img/test.png" alt="Idosos" class="box-img">
                                            <br><br>
                                            <h1 class="box-txt">Controle de Frequência</h1>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
 
            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você está pronto para encerrar a sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../pag_inicial/index.html">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
