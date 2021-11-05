<div class="col-lg-6 col-12 col-sm-6 col-xl-4">

    <h3 class="text-white text-center">Cadastro</h3>

    <form action="{{ route('cadastrar.store') }}" method="post">
        <label for="nome" class="text-white h5">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe seu nome completo" required>

        <label for="email" class="text-white h5 mt-2">E-mail:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Informe aqui seu e-mail"
            required>

        <label for="telefone" class="text-white h5 mt-2">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="Informe seu telefone"
            maxlength="13" required>


        <label for="senha" class="text-white h5 mt-2">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha"
            maxlength="255" required>

        <div class="d-flex justify-content-center my-4">
            <button type="submit" name="acao" value="register" id="acao"
                class="btn btn-lg btn-warning">Cadastrar</button>
        </div>

    </form>

</div>
