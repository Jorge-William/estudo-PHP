<?php 
    require ("cabecalho.php");
?>
     <h2 class = "espacador">Adicionar produto</h2>
     <br>
                
        <form action="adciona-produto.php" method= "post">
        <table class = "table">
            <tr>
                <div class="form-group">
                <td><label for="Nome do Produto">Name</label></td>
                <td><input class="form-control" type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input class="form-control" type="number" name="preco"></td>
            </tr>
            <tr>
                <td>Descrição</td>                            
                <td><textarea class="form-control" name="descricao"></textarea></td>
            </tr>
            <tr>
                <td>Categoria</td>
                    <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="categoria"><label class="form-check-label">Esporte</label><br>
                    </div>  

                        <input class="form-check-input"type="radio" name="categoria">Escolar<br>
                        <input class="form-check-input"type="radio" name="categoria">Mobilidade
                </td>
            </tr>
                
        </table>
                <button class="btn btn-primary" type="submit" value="cadastrar">Enviar
            

        </form>

<?php 
    require ( "rodape.php"); 
?>  