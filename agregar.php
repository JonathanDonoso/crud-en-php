<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Añadir alumno</title>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link rel="stylesheet" href="css/alertify.core.css">
    <link rel="stylesheet" href="css/alertify.default.css">
    <script src="js/alertify.min.js"></script>
</head>
<body>
    
    
    
    
    
           <?php   
    
        if(isset($_POST['registro'])){            
            require ('conexion.php');    
            $rut=isset($_POST['rut']) ? $_POST['rut']: null;
            $nombres=isset($_POST['nombres']) ? $_POST['nombres']:null;
            $apellidos=isset($_POST['apellidos']) ? $_POST['apellidos']:null;
            $telefono=isset($_POST['telefono']) ? $_POST['telefono']:null;    
            $edad= isset($_POST['edad']) ? $_POST['edad']:null;     
            $comuna=isset($_POST['comuna']) ? $_POST['comuna']:null;     
            $direccion=isset($_POST['direccion']) ? $_POST['direccion']:null;        
            $carrera=isset($_POST['carrera']) ? $_POST['carrera']:null;
            $correo=isset($_POST['correo']) ? $_POST['correo']:null;       
            $situacion=isset($_POST['opciones']) ? $_POST['opciones']:null;        
    
            $consulta="INSERT INTO nuevo_registro(rut,nombres,apellidos,telefonos,edad,comuna,direccion,carrera,correo,situacion) VALUES('$rut','$nombres','$apellidos','$telefono','$edad','$comuna','$direccion','$carrera','$correo','$situacion')";    
            $resultado=$mysqli->query($consulta);   //valor numerico para guardar el   ->query($consulta);
            
             if($resultado>0){
                   echo '<script> alertify.alert("Los datos del alumno fueron ingresados exitosamente"); </script>';         
             }else{
                   echo '<script>  alertify.alert("Error no logró añadir")</script>';      
             }      
             }
         ?>
    
    
    
    
    
    
    
    
    
    
    
    <div class="container">
         <div class="menu-pie">
             
             <ul class="row pager">

                 <li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Volver al menú principal</a></li>
             </ul>
             
         </div>
        
    </div>
      
      <div class="container">
            <div class="panel ">
                 <div class="panel-heading">
                     <h1>Registrar estudiante egresado</h1>
     
                 </div>
                 <div class="panel-body" id="scroll"><!---pre-scrollable--->
                      <form action=""  method="post" class="form-horizontal" role="form" autocomplete="off" accept-charset="utf-8">
                            <div class="form-group">
                           <label for="rut" class="col-sm-1 control-label">Rut</label>
                           <div class="col-sm-5">
                               <input type="text" class="form-control" name="rut" id="rut" placeholder="Por Ej:12.345.678-9" maxlength="12" onkeypress="return validarnumerosy_rut_k(event)">
                               <div id="validarrut">el formato es incorrecto, campo requerido *</div>
                           </div>
                           <br>
                       </div>
                          <div class="form-group">
                              <label for="nombre" class="col-sm-1 control-label">Nombres</label>
                              <div class="col-sm-5">
                                   <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Escribe los nombres" onkeypress="return validartexto(event)">
                                   <div id="validarnombre">por favor ingresa solo texto, campo requerido *</div>
                              </div>
                              <br>
                          </div>
                          <div class="form-group">
                               <label for="apellidos" class="col-sm-1 control-label">Apellidos</label>
                               <div class="col-sm-5">
                                   <input type="text" id="apellidos"  name="apellidos" class="form-control" placeholder="Escribe los apellidos" onkeypress="return validartexto(event)">
                                   <div id="validarapellidos">por favor ingresa solo texto, campo requerido * </div>
                               </div>
                               <br>
                          </div>
                          <div class="form-group">
                              <label for="telefono" class="col-sm-1 control-label">Teléfono</label>
                              <div class="col-sm-3">
                                  <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Por Ej:+56912345678"  value="+569"  onkeypress="return validarnumeros(event)" maxlength="12" onpaste="return false">
                                  <div id="validartelefono">por favor solo números ,campo requerido *</div>
                              </div>
                              <br>
                          </div>
                          
                          <div class="form-group">
                              <label for="edad" class="col-sm-1 control-label">Edad</label>
                              <div class="col-sm-5">
                                  <select name="edad" id="edad"  class="form-control">
                                      <option value="" selected>-Selecciona la edad-</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                      <option value="21">21</option>
                                      <option value="22">22</option>
                                      <option value="23">23</option>
                                      <option value="24">24</option>
                                      <option value="25">25</option>
                                      <option value="26">26</option>
                                      <option value="27">27</option>
                                      <option value="28">28</option>
                                      <option value="29">29</option>
                                      <option value="30">30</option>
                                      <option value="31">31</option>
                                      <option value="32">32</option>
                                      <option value="33">33</option>
                                      <option value="34">34</option>
                                      <option value="35">35</option>
                                      <option value="36">36</option>
                                      <option value="37">37</option>
                                      <option value="38">38</option>
                                      <option value="39">39</option>
                                      <option value="40">40</option>  
                                  </select>
                                  <div id="validaredad">por favor debes seleccionar la edad, campo requerido * </div>
                              </div>
                              <br>
                              
                          </div>
                            <div class="form-group">         
                           <label for="comuna" class="col-sm-1 control-label">Comuna</label>
                           <div class="col-sm-5">
                              <select name="comuna" id="comuna" class="form-control">
                                  <option value="" selected>-Selecciona la comuna del alumno-</option>
                                  <option value="Santiago Centro">Santiago Centro</option>
                                  <option value="Providencia">Providencia</option>
                                  <option value="Puente Alto">Puente Alto</option>
                                  <option value="Pirque">Pirque</option>
                                  <option value="Pudahuel">Pudahuel</option>
                                  <option value="Lo Prado">Lo Prado</option>
                                  <option value="Lo Barnechea">Lo Barnechea</option>
                                  <option value="Maipú">Maipú</option>
                                  <option value="Cerrillos">Cerrillos</option>
                                  <option value="Lo Espejo">Lo Espejo</option>
                                  <option value="La Cisterna">La Cisterna</option>
                                  <option value="San Ramón">San Ramón</option>
                                  <option value="El Bosque">El Bosque</option>
                                  <option value="San Bernardo">San Bernardo</option>
                                  <option value="La Pintana">La Pintana</option>
                                  <option value="Estación Central">Estación Central</option>
                                  <option value="Quinta Normal">Quinta Normal</option>
                                  <option value="Cerro Navia">Cerro Navia</option>
                                  <option value="Renca">Renca</option>
                                  <option value="Quilicura">Quilicura</option>
                                  <option value="Recoleta">Recoleta</option>
                                  <option value="Huechuraba">Huechuraba</option>
                                  <option value="Las Condes">Las Condes</option>
                                  <option value="Vitacura">Vitacura</option>
                                  <option value="Nuñoa">Nuñoa</option>
                                  <option value="Macul">Macul</option>
                                  <option value="La Florida">La Florida</option>
                                  <option value="La Reina">La Reina</option>
                                  <option value="San Miguel">San Miguel</option>
                                  <option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
                                  <option value="La Dehesa">La Dehesa</option>
                                  <option value="El Bosque">El Bosque</option>
                                  <option value="La Granja">La Granja</option>
                                  <option value="San Joaquín">San Joaquín</option>
                                  <option value="Peñalolen">Peñalolen</option>
                                  <option value="Independencia">Independencia</option>
                                  <option value="Conchali">Conchalí</option>
                                  <option value="Colina">Colina</option>
                                  <option value="Talagante">Talagante</option>
                              </select>
                              <div id="validarcomuna">por favor selecciona tu comuna, campo requerido *</div>    
                           </div>
                           <br>
                         
                          </div>
                           <div class="form-group">
                              <label for="direccion" class="col-sm-1 control-label">Dirección</label>
                              <div class="col-sm-5">
                                    <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Escribe la dirección" onkeypress="return validardireccion(event)">
                                    <div id="validardireccion">añade tu dirección, campo requerido *</div>     
                              </div>
                              <br>
                              
                        </div>
                        
                          <div class="form-group">
                              
                              <label for="carrera" class="col-sm-1 control-label">Carrera</label>
                              <div class="col-sm-5">
                                  <select name="carrera"  class="form-control" id="carrera">
                                      <option value="" selected>-Selecciona la carrera del alumno-</option>
                                      <option value="Analista Programador">Analista Programador</option>
                                      <option value="Técnico en Finanzas">Técnico en Finanzas</option>
                                      <option value="Técnico en Administración de Recursos Humanos">Técnico en Administración de Recursos Humanos</option>
                                      <option value="Producción de Eventos">Producción de Eventos</option>  
                                      <option value="Técnico en Comercio Exterior">Técnico en Comercio Exterior</option>  
                                      <option value="Técnico en Topografía">Técnico en Topografía</option>   
                                      <option value="Técnico en Geología">Técnico en Geología</option>
                                      <option value="Técnico en Estética Integral">Técnico en Estética Integral</option>
                                      <option value="Técnico en Educación Parvularia">Técnico en Educación Parvularia</option>
                                      <option value="Técnico en Servicio Social">Técnico en Servicio Social</option>
                                      <option value="Técnico en Relaciones Públicas">Técnico en Relaciones Públicas</option>
                                      <option value="Diseño Gráfico Publicitario"> Diseño Gráfico Publicitario</option>
                                      <option value="Técnico en Fotografía">Técnico en Fotografía</option>
                                      <option value="Técnico en Negocios y Gestión Comercial">Técnico en Negocios y Gestión Comercial</option>
                                      <option value="Técnico en Gestión de Empresas">Técnico en Gestión de Empresas</option>
                                      <option value="Técnico en Marketing">Técnico en Marketing</option>
                                      <option value="Contador General">Contador General</option>
                                      <option value="Asistente Ejecutivo y de Gestión">Asistente Ejecutivo y de Gestión</option>
                                      <option value="Técnico en Construcción">Técnico en Construcción</option>
                                      <option value="Técnico en Prevención de Riesgos">Técnico en Prevención de Riesgos</option>
                                      <option value="Técnico en Minería">Técnico en Minería</option>
                                      <option value="Técnico en Conectividad y Redes">Técnico en Conectividad y Redes</option>
                                      <option value="Técnico en Hotelería">Técnico en Hotelería</option>
                                      <option value="Turismo Sustentable">Turismo Sustentable</option>
                                      <option value="Visitador Médico">Visitador Médico</option>
                                      <option value="Masoterapia">Masoterapia</option>
                                      <option value="Laboratorista Denta">Laboratorista Dental</option>
                                  </select>
                                  <div id="validarcarrera">por favor selecciona tu carrera, campo requerido *</div>
                              </div>
                              <br>
                        
                          </div>
                                 <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Correo electrónico del alumno</label>
                             <div class="col-sm-5">
                                 <input type="email" name="correo" id="correo"  class="form-control"placeholder="Por Ej: ejemplo@ejemplo.cl" onkeypress="return validarcorreo(event)">
                                 <div id="validarcorreo">por favor el formato es incorrecto, campo requerido *</div>
                             </div>
                             <br>
                             <br>
                             <br>
                             <br>
                         </div>
                         
        <div class="form-group">
                  <fieldset>
                     <legend>Situación del alumno</legend>
                            <div class="radio">
                                    <label for="check1" class="radio-inline control-label"> <input type="radio" value="Egresado" id="check1" name="opciones">Egresado</label>
                                    
                                    <label for="check2" class="radio-inline  control-label"> <input type="radio" value="Congelada" id="check2" name="opciones">Carrera congelada</label>
                                    
                                    <label for="check3" class="radio-inline  control-label"> <input type="radio" value="En práctica" id="check3" name="opciones">En práctica</label>
                                    
                                   <label for="check4" class="radio-inline  control-label"> <input type="radio" value="Monografía" id="check4" name="opciones">En monografía</label>
                                           
                                  <label for="check5" class="radio-inline  control-label"><input type="radio" value="Titulado" id="check5" name="opciones"  checked>Titulado</label>
                               </div>
                                            
                             </fieldset>
                              
                              <br>
                              <br>
                              <br>
                          </div>
                                  
                        <div class="form-group">
                            <button type="submit" class="btn  btn-lg btn-block " value="Registrar" id="registro" name="registro" onsubmit="return validar();">
                            <span class="glyphicon glyphicon-ok"></span> Registrar </button>
                        </div>
                        
                         
                      </form>
                 </div>
            </div>
    
      </div>
      
      
      
   <script type="text/javascript">
    
    
           function validarnumeros(e){
 
         var key=window.Event ? e.keyCode : e.which 
          
            return ((key>=48 && key<=57))                // key=48 es el 0
                                                            //key=57 es el 9   dentro del codigo ascii
                                                            //key=8 es el tecla para borrar...   
            
       }
      
       function validartexto(e){
           
           var key=window.Event ? e.keyCode : e.which
           var n=/[A-Za-zñÑ]/ ;  //lo quiero solo para validar la ñ y Ñ
           var validarsoloenie=String.fromCharCode(key);
           
            return ((key>=65 && key<=90)||(key>=97 && key<=122) || (key==32)||(n.test(validarsoloenie)) ||(key==8))
                       //key = 65  = A
                       //key = 90 = Z
                       //key = 97 =a
                       //key=122=z
                      //key =8 = borrar...
                      //key 32=espacio..
             
            
       }
       
       
       
       
       function validardireccion(e){
           
           var key=window.Event ? e.keyCode : e.which 
           
           return((key>=65 && key<=90) || (key>=97 && key<=122) || (key==32) || (key>=48 && key<=57 )|| (key==8) )
           
           
       }
        
       
       
             function validarnumerosy_rut_k(e){
                
                var key= window.Event ? e.keyCode : e.which
                
                return ((key>=48 && key<=57) ||(key==107) || (key==46)||(key==45)|| (key==8)  )
                                       //46=. 
                                       //107=k
                                       //45=-
                                       //8=retroceso
                                      //48 a 57= numeros del 0 al 9   
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
     <script src="js/main_agregar.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>