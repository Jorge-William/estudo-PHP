<?php 
    include("cabecalho.php"); 
    include("conecta.php");
    include("banco-produto.php"); 
?>

<?php
    if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
?>        
        <p class="alert-success">Produto apagado com sucesso!!!</p>

  <?php  } ?>

<table class="table table-striped table-bordered">
    <?php
        $produtos = listaProdutos($conexao);

        foreach ($produtos as $produto) {?>
            <tr>
                <td><?php echo $produto['nome']?></td>
                <td><?php echo $produto['preco']?></td>
                <td><?php echo $produto['descricao']?></td>
                <td>
                    <form action="remove-produto.php?id=<?= $produto['ID'] ?>" method="post">
                        <input type="hidden" name="id" value="<?= $produto['ID'] ?>">
                        <button class="btn btn-danger">remover</button>
                    </form>
                </td>
            </tr>  
    <?php 
        }
     ?>

</table>

<?php include("rodape.php"); ?>
