      <?php


           if(isset($_GET['eliminar'])){
               
                require('conexion.php');
                                   
                     
                     header('location: index.php');  //redirecciona luego de eliminar      
                    $id_alumno=$_GET['eliminar'];      
                    $consulta="DELETE FROM nuevo_registro WHERE id_alumno='$id_alumno'";
                    $resultado=$mysqli->query($consulta);
                   
               
           }
            
      ?>
      
      
      <?php   

          //    require('conexion.php');
               
        //      header('location: index.php');
          //    $id_alumno=isset($_GET['id_alumno'])? $_GET['id_alumno']: 0;
        //      eliminar($id_alumno);
          //    die();
       ?>
     
    
