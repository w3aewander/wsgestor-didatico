<form class="form" role="form" method="post" action="autenticar.php">
    <div class="card centralizado form-login ">
        <div class="card-heading bg-dark">
            <div class="card-title">
                <div class="text-center form-login-title">
                    <i class="fa fa-user"></i> Autenticação Requerida
                </div>
            </div>
        </div>
        <div class="card-body">

            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário">
            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">

        </div>
        <div class="card-footing text-center">
            <button type="submit" class="btn btn-block btn-secondary"><i class="fa fa-unlock"></i>    Login</button>
        </div>
    </div>
</form>