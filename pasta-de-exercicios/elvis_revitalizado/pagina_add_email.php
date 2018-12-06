<?php include("cabecalho.php")?>


<div>
    <h2 id="titulo-pagina">Adcionar novo email à lista de contatos</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form class="form-group" method="POST" action="script_add_email.php">
                <div class="form-group">
                    <label for="first_name" id="first_name">Nome</label>
                    <input class="form-control" type="text" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="last_name" id="last_name">Sobrenome</label>
                    <input class="form-control" type="text" name="sobrenome" placeholder="Sobrenome">
                </div>
                <div class="form-group">
                    <label for="email" id="email">Email</label>
                    <input  class="form-control" type="email" name="email" placeholder="email@valido.com">
                    <small class="form-text text-muted">Insira um endereco de email valido</small>
                </div>
                <input  class="btn btn-primary" type="submit" value="Submit">
            </form>  
    </div> 
    </div> 
</div>


<?php include("footer.php")?>
