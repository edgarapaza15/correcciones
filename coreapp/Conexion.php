<?php

class Conexion
{
    public $conn;

    public function __construct() {
        $host = "localhost";
        $user = "usuario";
        $pass = "archivo123$";
        $db   = "dbarp";

        $this->conn = new mysqli($host, $user, $pass, $db);

        if ($this->conn->connect_errno) {
            echo "Error al contenctar a MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error;
            exit();
        }

        $this->conn->set_charset("utf8mb4");
        //echo $this->conn->host_info . " KATARI";
        return $this->conn;
    }

    /**
     * Sirve para INSERT, UPDATE, DELETE
     * @param [type] $sql [description]
     */
    public function ConsultaSin($sql)
    {
        try {
            $this->conn->query($sql);
            $res = TRUE;
        } catch (Exception $e) {
            echo 'Excepción: ',  $e->getMessage();
            $res = FALSE;
        }
        return $res;
        mysqli_close($this->conn);
    }

    /**
     * Sirve para SELECT
     * @param mysqli $sql [description]
     */
    public function ConsultaCon($sql)
    {
        try {
          $result = $this->conn->query($sql);
        } catch (Exception $e) {
          echo 'Excepción: ',  $e->getMessage();
        }
        return $result;
        mysqli_close($this->conn);
    }

    /**
     * Sirve para: SELECT convertido en array
     * @param [type] $sql [description]
     */
    public function ConsultaArray($sql) {
        try {
            $result = $this->conn->query($sql);
        } catch (Exception $e) {
            echo 'Excepción: ',  $e->getMessage();
        }

        $data = $result->fetch_array(MYSQLI_ASSOC);
        return $data;
        mysqli_close($this->conn);
    }
}
