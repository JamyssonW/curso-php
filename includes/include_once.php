<div class="titulo">Include Once</div>

<?php
include('include_once_arquivo.php');

$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include('include_once_arquivo.php');
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'.<br>";

include_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";

require_once('include_once_arquivo.php'):
echo "Variável = '{$variavel}'.<br>";