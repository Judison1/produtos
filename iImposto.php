<?php
	require_once 'Produto.php';
	interface iImposto {
		function __construct();
		public function setAliquota(float $aliquota);
		public function getAliquota();
		public function calculoImposto(Produto $produto);
	}