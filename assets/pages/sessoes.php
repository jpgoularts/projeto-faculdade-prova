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
                            <a class="nav-link" href="./psicologos.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Psicólogos</a
                            >
                            <a class="nav-link" href="./anamneses.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Anamneses</a
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
                        <h1 class="mt-4">Sessões</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Registro das sessões</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-header">oi</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Rua</th>
                                                <th>Bairro</th>
                                                <th>Telefone</th>
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
                                                  oi
                                                </a>    
                                            </td>
                                            <td>hfghgh</td>
                                            <td>gfhfghgfh</td>
                                            <td>gdfgdfgdfg</td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <a>
                                                  ffffffffff
                                                </a>    
                                            </td>
                                            <td>hfghgh</td>
                                            <td>gfhfghgfh</td>
                                            <td>gdfgdfgdfg</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                        <div class="add-cliente card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Cadastrar Anamnese</div>
                            <div class="card-body">
                                <form method="POST" action="actions/add_cliente_action.php">
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label for="inputEmail4">Nome Paciente</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Tânia">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label for="inputEmail4">Queixas</label>
                                            <input type="text" class="form-control" name="queixas" placeholder="Dor de cabeça">
                                        </div>
                                        <div class="col form-group">
                                            <label for="inputEmail4">Plano de tratamento</label>
                                            <input type="text" class="form-control" name="plano_tratamento">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label for="inputEmail4">Diagnostico Final</label>
                                            <input type="text" class="form-control" name="diagnostico">
                                        </div>
                                        <div class="col form-group">
                                            <label for="inputEmail4">Resumo da sessão</label>
                                            <input type="text" class="form-control" name="Resumo">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label for="inputEmail4">Evolução</label>
                                            <input type="text" class="form-control" name="Evolução" placeholder="90%">
                                        </div>
                                        <div class="col form-group">
                                            <label for="inputEmail4">Pago</label>
                                            <select class="form-control" id="planoPaciente">
                                            <option>Sim</option>
                                            <option>Não</option>
                                          </select>
                                        </div>
                                        <div class="col form-group">
                                          <label for="idadePaciente">Data de Nascimento</label>
                                          <input type="date" class="form-control" id="idadePaciente" placeholder="25/04/1985">
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
