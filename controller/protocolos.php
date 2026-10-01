<?php
session_start();
require "../model/UbicarProtocolo.php";

if (isset($_REQUEST['revisar'])) {
    echo $numeroProtocolo = trim($_REQUEST["txtprotocolo"]);

    $ubicarprotocolo = new UbicarProtocolo();
    
    $infoProyecto = $ubicarprotocolo->BuscarProyecto($numeroProtocolo);
    $infoProtocolo = $ubicarprotocolo->BuscarProtocolo($numeroProtocolo);

    //echo "con proyecto".$infoProyecto['proy_id'];
    //echo "sin proyecto".$infoProtocolo['cod_pro'];

    if ($infoProyecto > 0) {
        echo "Redireccionar a Proyecto";
        $_SESSION['proyecto'] = $infoProyecto['proy_id'];
        header("Location: ../view/changeProyecto.php");
    } else {
        $mensaje1 = "<span class='label alert'>Nada en proyecto</span>";
    }
        
    if ($infoProtocolo > 0) {
        echo "Redireccionar a protocolo";
        $_SESSION['protocolo'] = $numeroProtocolo;
        header("Location: ../view/changeProtocolo.php");
    } else {
        $mensaje1 = "<span class='label alert'>Nada en protocolo</span>";
    }
    echo " No encontrado.  REGRESA";
}
