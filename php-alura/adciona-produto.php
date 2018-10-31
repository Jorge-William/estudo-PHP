<?php
    include ("cabecalho.php");
    include ("conecta.php");
    include ("banco-produto.php");
?>          
            <?php
                $nome = $_POST["nome"];
                $preco = $_POST["preco"];
                $descricao = $_POST["descricao"];

                if(insereProduto($conexao, $nome, $preco, $descricao)){
                ?> 
                <div class="text-success centro">
                    Produto <?php  echo $nome; ?> custando: R$ <?php echo $preco; ?> foi adcionado com sucesso!!!
                </div>
                <?php
                } else {
                    $erro = mysqli_error($conexao);
                    ?>
                    <div class="atert alert-danger centro espacador">
                         Desculpe mas o produto não pode ser adcionado, verifique o erro!!!       
                    </div>
                    <div class = "espacador">
                        <?= $erro?>
                    </div>

                <?php }

                mysqli_close($conexao);
                
            ?>
      
        <br>
        <button class="btn btn-default" type="submit"><a href="formulario.php">Retornar</a></button>

<?php
    require ("rodape.php");
?>