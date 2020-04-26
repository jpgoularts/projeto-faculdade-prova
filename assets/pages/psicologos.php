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
            <a class="navbar-brand" href="./painel.php">Administrativo</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="./painel.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Página Inicial</a
                            >
                            <div class="sb-sidenav-menu-heading">Páginas</div>
                            <a class="nav-link" href="./pacientes.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pacientes</a
                            >
                            <a class="nav-link" href="./anamneses.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                anamnesse</a
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
                        <h1 class="mt-4">Psicólogos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Listagem dos Psicólogos</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">oi</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>CPF</th>
                                                <th>Telefone</th>
                                                <th>CRP</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Rua</th>
                                                <th>Bairro</th>
                                                <th>Telefone</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                          <tr>
                                            <td>
                                                <a>
                                                  Marcos Antônio
                                                </a>    
                                            </td>
                                            <td>484.715.627-74</td>
                                            <td>(22) 3712-7327 - Nova Cidade - RJ, 28894-646</td>
                                            <td>05/41553</td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <a>
                                                  Fernanda Montenegro
                                                </a>    
                                            </td>
                                            <td>744.685.747-12</td>
                                            <td>(21) 2631-2025 - Vila Valqueire - RJ, 21330-130</td>
                                            <td>09/47698</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                <a>
                                                  Brian Alves
                                                </a>    
                                            </td>
                                            <td>004.131.517-00</td>
                                            <td>(21) 2553-2252 - Pechincha - RJ, 22743-313</td>
                                            <td>07/49652</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                <a>
                                                  Wesley Fernandez
                                                </a>    
                                            </td>
                                            <td>386.450.318-33</td>
                                            <td>(11) 3837-6933 - Vila Carrão - SP, 03429-015</td>
                                            <td>03/15963</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                <a>
                                                  Fabrícia Felipe
                                                </a>    
                                            </td>
                                            <td>300.138.547-20</td>
                                            <td>(24) 3925-0974 - Petrópolis - RJ, 25745-450</td>
                                            <td>04/36987</td>
                                          </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="add-cliente card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Cadastrar Paciente</div>
                            <div class="card-body">
                                <form method="POST" action="actions/add_cliente_action.php">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="inputEmail4">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Tânia Goulart">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="inputEmail4">CPF</label>
                                            <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="000.000.000-00">
                                        </div>
                                        <div class="col">
                                            <label for="inputEmail4">CRP</label>
                                            <input type="text" class="form-control" id="crp" name="crp">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="inputAddress">Telefone</label>
                                            <input type="text" class="form-control tel" id="telefone" name="telefone" placeholder="(21) 96865-2994">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputAddress">Celular</label>
                                            <input type="text" class="form-control cel" id="celular" name="celular" placeholder="(21) 96865-2994">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                                <label for="inputCity">Login</label>
                                                <input type="text" class="form-control" name="loginPsico" maxlength="20">
                                            </div>
                                        <div class="form-group col">
                                            <label for="inputAddress">Senha</label>
                                            <input type="password" class="form-control" name="passPsico">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </form>
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
