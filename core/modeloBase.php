<?php
class modeloBase extends entidadBase{

    private $tabla;

    public function __construct($tabla){
        $this->tabla = (string) $tabla;
    }

    public function ejecutarSQL($query){
        $query = $this->db->query($query);

        if($query){
            if($query->num_rows>1){
                while($row = $query->fetch_object()){
                    $resultSet[] = $row;
                }
            }elseif($query->num_rows == 1){
                if($row = $query->fetch_object()){
                    $resultSet = $row;
                }
            }else{
                $resultSet == false;
            }
        }else{
            $resultSet == false;
        }

        return $resultSet;
    }


}
?>