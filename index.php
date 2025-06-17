<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>

    <div class="row mb-5">
        <?php
        /*inicio da conexao com o DB*/ 
        $servidor = '';
        $bd = '';
        $usuario= 'root';
        $senha ='';

        $conexão = mysqli_connect($servidor, $usuario, $senha, $bd);
        if(!$conexão){
            die("deu ruim ". mysqli_connect());
        }
        /*fim da conexão*/

        $sql = "select * from filmes";
        $resultado = mysqli_query($conexão, $sql);

       // echo "<pre>";
       //print_r($resultado);
       //exit();
       while(&linha = mysqli_fetch_assoc($resultado)){echo $linha['titulo'] . "<br>";
       ?>
       <div class="col-3">
            <img src=<?=$linha[foto];?> class="img-fluid">
            <h3><?=$linha['titulo'];?></h3>
            <span>⭐<?=$linha['avaliacao'];?>/10</span>
        </div>
        <?php
      }


        ?>
        <div class="col-3">
            <img src="img/filme1.png" class="img-fluid">
            <h3>Jurassic Park</h3>
            <span>⭐ 10/10</span>
        </div>
    </div>
   
    <div class="row">
        <div class="col-6">
            <img src="img/banner.jpg" class="img-fluid">
        </div>
        <div class="col align-content-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Cupiditate explicabo autem nobis rem iusto ullam voluptatum
                harum voluptatem iste facilis unde fuga, sequi ut laborum hic
                consequatur possimus magni maiores.</p>
            <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO TRAILER AGORA</a>
        </div>
    </div>
    <div class="row">
        <div class="col-6 align-content-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Cupiditate explicabo autem nobis rem iusto ullam voluptatum
                harum voluptatem iste facilis unde fuga, sequi ut laborum hic
                consequatur possimus magni maiores.</p>
            <a href="https://youtube.com" class="btn btn-success btn-lg">ASSISTA AO TRAILER AGORA</a>
        </div>
        <div class="col-6">
            <img src="img/banner.jpg" class="img-fluid">
        </div>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
</div>
<?php include "rodape.php"; ?>