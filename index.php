<?php 

    require_once "clases/conexion.php";
    require_once "clases/metodos.php";
    // $c=new conexion();
    // if($c->conectar()){
    //     echo "conectado";
    // }else{
    //     echo "fallo";
    // }
    $obj=new metodos();
    $sql="SELECT * FROM t_informacion";
    $ver=$obj->mostrarDatos($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <?php require_once "app/dependencias.php" ?>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Examen unidad 1 - Suits de Desarrollo Web</h1>
        <form action="model/insertar.php" method="post">
            <div class="row border rounded-2">
                <h5 class="mt-3">Datos del empleado</h5>
                <div class="col datos">
                    <div class="row">
                        <div class="col">
                            <div class="label">Sueldo</div>
                            <input type="text" class="form-control" name="sueldo" required>
                        </div>
                        <div class="col">
                            <div class="label">Edad</div>
                            <input type="text" class="form-control" name="edad" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="label">Sexo</div>
                            <select name="sexo" id="" class="form-select">
                                <option value="Masculino">Masculino</option>
                                <option value="Fememino">Fememino</option>
                            </select>
                        </div>
                        <div class="col">
                            <div class="label">Nacionalidad</div>
                            <select name="nacionalidad" id="" class="form-select">
                                <option value="Nacional">Nacional</option>
                                <option value="Extrangero">Extranjero</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 ">
                <div class="col-8 cursos border rounded-2 me-4" style="width:64.7%">
                    <div class="row ">
                        <h5 class="mt-3">Cursos</h5>
                        <div class="col-5 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="curphp">
                                <label class="form-check-label" for="">PHP</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="1" name="curasp">
                                <label for="" class="form-check-label">ASP.Net</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="1" name="curvb">
                                <label for="" class="form-check-label">VB.Net</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="curjv">
                                <label class="form-check-label" for="">Java</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="1" name="curor">
                                <label for="" class="form-check-label">Oracle</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="1" name="curbd">
                                <label for="" class="form-check-label">Introduccion a BD</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 antiguedad border rounded-2">
                    <h5 class="mt-3">Antiguedad</h5>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" value="1 a 5 años" name="antiguedad" required>
                        <label for="" class="form-check-label">1 a 5 años</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" value="6 a 10 años" name="antiguedad" required>
                        <label for="" class="form-check-label">6 a 10 años</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" value="Mas de 10 años" name="antiguedad" required>
                        <label for="" class="form-check-label">mas de 10 años</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary mt-3 mb-3">Calcular y Guardar</button>
                </div>
                <hr>
                </div>
            <div class="row">
                <div class="col">
                    <h5>Listado de Informacion</h5>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <th>Seldo</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Nacionalidad</th>
                            <th>Antiguedad</th>
                            <th>PHP</th>
                            <th>ASP</th>
                            <th>VB</th>
                            <th>JAVA</th>
                            <th>Oracle</th>
                            <th>BD</th>
                            <th>Bono</th>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($ver as $key):
                            ?>
                            <tr>
                                <td><?=$key['sueldo']?></td>
                                <td><?=$key['edad']?></td>
                                <td><?=$key['sexo']?></td>
                                <td><?=$key['nacionalidad']?></td>
                                <td><?=$key['antiguedad']?></td>
                                <td><?=$key['php']?></td>
                                <td><?=$key['asp']?></td>
                                <td><?=$key['vb']?></td>
                                <td><?=$key['java']?></td>
                                <td><?=$key['oracle']?></td>
                                <td><?=$key['bd']?></td>
                                <td><?=$key['bono']?></td>
                            </tr>
                            <?php 
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</body>
</html>