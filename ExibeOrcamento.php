<?php 
	/**
	 * 
	 */
	require_once 'ListaProdutos.php';
	class ExibeOrcamento
	{
		public static function imprime(ListaProdutos $listaProdutos) {
			
			foreach ($listaProdutos->getProdutos() as $produto) {
				
				echo 'id = ' . $produto->getId() . '<br>'
					.'item = ' . $produto->getItem() . '<br>'
					.'valor = ' . $produto->getValor() . '<br>'
					.'quantidade = '. $produto->getQuantidade() . '<br>'
					. 'total = ' . $produto->calculoImposto() . '<hr>';
			}
		}
	}