<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Resumen detalles</title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/alertify.core.css">
    <link rel="stylesheet" href="css/alertify.default.css">
    <link rel="stylesheet" href="css/estilodetalles.css">
    <script src="js/alertify.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
    
    
    
</head>
<body>
  
        
               <?php  
                    require('conexion.php');
                    $nom="";   //undefined variable  al iniciar 
                    $ape="";   //undefined variable al iniciar
                    $id="";    //undefined variable al iniciar
                  if(isset($_POST['buscar'])){    
                    //  $id_alumno=isset($_POST['id_alumno'])? $_POST['id_alumno']: null; //iniciamos las variables  me trae el id de los campos name
                    //  $nombres=isset($_POST['nombres'])? $_POST['nombres']: null; //iniciamos las variables de los campos name
                  //    $apellidos=isset($_POST['apellidos'])? $_POST['apellidos']: null;  //iniciamos las  variables de los campos name
                      $buscar=isset($_POST['palabra'])? $_POST['palabra']:null;//iniciamos las  variables de los campos name    
                      if(empty($buscar)){      
                         echo'  <script>alertify.alert("Debes escribir el id o rut del alumno"); </script>';
                       
                      }else{ 
                          
                      $consulta="SELECT id_alumno,rut, nombres,apellidos FROM nuevo_registro WHERE id_alumno LIKE '".$buscar."%' OR rut LIKE '".$buscar."%'";
                      $resultado=$mysqli->query($consulta);
                       
                            if($resultado->num_rows==0){ //busca dentro del array fila de acuerdo a la busqueda ..
                          echo '<script>alertify.alert("no se encuentran resultados") </script>';
                      } 
                                   
                        while($fila=$resultado->fetch_array()){
                            
                             $id=$fila['id_alumno'];  //campos de la base de datos
                             $nom=$fila['nombres'];
                             $ape=$fila['apellidos'];
                         }           
                      }            
                  } 
    ?>
    
               
               
          <?php 
    
              
                   
              if(isset($_POST['guardar'])){
                  
               require_once('conexion.php');   
                  
    
               $id_alumno=isset($_POST['id_alumno'])? $_POST['id_alumno']:null;  //son los names de cada input
               $nombres=$_POST['nombres'];
               $apellidos=$_POST['apellidos'];
               $imagen=$_FILES['foto']['name'];  // name del input imagen 
               $ruta=$_FILES['foto']['tmp_name']; // name del input imagen mas la ruta por defecto
               $destino="imagenes/".$imagen;
              // @move_uploaded_file($ruta,$destino);
               copy($ruta,$destino);
                    
               $consulta="INSERT INTO detalles(id_alumno,nombres,apellidos,imagen) VALUES('$id_alumno','$nombres','$apellidos','$destino')";
               $resultado=$mysqli->query($consulta);
                      
                    
                 if($resultado>0){
                     echo '<script>alertify.alert("Detalles guardados "); </script>';
                
                 }else{
                     echo '<script>alertify.alert("error al guardar");</script>';
                 }
                     
                     
           }

           ?>
               
               
         <div class="container">
              <div class="menu-pie">
         <ul class="row pager">
             <li class="previous"><a href="index.php"><span aria-hidden="true"></span>&larr; Regresar al inicio</a></li>
         </ul>    
              </div>                                  
         </div>      
               
               
   
   
       <div class="container">
                      
              <div class="panel">
                  <div class="panel-heading">
                        <h1>Ingreso Fotográfico</h1>
                  </div>
                  <div class="panel-body">
                      
                      <form action="ver.php" method="post" name="ingreso"  class="form-horizontal" role="form" autocomplete="off" accept-charset="utf-8" enctype="multipart/form-data">
                          <div class="form-group">
                               <div class="col-sm-5">
                                    <input type="text" name="palabra" id="palabra" class="form-control" value="" placeholder="Buscar por id o rut ej 12.345.678-9 ej:1111" onkeypress="return validarnumerosyletra_k(event)">
                                     
                               </div>
                               <div class="col-sm-5">
                                   <button type="submit" name="buscar" id="buscar" value="Buscar" class="btn btn-info "><span class="glyphicon glyphicon-search"></span>  Buscar por ID o Rut</button>
                              <div id="validarpalabra">Debes buscar o indicar en el campo requerido *</div>
                               </div>
                               <br>
                               <br>
                               <br>
                          </div>
                          
                          <div class="form-group">
                                 <label for="id_alumno" class="col-sm-2 control-label">ID alumno</label>
                                <div class="col-sm-5">
                                     <input type="text" name="id_alumno" id="id_alumno" class="form-control" readonly value="<?php  echo $id; ?>"  >
                                </div>
                                <br>
                                <br>
                          </div>
                                 
                          
                          <div class="form-group">
                              <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                              <div class="col-sm-5">
                                    <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $nom; ?>"   onkeypress="return validarletras(event)">
                                    <div id="validarnombre">Puedes modificar el nombre pero no dejar sin datos, campo requerido *  </div>
                              </div>
                              <br>
                              <br>
                          </div>
                            <div class="form-group">
                              <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                              <div class="col-sm-5">
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $ape; ?>"  onkeypress="return validarletras(event)">
                                    <div id="validarapellidos">Puedes modificar los apellidos pero no dejar sin datos, campo requerido *</div>
                              </div>
                              <br>
                              <br>
                          </div>
                           <div class="form-group">
                               <label for="imagen" class="col-sm-2 control-label">Fotografía</label>
                               <div class="col-sm-6">
                                       <input type="file" name="foto" id="imagen" class="form-control"  >
                                   <div id="validarimagen">Debes añadir la fotografía del alumno, campo requerido * </div>
                               </div> 
                               <br>
                               <br>   
                           </div>
                          <div class="form-group">
                              <div class="col-sm-5">
                                  <button type="submit" name="guardar" id="guardar" value="Guardar" class="btn  btn-lg" onsubmit="return validar()" ><span class="glyphicon glyphicon-ok-sign"></span> Guardar detalles</button>
                              </div>
                            
                          </div>
                          
                          
                      </form>
                      
                      
                  </div>
              </div>     
       </div>
          
             <br>
             <br>
             <br>
               
            
                  <form action="ver.php" method="post" role="form" accept-charset="utf-8" autocomplete="off">
                      
                        <div class="container">
                         <div class="form-group">
                            <div class="col-sm-4">
                                <input type="text" name="palabra" id="buscar" class="form-control"  placeholder="Buscar el alumno">
                            </div>
                             <div class="col-sm-4">
                                 <button type="submit" id="busqueda" name="busqueda" class="btn btn-info btn-md"> Buscar</button>
                             </div>
                         </div>
                   </div> 
                      
                  </form>
                
              <br>
              <br>
              <br>
              
              
           
    <div class="panel-body pre-scrollable" id="mostrar">        
            <table border="1"  class="table table-bordered table-condensed">
              
              <thead>
                  <tr>
                        <th>ID</th>    
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Fotografía</th>
                        <th>Acción</th> 
                      
                  </tr>
                
              </thead>
              <tbody>
                        
               <?php  
                  
                  require_once 'conexion.php';
                  
                  $consulta="SELECT * FROM detalles ORDER BY id_alumno DESC";
                  $resultado=$mysqli->query($consulta);
                
                
                   while($fila=$resultado->fetch_array()){  ?>
                      
                 <tr>
                    <td class="active"><?php echo $fila['id_alumno']; ?></td>
                    <td class="active"><?php echo $fila['nombres'];  ?></td>
                    <td class="active"><?php echo $fila['apellidos'];  ?></td>
                    <td class="active"><?php echo '<img src="'.$fila['imagen'].'" width="80px" height="70px">' ?></td>
                 <!--  <td class="active"><?php echo '<a name="quitar" class="btn btn-warning btn-sm" href="ver.php?quitar='.$fila["id_alumno"].'><span class="glyphicon glyphicon-remove"></span> Quitar</a>  '?></td> -->
                   <td class="active"><a  class="btn btn-danger btn-sm" href="ver.php?quitar=<?php echo $fila['id_alumno']; ?>" onclick="return confirmar(<?php echo $fila['id_alumno']; ?>)"><span class="glyphicon glyphicon-remove"></span> Quitar</a></td>
                </tr> 
                        
                          
                  <?php } ?>
                  
                            
                 </tbody>  
            </table>                  
     </div>
          <br>
          <br>
        
          
                <?php 
    
                require('conexion.php');
                if(isset($_POST['busqueda'])){   
                    $buscar=$_POST['palabra'];
                      
                      if(empty($buscar)){   
                          echo '<script>alertify.alert("debes ingresar los datos a buscar"); </script>';      
                      }else{
                               $consulta="SELECT id_alumno,nombres,apellidos,imagen FROM detalles WHERE id_alumno like'".$buscar."%' OR nombres like'".$buscar."%' OR apellidos like '".$buscar."%'  ";
                              $resultado=$mysqli->query($consulta);
                              if($resultado->num_rows>0){   
                                  $mostrar="";  
                                  $mostrar="
                                  
                                      <br><br>
                                                
    <div class='panel-body pre-scrollable' id='mostrar'>        
            <table border='1'  class='table table-bordered table-condensed'>
              
              <thead>
                  <tr>
                        <th>ID</th>    
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Fotografía</th>
                        <th>Acción</th> 
                      
                  </tr>
                
              </thead>
              <tbody>";
                                  
                                while($fila=$resultado->fetch_assoc()){
                                    
                                    $mostrar.="
                                                    
                 <tr>
                    <td class='active'>".$fila['id_alumno']."</td>
                    <td class='active'>".$fila['nombres']."</td>
                    <td class='active'>".$fila['apellidos']."</td>
                    <td class='active'>'<img src=".$fila['imagen']." width='80px' height='70px'>'</td>
                 <!--  <td class='active'>'<a name='quitar' class='btn btn-warning btn-sm' href='ver.php?quitar=".$fila["id_alumno"]."><span class='glyphicon glyphicon-remove'></span> Quitar</a>'</td> -->
                   <td class='active'><a  class='btn btn-danger btn-sm' href='ver.php?quitar=".$fila['id_alumno']."'  onclick='return confirmar(".$fila['id_alumno'].")'><span class='glyphicon glyphicon-remove'></span> Quitar</a></td>
                </tr>";               
                                }  
                                  
                            $mostrar.="</tbody></table></div>";     
                                  
                              }else{
                                  $mostrar="";
                                 $mostrar.="<script> alertify.alert('No se encuentran datos');</script>";
                                  
                              }   
                          echo $mostrar;
                          
                      }     
                 }
            
             ?>
          
          
          
          
          
              
   
             <?php 
    
                 require('conexion.php');
                 
                 if(isset($_GET['quitar'])){
                     
                       $id_alumno=$_GET['quitar'];
                       
                       header('location:ver.php');
                       
                       $consulta="DELETE FROM detalles WHERE id_alumno='$id_alumno'";
                       $resultado=$mysqli->query($consulta);
                       
                        if($resultado>0){
                       //      echo 'quitado';
                          
                        }
                     
                 }
                
    
               ?>    
     
         
         
         
         
         
         
         
          
          <script type="text/javascript">
    
            function confirmar(id_alumno){
                
                 var mensaje="¿Seguro que deseas eliminar los datos junto a la foto del alumno?";
                  
                 if(window.confirm(mensaje)){
                     
                     window.location.href="ver.php?=id_alumno"+id_alumno;
            
                     return true;
                 }else{
                   //  alertify.alert("Cancelado");
                     alertify.error("Operación cancelada");
                     return false;
                 }
                
            }
           
                    
         </script>
         
         
         
          
          <script type="text/javascript">
           
                 
                 function validarnumerosyletra_k(e){
                     
                     
                     var key=window.Event ? e.keyCode : e.which 
                      
                   return ((key>=48 && key<=57)||(key==107)||(key==46)||(key==45)  || (key==8))
                     
                                       //46=. 
                                       //107=k
                                       //45=-
                                       //8=retroceso
                                      //48 a 57= numeros del 0 al 9     
                 }
    
           
              
              
              function validarletras(e){
                  
                  
                  var key=window.Event ? e.keyCode : e.which
                  var n=/[A-Za-zñÑ]/ ;  //lo quiero solo para validar la ñ y Ñ
                  var validarsoloenie=String.fromCharCode(key);
                  
                    return ((key>=65 && key<=90) || (key>=97 && key<=122)||(n.test(validarsoloenie)) ||(key==32)|| (key==8))
                        //key = 65  = A
                       //key = 90 = Z
                       //key = 97 =a
                       //key=122=z
                      //key =8 = borrar...
                    //key=32 espacio....
            
              }
              
    
          </script>
          
          
          
          
          
          
          
          
   
   <script src="js/jquery.js"></script>
   <script src="js/main_ver.js"></script>
   <script src="js/bootstrap.min.js"></script>
    
</body>
</html>