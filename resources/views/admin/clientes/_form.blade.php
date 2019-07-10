<div class="input-field">
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Nome Completo" value="{{isset($cliente->nome) ? $cliente->nome : ''}}">
</div>

<div class="input-field">
    <label>CPF:</label>
    <input type="text" name="cpf" placeholder="CPF" value="{{isset($cliente->cpf) ? $cliente->cpf : ''}}">
</div>

<div class="input-field">
    <label>RG:</label>
    <input type="text" name="rg" placeholder="RG" value="{{isset($cliente->rg) ? $cliente->rg : ''}}">
</div>

<div class="input-field">
    <label>Data de Nascimento:</label>
    <input type="text" name="data_nascimento" placeholder="Data de nascimento" value="{{isset($cliente->data_nascimento) ? $cliente->data_nascimento : ''}}">
</div>

<div class="input-field">
    <label>CEP:</label>
    <input type="text" name="cep" placeholder="CEP" value="{{isset($cliente->cep) ? $cliente->cep : ''}}">
</div>

<div class="input-field">
    <label>Endereço:</label>
    <input type="text" name="endereco" placeholder="Endereço" value="{{isset($cliente->endereco) ? $cliente->endereco : ''}}">
</div>

<div class="input-field">
    <label>Numero:</label>
    <input type="text" name="numero" placeholder="Numero" value="{{isset($cliente->numero) ? $cliente->numero : ''}}">
</div>

<div class="input-field">
    <label>Bairro:</label>
    <input type="text" name="bairro" placeholder="Bairro" value="{{isset($cliente->bairro) ? $cliente->bairro : ''}}">
</div>

<div class="input-field">
    <label>Cidade:</label>
    <input type="text" name="cidade" placeholder="Cidade" value="{{isset($cliente->cidade) ? $cliente->cidade : ''}}">
</div>

<div class="input-field">
    <label>UF:</label>
    <input type="text" name="uf" placeholder="UF" value="{{isset($cliente->uf) ? $cliente->uf : ''}}">
</div>

<div class="input-field">
    <label>Telefone:</label>
    <input type="text" name="telefone" placeholder="Telfone WhatsApp" value="{{isset($cliente->telefone) ? $cliente->telefone : ''}}">
</div>

<div class="input-field">
    <label>E-mail:</label>
    <input type="text" name="email" placeholder="E-mail" value="{{isset($cliente->email) ? $cliente->email : ''}}">
</div>

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" class="filled-in" id="teste" name="ativo" {{isset($cliente->ativo) && $cliente->ativo == 'sim' ? 'checked' : ''}} value="true"/>
            <span>Ativo?</span>
        </label>
    </p>
    <br><br>
</div>
