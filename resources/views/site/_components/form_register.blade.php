<div class="col-lg-6 col-12 col-sm-6 col-xl-4">

    <h3 class="text-white text-center">Cadastro</h3>

    <form action="{{ route('cadastrar.store') }}" method="post" name="formRegister">
        @csrf
        <label for="registerName" class="text-white h5">Nome:</label>
        <input type="text" name="registerName" id="registerName" class="form-control" placeholder="Informe seu nome completo" required>

        <label for="registerEmail" class="text-white h5 mt-2">E-mail:</label>
        <input type="email" name="registerEmail" id="registerEmail" class="form-control" placeholder="Informe aqui seu e-mail"
            required>

        <label for="registerTelephone" class="text-white h5 mt-2">Telefone:</label>
        <input type="tel" name="registerTelephone" id="registerTelephone" class="form-control" placeholder="Informe seu telefone"
            maxlength="13" required>


        <label for="registerPassword" class="text-white h5 mt-2">Senha:</label>
        <input type="password" name="registerPassword" id="registerPassword" class="form-control" placeholder="Digite sua senha"
            maxlength="255" required>

        <div class="d-flex justify-content-center my-4">
            <button type="submit" name="acao" value="register" id="acao"
                class="btn btn-lg btn-warning">Cadastrar</button>
        </div>

    </form>

</div>
