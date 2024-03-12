<main class="container">

    <!-- Formulário de Busca -->

    <form action="busca" method="GET" class="menuBuscar">
        <input  type="text"
                id="autocomplete-buscar"
                class="autocomplete" 
                name="busca" 
                placeholder="Busca">
        <!-- <button class="btn blue && z-depth-5">Pesquisar</button> -->
    </form>


    <div class="card && z-depth-5">
    
         <!-- Lista de Produtos -->
    <h2>Lista de Produtos</h2>
    <div class="chip">produto</div>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>R$</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <td><?php echo $produto['titulo'] ?></td>
                        <td><?php echo $produto['descricao'] ?></td>
                        <td><?php echo "R$" . number_format($produto['valor'], 2, ",", ".") ?></td>
                        <td>
                            <!-- Links de Edição e Exclusão -->
                            <a class="btn orange && z-depth-5" href="/produto/editar?id=<?php echo $produto['id'] ?>">Editar</a>
                            <a class="btn red && z-depth-5" href="/produto/deletar?id=<?php echo $produto['id'] ?>">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- Exibe título dependendo se está editando ou adicionando produto -->
    <?php if (isset($editando)) : ?>
        <h2>Editando Produto</h2>
    <?php else : ?>
        <h2>Adicionar Produto</h2>
    <?php endif; ?>

    <!-- Exibe mensagem, se houver -->
    <?php if (isset($msg)) : ?>
        <p><?php echo $msg ?></p>
    <?php endif; ?>

    <!-- Formulário para adicionar ou editar produtos -->
    <form action="<?php echo (isset($editando) ? '/produto/salvar' : '/produto/adicionar'); ?>" method="post">
        <?php if (isset($editando)) : ?>
            <!-- Input oculto para armazenar o ID do produto sendo editado -->
            <input type="hidden" name="id" value="<?php echo $produtoEdit['id'] ?>">
        <?php endif; ?>
        <!-- Campos de entrada -->
        <input  type="text" 
                name="titulo" 
                placeholder="Título" 
                value="<?php echo (isset($produtoEdit['titulo']) ? $produtoEdit['titulo'] : ''); ?>">
        
        <input  type="text" 
                name="descricao" 
                placeholder="Descrição" 
                value="<?php echo (isset($produtoEdit['descricao']) ? $produtoEdit['descricao'] : ''); ?>">
        
        <input  type="text" 
                name="valor" 
                placeholder="Valor R$" 
                value="<?php echo (isset($produtoEdit['valor']) ? $produtoEdit['valor'] : ''); ?>">
        <!-- Botão de envio -->
        <button class="btn blue && z-depth-5"><?php echo (isset($editando) ? 'Atualizar' : 'Adicionar'); ?></button>

        <?php if (isset($editando)) : ?>
            <!-- Link para cancelar a edição -->
            <a class="btn orange" href="/home">Cancelar</a>
        <?php endif; ?>
    </form>
 
</main>