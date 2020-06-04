
<div class="produto_foto">
    <img src="/assets/images/<?php echo $produtos['imagem']; ?>" border="0" width="300" height="300" />
</div>
<div class="produto_info">
    <h2><?php echo $produtos['nome']; ?></h2>
    <?php echo $produtos['descricao']; ?>
    <h3>Preço: R$ <?php echo $produtos['valor']; ?></h3>
    <a href="/carrinho/add<?php echo $produto['id']; ?>">Adcionar ao carrinho</a>
</div>
<div style="clear:both"></div>