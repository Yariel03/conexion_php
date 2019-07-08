<?php
include_once('Global.php');
class AccesoDatos{
    private $con;
    private $error;
    private $row=array();


    public function Connectar(){
        $obj= new clGlobal();
        $result=0;
        $this->con=new mysqli($obj->getlocalhost(),
                        $obj->getusuariodb(),
                        $obj->getclave(),
                        $obj->getdb());

        if($this->con->connect_errno){
            $result= 0;
        }else{
            $result= 1;
        }
        return $result;
    }

    public function Desconnectar(){
        mysqli_close($this->con);
        $result= 1;
        return $result;
    }


     public function getRow(){
         return $this->row;

     }



//  devuelve -1 cuando exite error en la syntaxis de la consulta
//  devuelve 1 se realizo la consulta con éxito
    public function EjecutarSQL($SQL){
        $result=1;
        $resultado=$this->con->query($SQL);
        if(!$resultado){
            $result=-1;
        }
        return $result;
    }


//  devuelve -1 cuando exite error en la syntaxis de la consulta
//  devuelve 1 se realizo la consulta con éxito
//    devuelve 0 cuando no existen registros
    public function SelectSQL($SQL){
        $result=1;
        $resultado=$this->con->query($SQL);
        if(!$resultado){
            $result=-1;
        }
        if($resultado->num_rows===0){
            $result=0;
        }else{
            while($item=$resultado->fetch_assoc()){
            $this->row[]= $item;
            }
        }
        return $result;
    }

}
