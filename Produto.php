<?php
	
	/**
	 * 
	 */
	class Produto
	{
		private $id;
		private $item;
		private $valor;
		private $quantidade;
		private $imposto;

		function __construct(string $item, float $valor, int $quantidade)
		{
			$this->item = $item;
			$this->valor = $valor;
			$this->quantidade = $quantidade;
		}

		public function valorTotal(): float
		{
			return $this->valor * $this->quantidade;
		}

		public function calculoImposto():float
		{
			return $this->imposto->calculoImposto($this);
		}

		/*SET E GET*/
		public function setImposto(iImposto $imposto)
		{
			$this->imposto = $imposto;
		}
		public function getImposto(): iImposto
		{
			return $this->imposto;
		}

		public function setId(int $id){
			$this->id = $id;
		}
		public function getId(): int{
			return $this->id;
		}

		public function getItem(): string{
			return $this->item;
		}

		public function setValor(float $valor) {
			$this->valor = $valor;
		}

		public function getValor(): float{
			return $this->valor;
		}

		public function setQuantidade(int $quantidade) {
			$this->quantidade = $quantidade;
		}

		public function getQuantidade(): int{
			return $this->quantidade;
		}
	}