<?php
require_once "../Model/periodoModel.php";

class PeriodoController
{
  public function nuevo_periodo()
  {
    $periodo = new Periodo('2021/10/10', '2022/10/10');

    $guardar = $periodo->insert();

    if ($guardar->rowCount() >= 1) {
      echo "Guardado";
    } else {
      echo "No guardado";
    }
  }
}

$nueva = new PeriodoController();
$nueva->nuevo_periodo();
