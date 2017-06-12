<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <title>Mantenedor Alumnos </title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/estilosindex.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <script src="js/alertify.min.js"></script>
    <link rel="stylesheet" href="css/alertify.core.css">
    <link rel="stylesheet" href="css/alertify.default.css">
    
</head>    
<body>
   
   
   
      
   
   
    
    <div class="container">
        
           <nav class="navbar navbar-default  navbar-fixed-top" role="navigation" id="navegacion">
         
         <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex1-collapse">
                      <span class="sr-only"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
              </button>
             <a href="index.php" class="navbar-brand">Mantenedor CRUD Alumnos</a>
         </div>
         <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
        <div class="collapse navbar-collapse" id="navbar-ex1-collapse">
            <ul class="nav navbar-nav" role="menu">
                <li class=""><a href="index.php"><span class="glyphicon glyphicon-check"></span> Mostrar resultados</a></li>
                <li class=""><a href="agregar.php"><span class="glyphicon glyphicon-cloud"></span> Ingresar Alumno</a></li>
                <li class=""><a href="ver.php"><span class="glyphicon glyphicon-camera"></span> Añadir fotografía</a></li>
                
            </ul>
           
        </div>
       
    
    </nav>
              
            <form action="" class="navbar-form navbar-right" role="search" method="post">     
                <div class="form-group">
                    <input type="text" class="form-control"  id="busqueda" name="palabra" size="50" placeholder="Buscar alumno por id,rut,nombres,carreras,email y situación" value="">
                </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-default btn-md" id="buscar" name="buscar">Buscar</button>
                </div>
               
            </form>  
       
    </div>
     <br>
     
     
     
     
     
     <div class="table-responsive" id="scroll">
            
           <h2>Datos del alumno</h2>
           <br>
    <div class="panel-body pre-scrollable">
          <table class="table  table-bordered table-condensed " id="mostrar" >
              
              <thead>
                 
                 <tr>
                  <th>ID alumno</th>
                  <th>Rut</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Carrera del alumno</th>
                  <th>Email</th>
                  <th>Situación actual</th>  
                  <th colspan="2">Acciones</th>  
               
                 </tr>
                       
                  
              </thead>
           
              <tbody>
                    <?php
            
                            require ('conexion.php');
          
                              $consulta="SELECT id_alumno,rut,nombres,apellidos,carrera,correo,situacion FROM nuevo_registro ORDER BY id_alumno DESC";
                              $resultado=$mysqli->query($consulta);
                
                //campos de la base de datos de la tabla nuevo_registro;
                  
                      while($fila=$resultado->fetch_assoc()){?>
                          
                       <tr>
                         <td class="success"><?php echo $fila['id_alumno'];  ?></td>   
                         <td class="success"><?php echo $fila['rut'];?></td>
                         <td class="success"><?php echo $fila['nombres']; ?></td>
                         <td class="success"><?php echo $fila['apellidos']; ?></td>
                         <td class="success"><?php echo $fila['carrera']; ?></td>
                         <td class="success"><?php echo $fila['correo']; ?></td>
                         <td class="success"><?php echo $fila['situacion']; ?></td>
                        
                      
             
                         <td class="success"><a class="btn btn-info" id="actualizar" href="actualizar.php?update=<?php echo $fila['id_alumno']; ?>"><span class="glyphicon glyphicon-pencil"></span> Actualizar</a></td>
                         <td class="success"><a class="btn btn-danger"  name="eliminar" onclick=" return confirmar(<?php echo $fila['id_alumno']; ?>)" href="eliminar.php?eliminar=<?php echo $fila['id_alumno'] ; ?>"><span class="glyphicon glyphicon-remove"></span> Eliminar</a></td>
                       
                     </tr>
                     
                <?php  }?>
              </tbody>
              
         
              
          </table>
         </div> 
            
     </div>
          
              <br>
            <a href="reportes.php" class="Btn btn-danger  btn-lg" id="pdf" target="_blank"><span class="glyphicon glyphicon-download"></span> Generar reporte PDF</a>
             <br>
          
          
          
          
          
          
           
            <script type="text/javascript">
                    
                     
                  
                    function confirmar(id_alumno){
                        
                        var texto="¿Seguro que deseas eliminar el alumno con id "+id_alumno+"?";
                        
                        if(window.confirm(texto)){
                               
                             
                              window.location.href="eliminar.php?=id_alumno"+id_alumno;
                              return true;
                          
                             
                        }else{
                           //  alertify.alert("Cancelado");
                            alertify.error("Operación Cancelada");
                             return false;
                        }
                    }
     
           </script>
           
                  <?php 
    
                      require('conexion.php');               
                      
                      if(isset($_POST['buscar'])){
                          
                           
                          $buscar=$_POST['palabra'];
                          
                          if(empty($buscar)){
                              
                              echo '<script>alertify.alert("No se ah ingresado ningúna palabra");</script>';
                          }else{
                              
                  $consulta="SELECT * FROM nuevo_registro WHERE id_alumno LIKE'%".$buscar."%' OR rut LIKE'%".$buscar."%' OR nombres LIKE'%".$buscar."%' OR apellidos LIKE'%".$buscar."%'OR carrera LIKE'%".$buscar."%' OR correo LIKE'%".$buscar."%' OR situacion LIKE '%".$buscar."%'";
                  $resultado=$mysqli->query($consulta);
                          
                              if($resultado->num_rows >0){
                                    
                                  $mostrar="<br><br>
                                  
                    <div class='panel-body pre-scrollable' style='max-height:400px;max-width:100%;margin-left:50px;margin-right:50px;'>
                                  <table class='table  table-bordered table-condensed ' id='mostrar' style='width:90%; margin-left: 60px;position:static;' >
                                                   <thead>
                                                        <h1 style='float:right; margin-right:35%;'>Resultados de la búsqueda:</h1>
                                                     <tr>
                                                       <th style='font-weight:300;text-align:center ;background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; '>ID alumno</th>
                                                       <th style='font-weight:300;text-align:center; background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; '>Rut</th>
                                                       <th style='font-weight:300;text-align:center; background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; '>Nombres</th>
                                                       <th style='font-weight:300;text-align:center; background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; '>Apellidos</th>
                                                       <th style='font-weight:300;text-align:center; background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; '>Carrera del alumno</th>
                                                       <th style='font-weight:300;text-align:center; background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; '>Email</th>
                                                       <th style='font-weight:300;text-align:center; background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; '>Situación actual</th>  
                                                       <th style='font-weight:300;text-align:center; background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; ' colspan='2'>Acciones</th>  
                                                       <th style='font-weight:300;text-align:center; background-color:#2036F1;color:#fff;padding:8px 8px 8px 8px; ' colspan='2'>Reportes</th>  
                                                       
                                                    </tr>
                       
                  
                                                 </thead>      
                                           
                                  
                                  
                                  
                                  
                                 <tbody> ";
                                  
                                while($fila=$resultado->fetch_assoc()){
                                    
                                    $mostrar.="  <tr style='text-align:center;'>
                                    <td class='success' style='text-align:center;padding-top:8px;font-weight:bolder;font-size:12px;'>".$fila['id_alumno']."</td>   
                                    <td class='success' style='text-align:center;padding-top:8px;font-weight:bolder;font-size:12px;'>".$fila['rut']."</td>
                                    <td class='success' style='text-align:center;padding-top:8px;font-weight:bolder;font-size:12px;'>".$fila['nombres']."</td>
                                    <td class='success' style='text-align:center;padding-top:8px;font-weight:bolder;font-size:12px;'>".$fila['apellidos']."</td>
                                    <td class='success' style='text-align:center;padding-top:8px;font-weight:bolder;font-size:12px;'>".$fila['carrera']."</td>
                                    <td class='success' style='text-align:center;padding-top:8px;font-weight:bolder;font-size:12px;'>".$fila['correo']."</td>
                                    <td class='success' style='text-align:center;padding-top:8px;font-weight:bolder;font-size:12px;'>".$fila['situacion']."</td>
                                   <td class='success style='text-align:center;'><a class='btn btn-info' id='actualizar' href='actualizar.php?update=".$fila['id_alumno']."'>         <span class='glyphicon glyphicon-pencil'></span> Actualizar</a></td>
                         <td class='success' style='text-align:center;'><a class='btn btn-danger'  name='eliminar' onclick='return confirmar(".$fila['id_alumno'].")' href='eliminar.php?eliminar=".$fila['id_alumno']."' ><span class='glyphicon glyphicon-remove'></span> Eliminar</a></td>          
                                    
                           <td class='success' style='text-align:center;'><a href='reporte.php?reporte=".$fila['id_alumno']."' name='reporte' target='_blank' class='btn btn-danger  btn-md' id='pdf2'><span class='glyphicon glyphicon-download'></span> Generar reporte PDF</a> </td>           
                                    
                                    
                                    </tr>
                                
                                  
                                    
                                    ";
                                      
                                }
                                  
                               $mostrar.="</tbody></table>
                               </div>
                               <br>
                               <br>
                               <br>
                               <br>
                            
    
                               ";   
                                  
                                  
                                  
                              }else{
                                  $mostrar=""; 
                                  $mostrar.="<script>alertify.alert('No se encuentran datos')</script>";
                                 
                              }
                              echo $mostrar;
                           
                        
                          }
                      }
          
    
                             $mysqli->close();
                    ?>
                          
                <br><br><br><br><br>          
                <div class="footer">
                 <cite>Autor del proyecto: Jonathan Donoso Castro, derechos reservados &copy;  </cite> 
                </div>
    
          
                
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
   
    
</body>



</html>