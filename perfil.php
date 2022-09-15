<?php
use Projeto\Livro;
use Projeto\ControleDeAcesso;
use Projeto\Usuario;

require_once "./vendor/autoload.php";
$livros = new Livro;
$listaDeLivros = $livros->listar();

$sessao = new ControleDeAcesso;
$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUm();


?> 

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="perfil.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>Perfil </title>
    
</head>
<header>
<nav class="navbar navbar-expand-md text-center ">
    <div class="container mxe-md-5">
        <h1><a class="navbar-brand pt-2" href="index.php"><img
          src="imagens/logo-e-favicon/Logo-sem-fundo-2.png"
                    alt="Letra L com bordas arredondas seguida de Livro Solto, indicando o logo do site"
                    width="80px"></a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row justify-content-md-end justify-content-sm-center justify-content-center"
            id="navbarSupportedContent">
            <div class="col-4">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 hamb">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"
                            alt="Página inicial">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" alt="Link para equipe">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" alt="Link para equipe">Anunciar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" alt="Link para equipe">Procurar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?sair" alt="Link para equipe">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</header>
<body>
 



  <!-- Perfil -->



  <div class="container">
    <div class="main-body">
    
      
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="./imagens/img-index/profile.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <h4> <?=$dados['nome']?> </h4>
                  
                  <p class="text-muted font-size-sm"><?=$dados['senac']?> - São Paulo</p>
                  <button class="btn btn-success">Mensagem (indisponível)</button>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="col-md-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Nome</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?=$dados['nome']?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?=$dados['email']?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Telefone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  (indisponível)
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Cidade</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                Senac <?=$dados['senac']?> - São Paulo
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-success " target="__blank" href="">Editar(indisponível)</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>




  <div class="container">
    <div class="main-body">

      <div class="row gutters-sm">


  <div class="d-grid gap-3">

  <div class="p-2 bg-white ">
    <!-- Card Livro 1  -->
            
    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <h6 class=" align-items-center mb-3"><i class="material-icons text-warning mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 2 16 16">
                              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg></i>Seus interresses</h6>
                              
        
      

  </div>


  <div class="p-2 bg-white ">
     <!-- Card livro 2  -->
     <div class="row gutters-sm">
                        <div class="col-sm-12 mb-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-warning mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
</svg></i>Suas doações</h6>

                        <div class="container">
                           <div class="row accordion" id="accordion">
                              <div class="col-lg-12">
                                <div class="card product_list accordion-item">
                                    <div class="card-header accordion-header">
                                        <div class="btn btn-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itemtwo" aria-expanded="false">
                                            <div class="list_block">
                                                <div class="list_image">
                                                <?php
                                               //   foreach ($listaDeLivros as $livros) {
                                                  ?>

                                                <img src="./imagem/chamado-cuco-min.jpg" class="image-fit-contain" alt="img" />

                                                </div>
                                                <div class="list_text">
                                                    
                                                    <h5 class="title">O Chamado do Cuco</h5>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="itemtwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="card-body accordion-body">
                                            <div class="row">
                                                <div class="col-sm-4 col-6">
                                                    <div class="list_block_item">
                                                        <a href="shop-details.html">
                                                        <img src="./imagem/harry-potter-e-a-camara-secreta.jpg" class="image-fit-contain" alt="img" />
                                                            
                                                            <h6 class="title">Harry Potter e a Câmara Secreta</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>

                                        <?php 
                                        // }
                                        ?>
                                      </div>
                                    </div>
                           </div>
                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           


                      

                      <!-- Fim card livro 2  -->
  </div>


  <div class="p-2 bg-white ">
    <!-- Card livro 3  -->



    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-warning mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg></i>Seus livros</h6>

                             
                        <div class="container">
                            <div class="row accordion" id="accordion">
                              <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card product_list accordion-item">
                                            <div class="card-header accordion-header">
                                                <div class="btn btn-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itemthree" aria-expanded="false">
                                                    <div class="list_block">
                                                        <div class="list_image">
                                                          <?php
                                                         // foreach ($listaDeLivros as $livros) {
                                                            ?>
                                                            <img src="./imagem/em-chamas-min.jpg"
                                                             class="image-fit-contain" alt="img" />
                                                        </div>
                                                        <div class="list_text">
                                                            
                                                            <h5 class="title">Em Chamas</h5>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="itemthree" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="card-body accordion-body">
                                                    <div class="row">
                                                        <div class="col-sm-4 col-6">
                                                            <div class="list_block_item">
                                                                <a href="shop-details.html">
                                                                <img src="./imagem/Inferno_livro-min.jpg"
                                                                 class="image-fit-contain" alt="img" />
                                                                   
                                                                    <h6 class="title">Inferno</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                  </div>
                                              </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <?php 
                          //}
                          ?>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Fim card livro 3 -->
  </div>

</div>
          



               



                      

  </div>
  </div>
  </div>
  

       
               

  <!-- Fim do perfil -->


<!-- Cards livros -->






<script src="./bootstrap.bundle.js"></script>
<script src="./nosso.js"></script>
</body>
</html>