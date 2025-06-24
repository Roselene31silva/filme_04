<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>
   
    <div class="row mt-5">
        <?php
       include "conexao.php";
 
        $sql = "select * from filmes limit 4";
        $resultado = mysqli_query($conexao, $sql);
 
        //echo "<pre>";
        //print_r($resultado);
        //exit();  
        while($linha = mysqli_fetch_assoc($resultado)){
            ?>
            <div class="col-3">
            <img src=<?=$linha['foto'];?> class="img-fluid capa-filme">
            <h3><?=$linha['titulo'];?></h3>
            <span>⭐<?=$linha['avaliacao'];?>/10</span>
        </div>
        <?php
        }
        mysqli_close($conexao)
        ?>
    </div>
    <div class="row">

        <div class="col-6">
            <img src="img/thunderbolts2.avif" class="img-fluid">
        </div>
        <div class="col-6 align-content-center">
            <p>"Em Thunderbolts, a Marvel Studios reuniu uma equipe não convencional de anti-heróis – Yelena Belova, Bucky Barnes, Guardião Vermelho, Fantasma, Treinador e John Walker. Presos em uma armadilha mortal, sete párias desiludidos são forçados a embarcar em uma missão perigosa que os obrigará a confrontar os cantos mais sombrios de seus passados".</p>
            <a href="https://www.youtube.com/watch?v=18qDST2_Nh8" class="btn btn-success
            btn-lg">ASSISTA AO TRAILER AGORA</a>
        </div>
    </div>
 
    <div class="row">
        <div class="col-6 align-content-center">
            <p>O filme Hereditário (2018) conta a história da família Graham, que lida com a morte de sua matriarca, Ellen. Após sua morte, Annie (Toni Collette), seu marido e filhos começam a desvendar segredos perturbadores sobre sua ancestralidade e enfrentam eventos sobrenaturais que ameaçam sua sanidade e união familiar. O filme explora temas de luto, trauma e a inevitabilidade do destino.</p>
            <a href="https://www.youtube.com/watch?v=Ui13PlmyZhQ" class="btn btn-success
            btn-lg">ASSISTA AO TRAILER AGORA</a>
        </div>
        <div class="col-6">
            <img src="img/hereditarioFilme.webp" class="img-fluid">
        </div>
    </div>
 
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning btn-lg mt-5 fs-5 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Precisa de ajuda? Clique Aqui
    </button>
 
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda💭</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Entre em contato através dos nossos canais de comunicação:</p>
                    <p>E-mail: filme@filme.com.br <br> Whatsapp: (11)99999-9999 <br><a href="contato.php">Formulário de conato</a></p>
                </div>
            </div>
        </div>
    </div>
 
    <button type="button" class="btn btn-danger btn-lg mt-5 fs-5 fw-bold text-white" data-bs-toggle="modal" data-bs-target="#sugestao">
        Sugestões de filmes? Clique Aqui
    </button>
 
    <!-- Modal -->
    <div class="modal fade" id="sugestao" tabindex="-1" aria-labelledby="sugestaoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="sugestaoLabel">Sugestão🤔</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Mande uma sugestão de filme que você quer ver na nossa página!</p>
                    <p>Whatsapp: (11)99999-9999<br><a href="contato.php">Formulário de conato</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>
 