<?php

Class Cesta
{
    private $itens;

    #adiciona Itens na cesta
    function AdicionarItem(Produto $item)
    {
        $this->itens[] = $item;
    }
    #exibi a lista de produtos 
    function ExibeLista()
    {
        foreach($this->itens as $item)
        {
            $item->ImprimeEtiqueta();
        }
    }
    #Calcular o valor total da cesta
    function CaculaTotal()
    {
        $total = 0;
        foreach($this->itens as $item)
        {
            $total += $item->Preco;
        }
        return 'R$' . $total;
    }
}