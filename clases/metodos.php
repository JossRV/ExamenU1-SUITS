<?php 

    class metodos{
        public function mostrarDatos($sql){
            $obj=new conexion();
            $conexion=$obj->conectar();
            $resultado=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        public function insertarDatos($datos){
            $obj=new conexion();
            $conexion=$obj->conectar();
            $sql="INSERT INTO t_informacion (sueldo,edad,sexo,nacionalidad,antiguedad,php,asp,vb,java,oracle,bd,bono)
                  VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]',
                  '$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]')";
            return $resultado=mysqli_query($conexion,$sql);
        }
    }

?>