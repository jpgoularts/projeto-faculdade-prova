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
                        <h1 class="mt-4">Pacientes</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Listagem dos clientes</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"></div>
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
                                                
                                               Renato Bento Caldeira
   
                                            
                                            </td>
                                            <td>Avenida Agostinho Sônego</td>
                                            <td>Campos Ville (SP)</td>
                                            <td>(16) 2730-8679</td>
                                          </tr>
                                          <tr>
                                            <td>
                                                
                                                  Roberto Fábio Campos


                                                    
                                            </td>
                                            <td>Rua Onze de Agosto</td>
                                            <td>Paciência (RJ)</td>
                                            <td>(21) 3661-4397</td>
                                          </tr>
                                          <tr>
                                            <td>
                                                
                                                  Anthony Martin Mendes

                                                   
                                            </td>
                                            <td>Travessa Aparecida</td>
                                            <td>Éden (RJ)</td>
                                            <td>(21) 2842-7232</td>
                                          </tr>
                                          
                                          <tr>
                                            <td>
                                                
                                                  Breno Tomás Rodrigues


                                                   
                                            </td>
                                            <td>Rua Ângelo Dourado</td>
                                            <td>Chácara da Enseada (SP)</td>
                                            <td>(11) 3965-9840</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                
                                                  Edson Pedro Henrique Rezende


                                                   
                                            </td>
                                            <td>Rua Sérgio Antonio Mascioli</td>
                                            <td>Residencial dos Ipês (SP)</td>
                                            <td>(16) 2661-2371</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                
                                                  Benedito Noah Barbosa



                                                   
                                            </td>
                                            <td>Rua Herval</td>
                                            <td>Citrópolis (RJ)</td>
                                            <td>(21) 3650-9746</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                
                                                  Giovanni Iago Melo



                                                   
                                            </td>
                                            <td>Rua Mário Gurgel</td>
                                            <td>Monsenhor José Lopes (MG)</td>
                                            <td>(31) 2829-3180</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                
                                                  Gustavo Kaique Breno Monteiro



                                                   
                                            </td>
                                            <td>Rua Barbosa Lagares</td>
                                            <td>Interlagos (MG)</td>
                                            <td>(37) 3699-0206</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                
                                                  Matheus José Sebastião Lima



                                                   
                                            </td>
                                            <td>Rua Frei Miguelino, s/n</td>
                                            <td>Centro (RJ)</td>
                                            <td>(22) 3535-0667</td>
                                          </tr>

                                          <tr>
                                            <td>
                                                
                                                  Thiago Elias Aragão



                                                   
                                            </td>
                                            <td>Rua Clotilde Adelaide</td>
                                            <td>Nova Cidade (RJ)</td>
                                            <td>(22) 3712-7327</td>
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
                                        <div class="col form-group">
                                            <label for="inputEmail4">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Tânia Goulart">
                                        </div>
                                        <div class="col form-group">
                                          <label for="sexoPaciente">Sexo</label>
                                          <select class="form-control" id="sexoPaciente">
                                            <option>Masculino</option>
                                            <option>Feminino</option>
                                          </select>
                                        </div>
                                        <div class="col form-group">
                                          <label for="idadePaciente">Data de Nascimento</label>
                                          <input type="date" class="form-control" id="idadePaciente" placeholder="25/04/1985">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label for="inputEmail4">CPF</label>
                                            <input type="text" class="form-control cpf" id="cpf" name="cpf">
                                        </div>
                                        <div class="col form-group">
                                          <label for="planoPaciente">Possui plano de saúde?</label>
                                          <select class="form-control" id="planoPaciente">
                                            <option>Sim</option>
                                            <option>Não</option>
                                          </select>
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
                                        <div class="form-group col-md-3">
                                                <label for="inputCity">CEP</label>
                                                <input type="text" class="form-control cep" id="cep" name="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);">
                                            </div>
                                        <div class="form-group col">
                                            <label for="inputAddress">Rua</label>
                                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Ex: Otávio Martins">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Cidade</label>
                                            <input type="text" class="form-control" id="cidade" name="cidade">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Nº</label>
                                            <input type="text" class="form-control" id="numero" name="numero">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="custom-file" style="margin-bottom: 1rem">
                                          <div class="col form-group">                                       
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div> 
                                      </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                        <div class="form-group">
                                      <label for="mensagemPaciente">Observações:</label>
                                      <textarea class="form-control" id="mensagemPaciente" rows="3"></textarea>
                                      </div>
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
