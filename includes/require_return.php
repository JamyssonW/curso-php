<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('return_usado.php');
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
echo "$valorRetornado2<br>";
echo "$variavelDeclarada<br>";