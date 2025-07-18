<?php
include "cabecalho.php";
?>
    <div class="form-container">
        <h2>Fale com a gente 🎬</h2>
        <form action="resposta.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
   
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
   
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem..." required></textarea>
        </form>
    </div>
    <?php include "rodape.php"; ?>
 