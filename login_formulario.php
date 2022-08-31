<!DOCTYPE html>
<html>
    <head>
         <title> Login | Projeto para Web con PHP</title> 
         <link rel="stylesheet"
                href="lib/css/bootstrap.min.css">
    </heads
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'includes/topo.php'; ?>
                </div>
            </div>
            <div class="row" style="min-height: 500px;">
                <div class="col-md-12">
                    <?php include 'includes/menu.php'; ?>
                </div>
                <div class="col-md-10" style="padding-top: 50px;">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="post" action="core/usuario_repositorio.php">
                            <input type="hidden" name="acao" value="login">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="text"
                                    require="required" id="email" name="email">
                            </div>
                            <div classe="form-group">
                                <label for="senha">Senha</label>
                                <input class="form-control" type="password"
                                    require="required" id="senha" name="senha">
                            </div>
                            <div class="texte-right">
                                <button class="btn btn-success"
                                        type="submit">Acessar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php
                        include 'includes/rodape.php';
                    ?>
                </div>
            </div>
        </div>
        <script src="lib/css/bootstrap.min.css"></script>
    </body>
</html>    