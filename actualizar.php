
           
           
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Editar alumnos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/alertify.core.css">    
     <link rel="stylesheet" href="css/alertify.default.css"> 
     <script src="js/alertify.min.js"></script>  
     <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> 
       <link rel="stylesheet" href="css/estilosactualizar.css"> 
</head>
<body>
    
    
    
    
       <?php    
      
                   
    
                     require('conexion.php');
                    
                              
                     $id_alumno=$_GET['update'];
                                  
    
    
                     $consulta="SELECT id_alumno,rut,nombres,apellidos,carrera,correo,situacion FROM nuevo_registro WHERE id_alumno='$id_alumno'";    
                     $resultado=$mysqli->query($consulta);
    
    
                     $fila=$resultado->fetch_array();
                             
 
           ?>
    
    
    <div class="container">
         
         <div class="menu-pie">
              <ul class="row pager">
                  <li class="previous"> <a href="index.php"><span aria-hidden="true"></span>&larr;Volver al menú principal</a></li>
              </ul>
         </div>
             
    </div>
       
    <div class="container">
            <div class="panel">
                  <div class="panel-heading">
                     <h1>Editar datos del alumno</h1> 
                  </div>
                  <div class="panel-body" id="scroll">
                        <form action="" method="post" class="form-horizontal" role="form" autocomplete="off" accept-charset="utf-8">
                            
                        <div class="form-group">
                            <label for="id_alumno" class="col-sm-1 control-label">ID alumno</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="id_alumno" value="<?php echo $fila['id_alumno']; ?>" disabled>
                            </div>
                        </div>    
                            
                            
                         <div class="form-group">
                           <label for="rut" class="col-sm-1 control-label">Rut</label>
                           <div class="col-sm-5">
                               <input type="text" class="form-control" name="rut" id="rut" maxlength="14" value="<?php echo $fila['rut'];  ?>" onkeypress="return validarnumerosy_rut_k(event)">
                               <div id="validarrut">favor editar rut (campo requerido *)</div>
                           </div>
                           <br>
                       </div>
                          <div class="form-group">
                              <label for="nombre" class="col-sm-1 control-label">Nombres</label>
                              <div class="col-sm-5">
                                   <input type="text" id="nombres" name="nombres" class="form-control" value="<?php  echo $fila['nombres']; ?>" onkeypress="return validarletras(event)">
                                    <div id="validarnombres">favor editar los nombres (campo requerido *)</div>
                              </div>
                              <br>
                              <br>
                          </div>
                          <div class="form-group">
                               <label for="apellidos" class="col-sm-1 control-label">Apellidos</label>
                               <div class="col-sm-5">
                                   <input type="text" id="apellidos"  name="apellidos" class="form-control" value="<?php echo $fila['apellidos']; ?>" onkeypress="return validarletras(event)">
                                    <div id="validarapellidos">favor editar los apellidos (campo requerido *)</div>
                               </div>
                               <br>
                               <br>
                          </div>
                          
                          
              <div class="form-group">
                              <label for="carrera" class="col-sm-1 control-label">Carrera</label>
                    <div class="col-sm-5">
                        
                                  <select name="carrera"  class="form-control" id="carrera">
                                      
                                      <option value="Analista Programador" <?php if($fila['carrera']=='Analista Programador') echo 'selected'; ?>>Analista Programador</option>
                                      <option value="Técnico en Finanzas" <?php if($fila['carrera']=='Técnico en Finanzas') echo 'selected'; ?>>Técnico en Finanzas</option>
                                      <option value="Técnico en Administración de Recursos Humanos"<?php if($fila['carrera']=='Técnico en Administración de Recursos Humanos') echo 'selected'; ?>>Técnico en Administración de Recursos Humanos</option>
                                      <option value="Producción de Eventos" <?php if($fila['carrera']=="Producción de Eventos")echo 'selected'; ?>>Producción de Eventos</option>  
                                      <option value="Técnico en Comercio Exterior" <?php if($fila['carrera']=="Técnico en Comercio Exterior")echo 'selected'; ?>>Técnico en Comercio Exterior</option>  
                                      <option value="Técnico en Topografía"<?php if($fila['carrera']=="Técnico en Topografía") echo 'selected'; ?>>Técnico en Topografía</option>   
                                      <option value="Técnico en Geología"<?php if($fila['carrera']=="Técnico en Geología") echo 'selected'; ?>>Técnico en Geología</option>
                                      <option value="Técnico en Estética Integral"<?php if($fila['carrera']=="Técnico en Estética Integral") echo 'selected'; ?>>Técnico en Estética Integral</option>
                                      <option value="Técnico en Educación Parvularia"<?php if($fila['carrera']=="Técnico en Educación Parvularia")echo 'selected'; ?>>Técnico en Educación Parvularia</option>
                                      <option value="Técnico en Servicio Social"<?php if($fila['carrera']=="Técnico en Servicio Social")echo 'selected'; ?>>Técnico en Servicio Social</option>
                                      <option value="Técnico en Relaciones Públicas"<?php if($fila['carrera']=="Técnico en Relaciones Públicas")echo 'selected'; ?>>Técnico en Relaciones Públicas</option>
                                      <option value="Técnico en Diseño Gráfico Publicitario"<?php if($fila['carrera']=="Técnico en Diseño Gráfico Publicitario")echo 'selected'; ?>>Técnico en Diseño Gráfico Publicitario</option>
                                      <option value="Técnico en Fotografía"<?php if($fila['carrera']=="Técnico en Fotografía")echo 'selected'; ?>>Técnico en Fotografía</option>
                                      <option value="Técnico en Negocios y Gestión Comercial"<?php if($fila['carrera']=="Técnico en Negocios y Gestión Comercial")echo 'selected'; ?>>Técnico en Negocios y Gestión Comercial</option>
                                      <option value="Técnico en Gestión de Empresas"<?php if($fila['carrera']=="Técnico en Gestión de Empresas")echo 'selected'; ?>>Técnico en Gestión de Empresas</option>
                                      <option value="Técnico en Marketing" <?php if($fila['carrera']=='Técnico en Marketing') echo 'selected'; ?> >Técnico en Marketing</option>
                                      <option value="Contador General"<?php if($fila['carrera']=="Contador General") echo 'selected'; ?>>Contador General</option>
                                      <option value="Asistente Ejecutivo y de Gestión"<?php if($fila['carrera']=="Asistente Ejecutivo y de Gestión")echo 'selected'; ?>>Asistente Ejecutivo y de Gestión</option>
                                      <option value="Técnico en Construcción"<?php if($fila['carrera']=="Técnico en Construcción")echo 'selected'; ?>>Técnico en Construcción</option>
                                      <option value="Técnico en Prevención de Riesgos"<?php if($fila['carrera']=="Técnico en Prevención de Riesgos")echo 'selected'; ?>>Técnico en Prevención de Riesgos</option>
                                      <option value="Técnico en Minería"<?php if($fila['carrera']=="Técnico en Minería")echo 'selected'; ?>>Técnico en Minería</option>
                                      <option value="Técnico en Conectividad y Redes"<?php if($fila['carrera']=="Técnico en Conectividad y Redes")echo 'selected'; ?>>Técnico en Conectividad y Redes</option>
                                      <option value="Técnico en Hotelería"<?php if($fila['carrera']=="Técnico en Hotelería")echo 'seelcted'; ?>>Técnico en Hotelería</option>
                                      <option value="Turismo Sustentable"<?php if($fila['carrera']=="Turismo Sustentable")echo 'selected'; ?>>Turismo Sustentable</option>
                                      <option value="Visitador Médico"<?php if($fila['carrera']=="Visitador Médico")echo 'selected'; ?>>Visitador Médico</option>
                                      <option value="Masoterapia"<?php if($fila['carrera']=="Masoterapia")echo 'selected'; ?>>Masoterapia</option>
                                      <option value="Laboratorista Dental"<?php if($fila['carrera']=="Laboratorista Dental")echo 'selected'; ?>>Laboratorista Dental</option>
                                  </select>
                                   <div id="validarcarrera">favor editar carrera (campo requerido *)</div>
                               </div>
                         </div>           
                              <br>
                            <div class="form-group">
                                <label for="email" class="col-sm-1 control-label">Email</label>
                                <div class="col-sm-5">
                                        <input type="email" name="correo" id="correo" class="form-control" value="<?php  echo $fila['correo'];  ?>" onkeypress="return validarcorreo(event)">
                                         <div id="validarcorreo">favor editar el correo (campo requerido *)</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="situacion" class="col-sm-1 control-label">Situación</label>
                                
                                   <div class="radio">
                                    <label for="check1" class="radio-inline control-label"> <input type="radio" value="Egresado" <?php if(strpos($fila['situacion'],"Egresado")!==false)echo 'checked';  ?> id="situacion" name="situacion">Egresado</label>
                                
                                    <label for="check2" class="radio-inline  control-label"> <input type="radio" value="Congelada" <?php if(strpos($fila['situacion'],"Congelada")!==false)echo 'checked'; ?> id="situacion" name="situacion">Carrera congelada</label>
                                    
                                    <label for="check3" class="radio-inline  control-label"> <input type="radio"   value="En práctica"  <?php  if(strpos($fila['situacion'],"En práctica")!==false) echo 'checked';?> id="situacion" name="situacion">En práctica</label>
                                    
                                    <label for="check4" class="radio-inline  control-label"> <input type="radio" value="Monografía" <?php if(strpos($fila['situacion'],"Monografía")!==false)  echo 'checked';?> id="situacion" name="situacion">En monografía</label>
                                           
                                    <label for="check5" class="radio-inline  control-label"><input type="radio" value="Titulado" <?php if(strpos($fila['situacion'],"Titulado")!==false) echo 'checked'; ?> id="situacion" name="situacion" >Titulado</label>   <!---  es necesario tener uno de cualquiera de los radiobutton checked para  dar checkeado al momento de actualizar su valor   if(strpos($fila['situacion'],"Titulado")!==false) echo 'checked'; entonces despues le agregamos un "checked" mas ... !-->
                                </div>
                                    
                                <br>
                                <br>
                                <br>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" value="actualizar" class="btn  btn-lg btn-block" id="actualizar"  name="actualizar" onsubmit="return validar();"> <span class="glyphicon glyphicon-ok"></span> Actualizar</button>
                            </div>
                        
                            
                            
                        </form>
                  </div>
            </div> 
        
    </div>   
       <br><br><br><br>

        
          <?php  
    
                        require('conexion.php');
                                              
                        if(isset($_POST['actualizar'])){
                               
                            $rut=$_POST['rut'];
                            $nombres=$_POST['nombres'];    
                            $apellidos=$_POST['apellidos'];
                            $carrera=$_POST['carrera'];
                            $correo=$_POST['correo'];
                            $situacion = isset($_POST['situacion']) ? $_POST['situacion'] : null;  
                            
                                 
                     $actualizar="UPDATE nuevo_registro SET rut='$rut', nombres='$nombres', apellidos='$apellidos', carrera='$carrera', correo='$correo', situacion='$situacion' WHERE id_alumno='$id_alumno'";
                     $resultado=$mysqli->query($actualizar);
                      
                       if($resultado>0){
                           echo '<script> alertify.alert("Los datos fueros actualizados correctamente");  </script>';
                       }else{
                          echo '<script> alertify.alert("error al actualizar");  </script>'; 
                       }                     
                     }                                                           
            ?>

       
       
       
       
       
       <script type="text/javascript">
    
        
            function validarnumerosy_rut_k(e){
                
                var key= window.Event ? e.keyCode : e.which
                
                return ((key>=48 && key<=57) ||(key==107) || (key==46)||(key==45)|| (key==8)  )
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
                
                 return((key>=65 && key<=90) || (key>=97 && key<=122 )||(n.test(validarsoloenie))|| (key==32) || (key==8)  )
                       //key = 65  = A
                       //key = 90 = Z
                       //key = 97 =a
                       //key=122=z
                      //key =8 = borrar...
                 //key=32 espacio ....
                
            }
           
            
           function validarcorreo(e){
               
               var key=window.Event ? e.keyCode : e.which
               
                return((key>=65 && key<=90) || (key>=97 && key<=122) || (key==64) ||( key==45)|| (key==46) ||(key>=48 && key<=57 ) ||(key==95 ) ||(key==8))
                  
                 //del 65 al 90 = A-Z 
                 //del 97 al 122= a-z
                //el 64 = @
                //el45= -
                //el 46= .
                //del 48 al 57 = 0 al 9
                //el 8 = retroceso...
               //el 95 = _
           }
           
           
           
    
       </script>
       
       
       
       
       
       
       
       
    
    
    <script src="js/jquery.js"></script>
    <script src="js/main_actualizar.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>