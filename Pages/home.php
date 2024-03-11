<!-- Exibe o título e descrição da página -->
<h2><?php echo getInfo("titulo") ?></h2>
<p><?php echo getInfo("descricao") ?></p>
<hr>

<!-- Formulário de pesquisa -->
<h2>Pesquisar</h2>
<form action="busca" method="GET">
    <input type="text" name="busca" placeholder="Busca">
    <button>Pesquisar</button>
</form>
<hr>

<!-- Lista de Produtos -->
<h2>Lista de Produtos</h2>
<ul>
    <?php foreach ($produtos as $produto) : ?>
        <li>
            <?php echo  $produto['titulo'] . " - " . $produto['descricao'] . " - " . "R$" . number_format($produto['valor'], 2, ",", ".") ?>
            <!-- Links para editar e deletar produtos -->
            <a href="/produto/editar?id=<?php echo $produto['id'] ?>">Editar</a>
            <a href="/produto/deletar?id=<?php echo $produto['id'] ?>">Deletar</a>
        </li>
    <?php endforeach; ?>
</ul>
<hr>

<!-- Exibe título dependendo se está editando ou adicionando produto -->
<?php if(isset($editando)): ?>
    <h2>Editando Produto</h2>
<?php else: ?>
    <h2>Adicionar Produto</h2>
<?php endif; ?>

<!-- Exibe mensagem, se houver -->
<?php if(isset($msg)): ?>
    <p><?php echo $msg ?></p>
<?php endif; ?>

<!-- Formulário para adicionar ou editar produtos -->
<form action="<?php echo (isset($editando) ? '/produto/salvar' : '/produto/adicionar');?>" method="post">
    <?php if(isset($editando)): ?>
        <!-- Input oculto para armazenar o ID do produto sendo editado -->
        <input type="hidden" name="id" value="<?php echo $produtoEdit['id'] ?>">
    <?php endif; ?>
    <!-- Campos do formulário -->
    <input type="text" name="titulo" placeholder="Título" value="<?php echo (isset($produtoEdit['titulo'])? $produtoEdit['titulo'] : '' );?>">
    <input type="text" name="descricao" placeholder="Descrição" value="<?php echo (isset($produtoEdit['descricao'])? $produtoEdit['descricao'] : '' );?>">
    <input type="text" name="valor" placeholder="Valor R$" value="<?php echo (isset($produtoEdit['valor'])? $produtoEdit['valor'] : '' );?>">
    <!-- Botão para adicionar ou atualizar, dependendo da situação -->
    <button><?php echo (isset($editando) ? 'Atualizar' : 'Adicionar');?></button>
    
    <?php if(isset($editando)): ?>
        <!-- Link para cancelar a edição -->
        <a href="/home">Cancelar</a>
    <?php endif; ?>
</form>
