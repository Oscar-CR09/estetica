<?php

function obtenerServicio():array  {
    try {

        //importar una conexion
        require 'database.php';
        // var_dump($db);

        //escribir el codigo sql
        $sql = "SELECT * FROM servicio;";

        $consulta = mysqli_query($db, $sql);
        //arreglo vacio

        $servicios = [];

        $i = 0;

        //obtener los resultados 

        // echo "<pre>";
        // var_dump(mysqli_fetch_assoc($consulta));
        // echo "</pre>";
        while ($row = mysqli_fetch_assoc($consulta)){
            $servicios[$i] ['id']= $row['id'];
            $servicios[$i] ['nombre']= $row['nombre'];
            $servicios[$i] ['precio']= $row['precio'];

            // echo "<pre>";
            // var_dump($row);
            // echo "</pre>";
            $i++;
        }

        return $servicios;
        // echo "<pre>";
        // var_dump(json_encode($servicios));
        // echo "</pre>";


    }catch(\throwable $th){
        //thro $th;

        var_dump($th);
    }

}
obtenerServicio();