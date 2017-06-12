$(document).ready(function(){
    
    
   $("#actualizar").click(function(validar){
       
    
       var rut=$("#rut").val();
       var nombres=$("#nombres").val();
       var apellidos=$("#apellidos").val();
       var carrera=$("#carrera option:selected");
       var correo=$("#correo").val();
       
       
       
     //  if(rut.length==""){
    
       //$("#rut").focus();
    //     $("#validarrut").fadeIn(1000);
      //     $("#rut").css({"border":"2px solid red"});
        //   return false;
//       }else{
           
  //         $("#validarrut").fadeOut();
           
    //       if(nombres.length==""){
               
      //         $("#nombres").focus();
        //       $("#validarnombres").fadeIn(1000);
        //       $("#nombres").css({"border":"2px solid red"});
        //       return false;
               
        //   }else{
               
         //      $("#validarnombres").fadeOut();
               
        //       if(apellidos.length==""){
                   
        //           $("#apellidos").focus();
        //           $("#validarapellidos").fadeIn(1000);
        //           $("#apellidos").css({"border":"2px solid red"});
        //            return false;
        //       }else{
                   
          //         $("#validarapellidos").fadeOut();
                   
        
            //            if(correo.length==""){
                            
              //              $("#correo").focus();
                //            $("#validarcorreo").fadeIn(1000);
                  //          $("#correo").css({"border":"2px solid red"});
            //               return false;
              //          }else{
                            
                      //      $("#validarcorreo").fadeOut();
                    //    }                
                   
            //   }
               
               
        //   }
        //  return true; 
       //}
       
       
       
       
       
         if(rut.length=="" && nombres.length=="" && apellidos.length=="" && correo.length==""){
             
           $("#rut").focus();
           $("#validarrut").fadeIn(1000);
           $("#rut").css({"border":"2px solid red"});
             
               
          
            $("#validarnombres").fadeIn(1000);
            $("#nombres").css({"border":"2px solid red"});   
             
             
         
            $("#validarapellidos").fadeIn(1000);
            $("#apellidos").css({"border":"2px solid red"}); 
             
            
            $("#validarcorreo").fadeIn(1000);
           $("#correo").css({"border":"2px solid red"}); 
             
             
             return false;
         }else{
             
              $("#validarrut").fadeOut();
              $("#validarnombres").fadeOut();
              $("#validarapellidos").fadeOut();
              $("#validarcorreo").fadeOut();
             
         }
             
   });
    
    
    
    
    
   
    $("#rut").keypress(function(){
    var rut=$("#rut").val();
    if(rut!=""){
            $("#rut").css({"border":"none"});
            $("#validarrut").fadeOut();
        }else{
            $("#rut").css({"border":"2px solid red"});
            $("#validarrut").fadeIn(1000);
            }
      });
    $("#nombres").keypress(function(){
    var nombres=$("#nombres").val();
        if(nombres!=""){
           $("#nombres").css({"border":"none"});
           $("#validarnombres").fadeOut();
        }else{
           $("#nombres").css({"border":"2px solid red"});
           $("#validarnombres").fadeIn(1000);
           }
        });
     $("#apellidos").keypress(function(){
        var apellidos=$("#apellidos").val();
        if(apellidos!=""){
             $("#apellidos").css({"border":"none"});
             $("#validarapellidos").fadeOut();
        }else{
            $("#apellidos").css({"border":"2px solid red"});
            $("#validarapellidos").fadeIn(1000);
            }
         });
    $("#carrera").keydown(function(){
    var carrera=$("#carrera option:selected");
        if(carrera.val()!=""){
            $("#carrera").css({"border":"none"});
            $("#validarcarrera").fadeOut();
        }else{
            $("#carrera").css({"border":"2px solid red"});
            $("#validarcarrera").fadeIn(1000);
            }
        });
    $("#correo").keypress(function(){
        var correo=$("#correo").val();
        if(correo!=""){
            $("#correo").css({"border":"none"});
            $("#validarcorreo").fadeOut();
        }else{
            $("#correo").css({"border":"2px solid red"});
            $("#validarcorreo").fadeIn(1000);
            }
        });
    });