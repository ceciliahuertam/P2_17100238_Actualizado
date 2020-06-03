<?php
include_once 'basedatos/conexion.php'; // Localizamos donde esta nuestra conexion 
$objeto = new Conexion();
$conexion = $objeto->Conectar();//Nos conectamos

// Hacemos un select para que nos muestre toda la bd
$consulta = "SELECT * FROM usuario"; 
$resultado = $conexion->prepare($consulta);
$resultado->execute(); // Ejecutamos la consulta
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);//Asociamos
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!--   Tablas -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title></title>
    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
    </style>  
      
  </head>
  <body>
    <h1 class="text-center">PICMOVE</h1>
      
    <h3 class="text-center">Registro de usuarios</h3>
    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuario" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                <!--Asignamos el encabezado de la tabla-->
                    <th>ID_Usuario</th>
                    <th>Rol</th>
                    <th>Puesto</th>
                    <th>Contrasena</th>
                    <th>Nombre Usuario</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>RFC</th>
                    <th>Fecha Nacimiento</th>
                    <th>Fecha Registro</th>
                </thead>
                <tbody>
                    <?php
              //Recorrremos la tabla usuario para que nos muestre uno por uno los registros 
                        foreach($usuarios as $usuario){ 
                    ?>
                    <tr>
                    <!-- Aqui tenemos que agregar las columnas de la bd tal y como estan-->
                        <td><?php echo $usuario['ID_Usuario']?></td>
                        <td><?php echo $usuario['Rol']?></td>
                        <td><?php echo $usuario['Puesto']?></td>
                        <td><?php echo $usuario['Contrasena']?></td>
                        <td><?php echo $usuario['Nombre_Usuario']?></td>
                        <td><?php echo $usuario['Telefono_Usuario']?></td>
                        <td><?php echo $usuario['Direccion_Usuario']?></td>
                        <td><?php echo $usuario['RFC_Usuario']?></td>
                        <td><?php echo $usuario['Fecha_Nac']?></td>
                        <td><?php echo $usuario['Fecha_registro']?></td>
                        
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
    

<!--Importamos algunos enlaces-->

    <!-- JavaScript-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      
      
<!--    Datatables- Tabla colores-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      


    <script>
      $(document).ready(function(){
         $('#tablaUsuario').DataTable(); 
      });
    </script>
      
      
  </body>
</html>