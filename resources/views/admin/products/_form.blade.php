<div class="box-body">
    <div class="form-group">
        <label for="textinput">Descrição:</label>
        <input type="text" class="form-control" name='descricao' id="textinput" placeholder="Descrição"  value="{{isset($product->descricao) ? $product->descricao : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Referência:</label>
        <input type="text" class="form-control" name='referencia' id="textinput" placeholder="Referência"  value="{{isset($product->referencia) ? $product->referencia : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">NCM:</label>
        <input type="text" class="form-control" name='ncm' id="textinput" placeholder="ncm"  value="{{isset($product->ncm) ? $product->ncm : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Unidade:</label>
        <input type="text" class="form-control" name='unidade' id="textinput" placeholder="unidade"  value="{{isset($product->unidade) ? $product->unidade : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Custo:</label>
        <input type="text" class="form-control" name='custo' id="textinput" placeholder="custo"  value="{{isset($product->custo) ? $product->custo : ''}}" required>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        <label for="textinput">Preço:</label>
        <input type="text" class="form-control" name='preco' id="textinput" placeholder="preco"  value="{{isset($product->preco) ? $product->preco : ''}}" required>
    </div>
</div>

<div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control-file" id="imagem">
</div>

@if(isset($product->imagem))
<div class="input-field">
<img width="150" src="{{isset($product->imagem)}}"/>
</div>
@endif

<div class="form-check">
    <input type="checkbox" class="filled-in" id="ativo" name="ativo" {{isset($product->ativo) && $product->ativo == 'sim' ? 'checked' : ''}} value="true"/>
    <label class="form-check-label" for="ativo">
        Item Ativo?
    </label>
    <br><br>
</div>

