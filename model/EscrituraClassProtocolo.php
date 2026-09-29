<?php
require "../coreapp/Conexion.php";

class EscrituraClassProtocolo
{
    private $conn;
    
    function __construct(){
        
        $this->conn = new Conexion();
        return $this->conn;
    }

    public function Listado($protocolo){
       $sql = "SELECT cod_sct FROM escrituras1 WHERE cod_pro = $protocolo;";
       $result = $this->conn->ConsultaCon($sql);
       return $result;
    }

    public function Escrituras($numeroEscritura) {
        $sql = "SELECT cod_sct,cod_not,num_sct,cod_dst,fec_doc,cod_sub,nom_bie,can_fol,cod_pro,obs_sct,num_fol,cod_usu,hra_ing FROM escrituras1 WHERE cod_sct = $numeroEscritura;";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    public function ListadoOtorgantes($numero) {
        $sql = "SELECT cod_inv,cod_inv_ju FROM escriotor1 WHERE cod_sct= $numero;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        return $rpta;
    }

    function ListadoFavorecido($numero) {
        $sql= "SELECT cod_inv,cod_inv_ju FROM escrifavor1 WHERE cod_sct= $numero;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        return $rpta;
    }

    function Buscar($numEscritura, $protocolo){
        $sql = "SELECT cod_sct FROM escrituras1 WHERE num_sct = $numEscritura AND cod_pro = $protocolo;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        $data = $rpta->fetch_array();
        return $data;
    }
    
    public function VerNombre($codigo){
        $sql = "SELECT CONCAT(Nom_inv, ' ',Pat_inv,'  ',Mat_inv) as nombre FROM involucrados1 WHERE cod_inv = $codigo;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        $data = $rpta->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    public function VerNombreJuridico($codigo){
        $sql = "SELECT Raz_inv AS razon_social FROM involjuridicas1 WHERE cod_inv = $codigo;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        $data = $rpta->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    public function VerSubserie($codigo){
        $sql = "SELECT des_sub AS subserie FROM subseries WHERE cod_sub = $codigo;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        $data = $rpta->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    public function VerNotario($codigo){
        $sql = "SELECT CONCAT(nom_not,' ',pat_not,' ',mat_not) as notario FROM notarios WHERE cod_not = $codigo;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        $data = $rpta->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    public function VerDistrito($codigo){
        $sql = "SELECT des_dst FROM distritos WHERE cod_dst = $codigo;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        $data = $rpta->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    public function VerTrabajador($codigo){
        $sql = "SELECT CONCAT(nom_usu,' ',pat_usu, ' ', mat_usu) as trabajador FROM usuarios WHERE cod_usu = $codigo;";
        //echo $sql;
        $rpta = $this->conn->ConsultaCon($sql);
        $data = $rpta->fetch_array(MYSQLI_ASSOC);
        return $data;
    }
    
}

/*
    $escri = new EscrituraClass();
    $data = $escri->Escrituras(2504);

    echo $data[0];
    */
?>