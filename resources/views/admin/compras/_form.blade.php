<div class="input-field">
    <label>Tipo:</label>
    <input type="text" name="tipo" placeholder="tipo" value="{{isset($compra->tipo) ? $compra->tipo : ''}}">
</div>

<div class="input-field">
    <label>Nota:</label>
    <input type="text" name="nota" placeholder="Número da Nota" value="{{isset($compra->Nota) ? $compra->Nota : ''}}">
</div>

<div class="input-field">
    <label>Fornecedor:</label>
    <input type="text" name="fornecedor" placeholder="Fornecedor" value="{{isset($compra->fornecedor_id) ? $compra->fornecedor_id : ''}}">
</div>

<div class="input-field">
    <label>Data de Emissão:</label>
    <input type="text" name="data_emissao" placeholder="Data de Emissão" value="{{isset($compra->data_emissao) ? $compra->data_emissao : ''}}">
</div>

<div class="input-field">
    <label>Condição de Pagamento:</label>
    <input type="text" name="condicao_pagamento" placeholder="Condição de pagamento" value="{{isset($compra->condicao_pagamento) ? $compra->condicao_pagamento : ''}}">
</div>

<div class="input-field">
    <label>Produto:</label>
    <input type="text" name="produto" placeholder="Produto" value="{{isset($compra->produto_id) ? $compra->produto_id : ''}}">
</div>

<div class="input-field">
    <label>Quantidade:</label>
    <input type="text" name="quantidade" placeholder="quantidade" value="{{isset($compra->quantidade) ? $compra->quantidade : ''}}">
</div>

<div class="input-field">
    <label>Custo:</label>
    <input type="text" name="custo" placeholder="Custo" value="{{isset($compra->custo) ? $compra->custo : ''}}">
</div>

<div class="input-field">
    <label>Desconto:</label>
    <input type="text" name="desconto" placeholder="Desconto" value="{{isset($compra->desconto) ? $compra->desconto : ''}}">
</div>

<div class="input-field">
    <label>Preço:</label>
    <input type="text" name="preco" placeholder="Preço" value="{{isset($compra->preco) ? $compra->preco : ''}}">
</div>

<div class="input-field">
    <label>Total:</label>
    <input type="text" name="total" placeholder="total" value="{{isset($compra->total) ? $compra->total : ''}}">
</div>
