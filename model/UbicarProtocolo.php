<?php
require_once "../coreapp/Conexion.php";

class UbicarProtocolo
{
    private $conn;
    function __construct(){
        $this->conn = new Conexion();
    }

    /**
     * @param string $protocolo [description]
     * @return array Datos del proyecto buscado
     */
    public function BuscarProyecto($protocolo) {
        $sql = "SELECT proy_id, proy_nombre, not_id, num_protocolo, cod_usu, observaciones, estado FROM proyectos WHERE num_protocolo = $protocolo;";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    public function BuscarProtocolo($protocolo){
        $sql = "SELECT cod_pro FROM escrituras1 WHERE cod_pro = $protocolo;";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }
}