<?php 

    class conexion{
        public function conectar(){
            $servidor="localhost";
            $user="root";
            $password="";
            $port="3307";
            $bd="examenu1";

            $conectando=new mysqli(
                $servidor,
                $user,
                $password,
                $bd,
                $port
            );
            return $conectando;
        }
    }

?>