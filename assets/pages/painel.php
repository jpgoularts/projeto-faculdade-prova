<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Administrativo - JJ Refrigeração</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

        <style>
            #dataTable > tbody > tr > td > a{
                text-decoration: none;
                color: unset;
            }

            .card.text-center {
              padding: 0;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Administrativo</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../../index.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Páginas</div>
                            <a class="nav-link" href="./pacientes.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pacientes</a
                            >
                            <a class="nav-link" href="./psicologos.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Psicólogos</a
                            >
                            <a class="nav-link" href="./anamneses.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Anamneses</a
                            >
                            <a class="nav-link" href="./sessoes.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Sessões</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logado como:</div>
                        Administrador
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Áreas</h1>
                        <div class="row">
                          <div class="card text-center col-lg-6">
                            <div class="card-header">
                              Pacientes
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Área dos pacientes</h5>
                              <p class="card-text">Informações acerca de pacientes</p>
                              <a href="./pacientes.php" class="btn btn-primary">Acessar</a>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                          </div>
                          <div class="card text-center col-lg-6">
                            <div class="card-header">
                              Psicólogos
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Área dos Psicólogos</h5>
                              <p class="card-text">Informações acerca dos Psicólogos</p>
                              <a href="./pacientes.php" class="btn btn-primary">Acessar</a>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                          </div>
                          <div class="card text-center col-lg-6">
                            <div class="card-header">
                            anamnesse
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Área de registros de anamnesse</h5>
                              <p class="card-text">Informações sobre todos os registros de anamnesse</p>
                              <a href="./pacientes.php" class="btn btn-primary">Acessar</a>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                          </div>
                          <div class="card text-center col-lg-6">
                            <div class="card-header">
                            Sessões
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Área de registros de sessões dos pacientes</h5>
                              <p class="card-text">Informações sobre todos os registros de sessões</p>
                              <a href="./pacientes.php" class="btn btn-primary">Acessar</a>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                          </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../demo/chart-area-demo.js"></script>
        <script src="../demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../demo/datatables-demo.js"></script>
    </body>
</html>
