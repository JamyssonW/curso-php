<div class="titulo">Incluse vs Require</div>

<?php

echo 'Usando include como arquivo inexistente...<br>';
include('arquivo_inexistente.php');


echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');

echo 'Nao achou mesmo... <br>';
