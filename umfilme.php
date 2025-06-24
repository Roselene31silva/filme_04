<?php
include "cabecalho.php";
// 1 - recuperar informação do id 
$id = $_GET['id'];
// 2 - conexão com bd 
include "conexao.php";
// 3 - montagem do sql
$sql = "select * from filmes where id = $id ";

// 4 - execução do sql
$resultado = mysqli_query($conexao, $sql);
// 5 - definição das variaveis do filme
$titulo = "";
$historia = "";
$categoria = "";
$avaliacao = "";
$foto = "";
// 6 - laço com as informações do filme
while ($linha = mysqli_fetch_assoc($resultado)) {
    $titulo = $linha["titulo"];
    $historia = $linha["historia"];
    $categoria = $linha["categoria"];
    $avaliacao = $linha["avaliacao"];
    $foto = $linha["foto"];
}
// 7 - fechar a conexão com bd
mysqli_close($conexao);
// 8 - monstrar as informações na tela
?>
<div class="container">
    <div class="row mx-5 mt-5">
        <div class="col">
            <img src="<?= $foto ?>" class="img-fluid">
        </div>
        <div class="col">
            <h2 class="text-start"><?= $titulo ?></h2>
            <p>⭐ <?= $avaliacao ?>/10</p>
            <p><strong>categoria:</strong> <?= $categoria ?></p>
            <p><strong>Historia:</strong> <?= $historia ?></p>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>