<?php require __DIR__ . "/../includes/header.inc.php";?>

<div class="card  d-block w-50 centralizado">
    <div class="card-heading">
        <div class="card-title   bg-danger">
            <div class="text-center color-white">
                <i class="fa fa-exclamation"></i> Acesso não autorizado</div>
        </div>
        <div class="card-body">
            <p class="text-center">
                <i class="fa fa-exclamation-triangle"></i>Verifique suas credenciais e tente novamente.
            </p>

            <p>
                <div class="list-group text-center" >
                    <div class="list-group-item">
                        <a class="card-link" href="login.php">
                            <i class="fa fa-unlock"></i> Voltar para a página de login.</a>
                    </div>
                    <div class="list-group-item">
                        <a class="card-link" href="index.php"><i class="fa fa-home"></i> Voltar para a página de inicial.</a>
                    </div>
                </div>
            </p>

        </div>
        <div class="card-footing">
            <div class="card-title bg-danger color-white">
                &nbsp;
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . "/../includes/footer.inc.php";?>