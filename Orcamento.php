<?php

	/**
	 * 
	 */
	require_once 'ImpostoICMS.php';
	require_once 'ImpostoISS.php';
	class Orcamento
	{
		private $produtos;	
		function __construct()
		{
			$this->produtos = new ListaProdutos();
		}

		public function inserirProduto(Produto $produto){
			if ($produto->valorTotal() <= 1000)
				$this->produtos->inserirProduto($produto, new ImpostoICMS);
			if ($produto->valorTotal() > 1000)
				$this->produtos->inserirProduto($produto, new ImpostoISS);
		}
		public function getProdutos() {
			return $this->produtos;
		}
	}