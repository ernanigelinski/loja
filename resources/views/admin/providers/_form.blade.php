<div class="box-body">
    <div class="form-group">
        <label for="textinput">Nome</label>
        <input type="text" class="form-control" name='nome' id="textinput" placeholder="Nome"  value="{{isset($provider->nome) ? $provider->nome : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">CNPJ:</label>
        <input type="text" class="form-control" name='cnpj' id="textinput" placeholder="CNPJ"  value="{{isset($provider->cnpj) ? $provider->cnpj : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">IE:</label>
        <input type="text" class="form-control" name='ie' id="textinput" placeholder="Inscrição Estadual"  value="{{isset($provider->ie) ? $provider->ie : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">CEP:</label>
        <input type="text" class="form-control" name='cep' id="textinput" placeholder="CEP"  value="{{isset($provider->cep) ? $provider->cep : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Endereço:</label>
        <input type="text" class="form-control" name='endereco' id="textinput" placeholder="Endereço"  value="{{isset($provider->endereco) ? $provider->endereco : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Numero:</label>
        <input type="text" class="form-control" name='numero' id="textinput" placeholder="Numero"  value="{{isset($provider->numero) ? $provider->numero : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Bairro:</label>
        <input type="text" class="form-control" name='bairro' id="textinput" placeholder="Bairro"  value="{{isset($provider->bairro) ? $provider->bairro : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Cidade:</label>
        <input type="text" class="form-control" name='cidade' id="textinput" placeholder="Cidade"  value="{{isset($provider->cidade) ? $provider->cidade : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">UF:</label>
        <input type="text" class="form-control" name='uf' id="textinput" placeholder="UF"  value="{{isset($provider->uf) ? $provider->uf : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Telefone:</label>
        <input type="text" class="form-control" name='telefone' id="textinput" placeholder="Telefone"  value="{{isset($provider->telefone) ? $provider->telefone : ''}}" required>
    </div>
</div>

<div class="box-body">
        <div class="form-group">
            <label for="textinput">WhatsApp:</label>
            <input type="text" class="form-control" name='whatsApp' id="textinput" placeholder="WhatsApp"  value="{{isset($provider->whatsapp) ? $provider->whatsapp : ''}}" required>
        </div>
    </div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">E-mail</label>
        <input type="email" class="form-control" email='email' id="textinput" placeholder="E-mail"  value="{{isset($provider->email) ? $provider->email : ''}}" required>
    </div>
</div>


<div class="form-check">
    <input type="checkbox" class="filled-in" id="ativo" name="ativo" {{isset($provider->ativo) && $provider->ativo == 'sim' ? 'checked' : ''}} value="true"/>
    <label class="form-check-label" for="ativo">
    Fornecedor Ativo?
    </label>
    <br><br>
</div>
