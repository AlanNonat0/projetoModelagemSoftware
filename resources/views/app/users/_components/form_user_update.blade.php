<!-- Fomulário de atualização cadastral -->

<div class="col-10">

    <h3 class="text-white text-center">Atualizar</h3>

    <form action="{{ route('atualizar.update', $user->id) }}" method="post" name="personalDataUpdate">
        @csrf
        @method('PATCH')
        <label for="telefone" class="text-white h5">Telefone:</label>
        <input type="tel" name="telephone" id="telephone" class="form-control"
            placeholder="Informe aqui seu novo telefone" maxlength="14">

        <label for="senha" class="text-white h5 mt-2">Senha: <span class="text-danger">*</span></label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha"
            maxlength="255" required>

        <label for="nsenha" class="text-white h5 mt-2">Nova Senha: <span class="text-danger">*</span></label>
        <input type="password" name="npassword" id="npassword" class="form-control" placeholder="Digite sua nova senha"
            maxlength="255" required>

        <label class="text-white h5 mt-2">Confirme sua nova senha: <span class="text-danger">*</span></label>
        <input type="password" name="npassword_confirmation" id="npassword_confirmation" class="form-control" placeholder="Repita sua nova senha"
            maxlength="255" required>

        <div class="d-flex justify-content-center my-4">
            <button type="submit" class="btn btn-lg btn-warning">Atualizar</button>
        </div>

    </form>
</div>
