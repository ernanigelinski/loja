<div class="input-field">
    <label>Descrição</label>
    <input type="text" name="descricao" placeholder="Descrição" value="{{isset($product->descricao) ? $product->descricao : ''}}">
</div>

<div class="input-field">
    <label>Referência</label>
    <input type="text" name="referencia" placeholder="Referência" value="{{isset($product->referencia) ? $product->referencia : ''}}">
</div>

<div class="input-field">
    <label>Familia</label>
    <input type="text" name="familia" placeholder="Familia" value="{{isset($product->familia) ? $product->familia : ''}}">
</div>

<div class="input-field">
    <label>Grupo</label>
    <input type="text" name="grupo" placeholder="Grupo" value="{{isset($product->grupo) ? $product->grupo : ''}}">
</div>

<div class="input-field">
    <label>Subgrupo</label>
    <input type="text" name="subgrupo" placeholder="Subgrupo" value="{{isset($product->subgrupo) ? $product->subgrupo : ''}}">
</div>

<div class="input-field">
    <label>NCM</label>
    <input type="text" name="ncm" placeholder="NCM" value="{{isset($product->ncm) ? $product->ncm : ''}}">
</div>

<div class="input-field">
    <label>Unidade</label>
    <input type="text" name="unidade" placeholder="Unidade" value="{{isset($product->unidade) ? $product->unidade : ''}}">
</div>

<div class="input-field">
    <label>Custo</label>
    <input type="text" name="custo" placeholder="Custo" value="{{isset($product->custo) ? $product->custo : ''}}">
</div>

<div class="input-field">
    <label>Preço</label>
    <input type="text" name="preco" placeholder="Preço" value="{{isset($product->preco) ? $product->preco : ''}}">
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($product->imagem))
<div class="input-field">
<img width="150" src="{{isset($product->imagem)}}"/>
</div>
@endif

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" class="filled-in" id="teste" name="ativo" {{isset($product->ativo) && $product->ativo == 'sim' ? 'checked' : ''}} value="true"/>
            <span>Ativo?</span>
        </label>
    </p>
    <br><br>
</div>
