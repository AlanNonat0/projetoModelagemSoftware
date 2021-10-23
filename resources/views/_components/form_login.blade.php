<!-- Formulário de Login -->


<div class="col-lg-4 col-12 col-sm-6 col-xl-4">

    <h3 class="text-white text-center">Login</h3>

    <form action="{{ route('autenticar.store') }}" method="post">
        <label for="email" class="text-white h5">E-mail:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Informe aqui seu e-mail"
            required>

        <label for="senha" class="text-white h5 mt-2">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha"
            maxlength="255" required>

        <div class="d-flex justify-content-center mt-4">

            <button type="submit" name="acao" value="login" onclick="Toast()"
                class="btn btn-lg btn-primary">Entrar</button>
        </div>

    </form>

</div>
