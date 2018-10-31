<?php
    include('cabecalho.php');
?>

                <form action="logica.php" method="post"><!--===Formulario===-->
                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" placeholder="Nome">
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="password" name="senha" placeholder="Senha">
                    </div> 
                    <!--========Botao Confirma=========-->
                    <input type="submit" class="btn btn-success botao-centralizado" value="Entrar" data-target="#exampleModal">
                    <!--===============================-->
                </form><!--==Formulario==-->

<?php
    include('footer.php');
?>