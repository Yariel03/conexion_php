<?php
class clGlobal{
    private $localhost='localhost';
    private $usuariodb='root';
    private $clave='';
    private $db='prueba';

    public function getlocalhost()
	{
		return $this->localhost;
	}

    public function getusuariodb()
	{
		return $this->usuariodb;
	}

    public function getclave()
	{
		return $this->clave;
	}

    public function getdb()
	{
		return $this->db;
	}

}

?>
