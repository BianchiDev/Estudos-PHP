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
     function CalculaTotal()
    {
        $total = 0; // Inicializa o total antes do loop
        foreach($this->itens as $item)
        {
            $total += $item->Preco; // Soma o preço de cada item ao total
        }
        return 'R$' . $total;
    }
}