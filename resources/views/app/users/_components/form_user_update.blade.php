<!-- Fomulário de atualização cadastral -->

<div class="col-10">

    <h3 class="text-white text-center">Atualizar</h3>

    <form action="" method="post">
        <label for="telefone" class="text-white h5">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" class="form-control"
            placeholder="Informe aqui seu novo telefone" maxlength="13" required>

        <label for="senha" class="text-white h5 mt-2">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha"
            maxlength="255" required>

        <label for="nsenha" class="text-white h5 mt-2">Nova Senha:</label>
        <input type="password" name="nsenha" id="nsenha" class="form-control" placeholder="Digite sua nova senha"
            maxlength="255" required>

        <label class="text-white h5 mt-2">Confirme sua nova senha:</label>
        <input type="password" name="nsenha2" id="nsenha2" class="form-control" placeholder="Repita sua nova senha"
            maxlength="255" required>

        <div class="d-flex justify-content-center my-4">
            <button type="submit" name="acao" value="update" class="btn btn-lg btn-warning">Atualizar</button>
        </div>

    </form>
</div>
