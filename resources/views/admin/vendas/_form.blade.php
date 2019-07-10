<div class="input-field">
    <label>Tipo:</label>
    <input type="text" name="tipo" placeholder="tipo" value="{{isset($venda->tipo) ? $venda->tipo : ''}}">
</div>

<div class="input-field">
    <label>Nota:</label>
    <input type="text" name="nota" placeholder="Número da Nota" value="{{isset($venda->Nota) ? $venda->Nota : ''}}">
</div>

<div class="input-field">
    <label>Cliente:</label>
    <input type="text" name="cliente" placeholder="Cliente" value="{{isset($venda->fornecedor_id) ? $venda->fornecedor_id : ''}}">
</div>

<div class="input-field">
    <label>Data de Emissão:</label>
    <input type="text" name="data_emissao" placeholder="Data de Emissão" value="{{isset($venda->data_emissao) ? $venda->data_emissao : ''}}">
</div>

<div class="input-field">
    <label>Condição de Pagamento:</label>
    <input type="text" name="condicao_pagamento" placeholder="Condição de pagamento" value="{{isset($venda->condicao_pagamento) ? $venda->condicao_pagamento : ''}}">
</div>

<div class="input-field">
    <label>Produto:</label>
    <input type="text" name="produto" placeholder="Produto" value="{{isset($venda->produto_id) ? $venda->produto_id : ''}}">
</div>

<div class="input-field">
    <label>Quantidade:</label>
    <input type="text" name="quantidade" placeholder="quantidade" value="{{isset($venda->quantidade) ? $venda->quantidade : ''}}">
</div>

<div class="input-field">
    <label>Desconto:</label>
    <input type="text" name="desconto" placeholder="Desconto" value="{{isset($venda->desconto) ? $venda->desconto : ''}}">
</div>

<div class="input-field">
    <label>Preço:</label>
    <input type="text" name="preco" placeholder="Preço" value="{{isset($venda->preco) ? $venda->preco : ''}}">
</div>

<div class="input-field">
    <label>Total:</label>
    <input type="text" name="total" placeholder="total" value="{{isset($venda->total) ? $venda->total : ''}}">
</div>
