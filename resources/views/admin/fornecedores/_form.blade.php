<div class="input-field">
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Nome Completo" value="{{isset($fornecedor->nome) ? $fornecedor->nome : ''}}">
</div>

<div class="input-field">
    <label>CNPJ:</label>
    <input type="text" name="cnpj" placeholder="CNPJ" value="{{isset($fornecedor->cnpj) ? $fornecedor->cnpj : ''}}">
</div>

<div class="input-field">
    <label>IE:</label>
    <input type="text" name="ie" placeholder="IE" value="{{isset($fornecedor->ie) ? $fornecedor->ie : ''}}">
</div>

<div class="input-field">
    <label>CEP:</label>
    <input type="text" name="cep" placeholder="CEP" value="{{isset($fornecedor->cep) ? $fornecedor->cep : ''}}">
</div>

<div class="input-field">
    <label>Endereço:</label>
    <input type="text" name="endereco" placeholder="Endereço" value="{{isset($fornecedor->endereco) ? $fornecedor->endereco : ''}}">
</div>

<div class="input-field">
    <label>Numero:</label>
    <input type="text" name="numero" placeholder="Numero" value="{{isset($fornecedor->numero) ? $fornecedor->numero : ''}}">
</div>

<div class="input-field">
    <label>Bairro:</label>
    <input type="text" name="bairro" placeholder="Bairro" value="{{isset($fornecedor->bairro) ? $fornecedor->bairro : ''}}">
</div>

<div class="input-field">
    <label>Cidade:</label>
    <input type="text" name="cidade" placeholder="Cidade" value="{{isset($fornecedor->cidade) ? $fornecedor->cidade : ''}}">
</div>

<div class="input-field">
    <label>UF:</label>
    <input type="text" name="uf" placeholder="UF" value="{{isset($fornecedor->uf) ? $fornecedor->uf : ''}}">
</div>

<div class="input-field">
    <label>Telefone:</label>
    <input type="text" name="telefone" placeholder="Telfone WhatsApp" value="{{isset($fornecedor->telefone) ? $fornecedor->telefone : ''}}">
</div>

<div class="input-field">
    <label>WhatsApp:</label>
    <input type="text" name="whatsapp" placeholder="WhatsApp" value="{{isset($fornecedor->whatsapp) ? $fornecedor->whatsapp : ''}}">
</div>

<div class="input-field">
    <label>E-mail:</label>
    <input type="text" name="email" placeholder="E-mail" value="{{isset($fornecedor->email) ? $fornecedor->email : ''}}">
</div>

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" class="filled-in" id="teste" name="ativo" {{isset($fornecedor->ativo) && $fornecedor->ativo == 'sim' ? 'checked' : ''}} value="true"/>
            <span>Ativo?</span>
        </label>
    </p>
    <br><br>
</div>
