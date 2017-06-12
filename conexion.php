<?php  

 $database="mantenedor_alumnos";
 $usuario="root";
 $password="1234";
 $url="localhost";   
  

 $mysqli=new mysqli($url,$usuario,$password,$database);
 $mysqli->query("SET NAMES 'utf8'");    //Elegimos el set de caracteres adecuado  
   if(!$mysqli){
        echo'Error al conectar',mysqli_connect_errno();
        exit();
       
   }else{
       // echo 'Conectado';
   }

   
?>