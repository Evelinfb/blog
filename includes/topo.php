<?php
    session_start();
?>

<div class="card">
    <h1>Projeto Blog e PHP + MySQL IFSP - ÉVELIN</h1>
</div>
<?php if(isset($_SESSION['login'])): ?>
<div class="card-body text-right">
    Olá <?php echo $_SESSION['login']['usuario']['nome']?>!
    <a href="core/usuario_repositorio.php?acao=logout"
        class="btn btn-link btn-sm" role="button">Sair</a>
</div>
<?php endif ?>
</div> 