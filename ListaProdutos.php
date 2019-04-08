<?php
	
	/**
	 * 
	 */
	require_once 'Produto.php';
	require_once 'iImposto.php';
	class ListaProdutos
	{
		private $produtos;
		private $indice;

		function __construct()
		{
			$this->indice = 0;
			$this->produtos = array();
		}

		public function inserirProduto(Produto $produto, iImposto $imposto)
		{
			$produto->setImposto($imposto);
			$indice = $this->indice;
			$this->indice++;
			$produto->setId($this->indice);
			$this->produtos[$indice] = $produto;
			
			return $indice;
		}
		public function encontraProduto($indice){
			return $this->produto[$indice];
		}
		public function getProdutos() {
			return $this->produtos;
		}

	}