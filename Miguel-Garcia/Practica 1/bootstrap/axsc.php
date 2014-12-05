<?php
require ('bd.php');

class compAcx
{
    private $obusur;
    private $obpass;
    private $obaces;
    private $idu;
    public  $msg;




    public function compAcxAct($nmidu,$pswo)
    {
        $bandera = 1;

        if ($bandera == 1) {


            $sql = "select *from usuar_pice where nmusropice='$nmidu' and cñausrpice='$pswo'";
            $consulta = mysql_query($sql);
            $cuantos = mysql_num_rows($consulta);

                if ($cuantos == 0) {
                    $msg = "<center><h1>¡Verifica usuario y/o contraseña!</h1></center>";
                    $this->msg = $msg;
                } else {
                    $idu = mysql_result($consulta, 0, 'id_usuario');
                    $activo = mysql_result($consulta, 0, 'activo');
                    if ($activo == 'NO') {
                        $msg = "<center><h1>El usuario no esta activo consulte a su <b>ADMINISTRADOR</b></h1></center>";
                        $this->msg = $msg;
                    } else {
                        $this->acces = 'denegated';
                        $this->idu = $idu;
                    }

                }
        }
    }

public function genAcces()
    {
        $aux1 = $this->acces;
        $aux1 = $this->idu;
        if ($aux1 == 'denegated')
        {
            Print "<meta http-equiv='refresh' content='0;
            url=index.php'>";
        } else {
            Print "<meta http-equiv='refresh' content='0;
            url=index2.php'>";
        }
    }
}
?>