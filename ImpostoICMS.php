<?php
	/**
	 * 
	 */
	require_once 'iImposto.php';
	class ImpostoICMS implements iImposto
	{
		private $aliquota;

		function __construct()
		{
			$this->aliquota = 0.1;
		}

		public function calculoImposto(Produto $produto) 
		{
			return $produto->valorTotal() * (1 + $this->aliquota);
		}

		public function setAliquota(float $aliquota)
		{
			$this->aliquota = $aliquota;
		}
		public function getAliquota(): float
		{
			return $this->aliquota;
		}

	}