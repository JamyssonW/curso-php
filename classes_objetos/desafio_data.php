<div class="titulo">Desafio Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data();
$aniversario->dia = 15;
$aniversario->mes = 08;
$aniversario->ano = 2014;
echo $aniversario->apresentar();
