<div class="input-field">
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Nome Completo" value="{{isset($client->nome) ? $client->nome : ''}}">
</div>

<div class="input-field">
    <label>CPF:</label>
    <input type="text" name="cpf" placeholder="CPF" value="{{isset($client->cpf) ? $client->cpf : ''}}">
</div>

<div class="input-field">
    <label>RG:</label>
    <input type="text" name="rg" placeholder="RG" value="{{isset($client->rg) ? $client->rg : ''}}">
</div>

<div class="input-field">
    <label>Data de Nascimento:</label>
    <input type="text" name="data_nascimento" placeholder="Data de nascimento" value="{{isset($client->data_nascimento) ? $client->data_nascimento : ''}}">
</div>

<div class="input-field">
    <label>CEP:</label>
    <input type="text" name="cep" placeholder="CEP" value="{{isset($client->cep) ? $client->cep : ''}}">
</div>

<div class="input-field">
    <label>Endereço:</label>
    <input type="text" name="endereco" placeholder="Endereço" value="{{isset($client->endereco) ? $client->endereco : ''}}">
</div>

<div class="input-field">
    <label>Numero:</label>
    <input type="text" name="numero" placeholder="Numero" value="{{isset($client->numero) ? $client->numero : ''}}">
</div>

<div class="input-field">
    <label>Bairro:</label>
    <input type="text" name="bairro" placeholder="Bairro" value="{{isset($client->bairro) ? $client->bairro : ''}}">
</div>

<div class="input-field">
    <label>Cidade:</label>
    <input type="text" name="cidade" placeholder="Cidade" value="{{isset($client->cidade) ? $client->cidade : ''}}">
</div>

<div class="input-field">
    <label>UF:</label>
    <input type="text" name="uf" placeholder="UF" value="{{isset($client->uf) ? $client->uf : ''}}">
</div>

<div class="input-field">
    <label>Telefone:</label>
    <input type="text" name="telefone" placeholder="Telfone WhatsApp" value="{{isset($client->telefone) ? $client->telefone : ''}}">
</div>

<div class="input-field">
    <label>E-mail:</label>
    <input type="text" name="email" placeholder="E-mail" value="{{isset($client->email) ? $client->email : ''}}">
</div>

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" class="filled-in" id="teste" name="ativo" {{isset($client->ativo) && $client->ativo == 'sim' ? 'checked' : ''}} value="true"/>
            <span>Ativo?</span>
        </label>
    </p>
    <br><br>
</div>
