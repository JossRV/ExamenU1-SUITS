<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";

    $sueldo=$_POST['sueldo'];
    $edad=$_POST['edad'];
    $sexo=$_POST['sexo'];
    $nacionalidad=$_POST['nacionalidad'];
    $php=isset($_POST['curphp'])?1:0;
    $asp=isset($_POST['curasp'])?1:0;
    $vb=isset($_POST['curvb'])?1:0;
    $java=isset($_POST['curjv'])?1:0;
    $oracle=isset($_POST['curor'])?1:0;
    $bd=isset($_POST['curbd'])?1:0;
    $antiguedad=$_POST['antiguedad'];
    $bono=0;

    function obtenerPorciento($sueldoin){
        $sueldoPorciento=$sueldoin*(.15);
        return $sueldoPorciento;
    }
    // $sueldoPorciento=obtenerPorciento($sueldo);

    function porSexo($sexoin,$sueldoPorc,$edadin,$nacionalidadin){
        if($sexoin=="Fememino"){
            $aumentoFe=$sueldoPorc*(.03);
            $suelYaumFe=$aumentoFe+$sueldoPorc;
            if($edadin>=45){
                $aumentoEd=$sueldoPorc*(.02);
                $suelYaumEd=$suelYaumFe+$aumentoEd;
                if($nacionalidadin=="Extrangero"){
                    $disminuyeNac=$sueldoPorc*(.05);
                    $suelDim=$suelYaumEd-$disminuyeNac;
                    return $suelDim;
                }else{
                    return $suelYaumEd;
                }
            }else{
                if($nacionalidadin=="Extrangero"){
                    $disminuyeNac=$sueldoPorc*(.05);
                    $suelDim=$suelYaumFe-$disminuyeNac;
                    return $suelDim;
                }else{
                    return $suelYaumFe;
                }
            }
        }else{
            if($edadin>=45){
                $aumentoEd=$sueldoPorc*(.02);
                $suelYaumEd=$sueldoPorc+$aumentoEd;
                if($nacionalidadin=="Extrangero"){
                    $disminuyeNac=$sueldoPorc*(.05);
                    $suelDim=$suelYaumEd-$disminuyeNac;
                    return $suelDim;
                }else{
                    return $suelYaumEd;
                }
            }else{
                if($nacionalidadin=="Extrangero"){
                    $disminuyeNac=$sueldoPorc*(.05);
                    $suelDim=$sueldoPorc-$disminuyeNac;
                    return $suelDim;
                }else{
                    return $sueldoPorc;
                }
            }
        }
    }
    function antiguedad($antiguedadin,$sueldoin){
        if($antiguedadin=="1 a 5 años"){
            $adicion=$sueldoin*(.05);
            return $adicion;
        }else if($antiguedadin=="6 a 10 años"){
            $adicion=$sueldoin*(.10);
            return $adicion;
        }else if($antiguedadin=="Mas de 10 años"){
            $adicion=$sueldoin*(.15);
            return $adicion;
        }
    }
    $bono=(porSexo($sexo,obtenerPorciento($sueldo),$edad,$nacionalidad))+(antiguedad($antiguedad,obtenerPorciento($sueldo)));

    
    $durphp=20*3;
    $durjava=35*3;
    $durasp=40*3;
    $durora=60*3;
    $durvb=55*3;
    $durbd=15*3;

    if($php==1){
        $bono= $bono+$durphp;
    }
    if($java==1){
        $bono= $bono+$durjava;
    }
    if($asp==1){
        $bono= $bono+$durasp;
    }
    if($oracle==1){
        $bono= $bono+$durora;
    }
    if($vb==1){
        $bono= $bono+$durvb;
    }
    if($bd==1){
        $bono= $bono+$durbd;
    }
        

    echo '<br>';
    // echo $sumaAnt;
    echo '<br>';
    // echo $bono;

    $datos=array(
        $sueldo,
        $edad,
        $sexo,
        $nacionalidad,
        $antiguedad,
        $php,
        $asp,
        $vb,
        $java,
        $oracle,
        $bd,
        $bono
    );
    // print_r ($datos);

    $m=new metodos();
    if($m->insertarDatos($datos)==1){
        header("location: ../index.php");
    }else{
        echo "no se agrego correctamente";
    }

?>