<?php

use Projeto\Livro;
use Projeto\ControleDeAcesso;

require_once "./vendor/autoload.php";
$sessao = new ControleDeAcesso;

if (isset($_SESSION['id'])) {
    require_once "./inc/cabecalho-logado.php";
} else {
    require_once "./inc/cabecalho-geral.php";
}

$detalhe = new Livro;
$detalhe->setId($_GET['id']);
$livro = $detalhe->listarUm();
?>
<article class="row d-flex justify-content-evenly ">
    <section class="col-6 mb-5 mt-5 card shadow-lg" style="max-width: 30rem;">
        <div class="col-3">
            <figure><img class="" src="./imagem/<?= $livro['capa'] ?>" alt="<?= $livro['titulo'] ?>"></figure>
        </div>
        <div class="card-footer">
            <a class="btn btn-success form-control" href="detalhes-livro.php?id=<?= $livro['id'] ?>">É esse!</a>
        </div>
    </section>
    <section class="col-6 mb-5 mt-5 card border border-light" style="max-width: 30rem;">
        <h3 class="mb-2 text-center"><?= $livro['titulo'] ?></h3>
        <h4 class="mb-4 mt-2 text-center"><?= $livro['genero'] ?> de <?= $livro['autor'] ?></h4>
        <h5 class="mb-3 mt-3 text-center">Disponibilidade: <?= $livro['diasEntrega'] ?> , <?= $livro['horariosEntrega'] ?></h5>
        <div class="mb-3 mt-3 text-center">
            <h6>Descrição do livro: </h6>
            <p><?= $livro['descricao'] ?></p>
        </div>
    </section>
</article>
</body>
<?php
require_once "./inc/rodape-geral.php"

?>