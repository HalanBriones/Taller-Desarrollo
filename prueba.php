<?php
  require_once "Config/model.php";

  class prueba extends Model {
    function prueba() {
      $sql = Model::ejecutar_consulta_simple("SELECT * FROM periodo");
      return $sql;
    }

    function insert($dato) {
      $sql = Model::conectar()->prepare("INSERT INTO periodo (inicio, fin) VALUES (:Inicio, :Fin)");
      $sql->bindParam(":Inicio", 2020-10-20);
      $sql->bindParam(":Fin", 2020-10-20);

      $sql->execute();
      return $sql;
    }
  }

$s = new prueba();
 $s->insert("hola");
 