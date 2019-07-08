<?php
 include_once ('conexion/AccesoDatos.php');
//Conexión
    $ac=new AccesoDatos();
    echo "<Script>console.log('Connexión: ".$ac->Connectar()."')</Script>";
//Insert //Cuando no se requiere recorrer solo ejecutar
    $SQL="Insert into color value('Rosado','primario','c','c')";
    echo "<Script>console.log('Consulta: ".$ac->EjecutarSQL($SQL)."')</Script>";
///Desconectar
    echo "<Script>console.log('Desconectar: ".$ac->Desconnectar()."')</Script>";





//Conexión
    $ac=new AccesoDatos();
    echo "<Script>console.log('Connexión: ".$ac->Connectar()."')</Script>";
//Select //cuando se desea devolver valores//
    $SQL="Select * from color";
    echo "<Script>console.log('Consulta: ".$ac->SelectSQL($SQL)."')</Script>";
    $resultado=$ac->getRow();
    echo "<ul>\n";
    foreach($resultado as $row){
        echo '<li>'.$row['nombre'] . ' </li>';
        echo '<li>'.$row['descripcion'] . ' </li>';
    }
    echo "</ul>\n";
///Desconectar
    echo "<Script>console.log('Desconectar: ".$ac->Desconnectar()."')</Script>";
?>
