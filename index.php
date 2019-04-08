<?php
	require_once 'Orcamento.php';
	require_once 'ExibeOrcamento.php';

	$orcamento = new Orcamento();
	
	$orcamento->inserirProduto(new Produto('Arroz', 2.5, 500));
	$orcamento->inserirProduto(new Produto('Feijão', 4.5, 100));
	$orcamento->inserirProduto(new Produto('Açucar', 2.0, 100));

	ExibeOrcamento::imprime($orcamento->getProdutos()); 