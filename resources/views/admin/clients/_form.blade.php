<div class="box-body">
    <div class="form-group">
        <label for="textinput">Nome</label>
        <input type="text" class="form-control" name='nome' id="textinput" placeholder="Nome"  value="{{isset($client->nome) ? $client->nome : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">CPF:</label>
        <input type="text" class="form-control" name='cpf' id="textinput" placeholder="CPF"  value="{{isset($client->cpf) ? $client->cpf : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">RG:</label>
        <input type="text" class="form-control" name='rg' id="textinput" placeholder="RG"  value="{{isset($client->rg) ? $client->rg : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Data De Nascimento:</label>
        <input type="text" class="form-control" name='data_de_nascimento' id="textinput" placeholder="Data de Nascimento"  value="{{isset($client->data_nascimento) ? $client->data_nascimento : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">CEP:</label>
        <input type="text" class="form-control" name='cep' id="textinput" placeholder="CEP"  value="{{isset($client->cep) ? $client->cep : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Endereço:</label>
        <input type="text" class="form-control" name='endereco' id="textinput" placeholder="Endereço"  value="{{isset($client->endereco) ? $client->endereco : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Numero:</label>
        <input type="text" class="form-control" name='numero' id="textinput" placeholder="Numero"  value="{{isset($client->numero) ? $client->numero : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Bairro:</label>
        <input type="text" class="form-control" name='bairro' id="textinput" placeholder="Bairro"  value="{{isset($client->bairro) ? $client->bairro : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Cidade:</label>
        <input type="text" class="form-control" name='cidade' id="textinput" placeholder="Cidade"  value="{{isset($client->cidade) ? $client->cidade : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">UF:</label>
        <input type="text" class="form-control" name='uf' id="textinput" placeholder="UF"  value="{{isset($client->uf) ? $client->uf : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Telefone:</label>
        <input type="text" class="form-control" name='telefone' id="textinput" placeholder="Telefone"  value="{{isset($client->telefone) ? $client->telefone : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">WhatsApp:</label>
        <input type="text" class="form-control" name='whatsapp' id="textinput" placeholder="WhatsApp"  value="{{isset($client->whatsapp) ? $client->whatsapp : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">E-mail</label>
        <input type="email" class="form-control" email='email' id="textinput" placeholder="E-mail"  value="{{isset($client->email) ? $client->email : ''}}" required>
    </div>
</div>

<div class="form-check">
    <input type="checkbox" class="filled-in"  id="ativo" {{isset($client->ativo) && $client->ativo == 'sim' ? 'checked' : ''}} value="true"/>
    <label class="form-check-label" for="ativo">
    Cliente Ativo?
    </label>
    <br><br>
</div>
