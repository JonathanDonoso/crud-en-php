$(document).ready(function(){
     
    

    
     $("#registro").click(function(validar){
         
    var rut=$("#rut").val();  
    var nombres=$("#nombres").val();  
    var apellidos=$("#apellidos").val();  
    var telefono=$("#telefono").val(); 
    var correo=$("#correo").val();
    var edad=$("#edad option:selected"); 
    var comuna=$("#comuna option:selected");         
    var direccion=$("#direccion").val();
    var carrera=$("#carrera option:selected");
    var correo=$("#correo").val();     
         
         
   //   var expr_rut="\b\d{1,8}\-[K|k|0-9]";
     // var expr_nombre="/^\s+$/";
    //  var expr_apellidos="/^\s+$/";
    //  var expr_correo="/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/";
    //  var expr_telefono="/^\+\d{2,3}\s\d{9}$/";   
         
   
     
      if(rut.length==""){
          $("#validarrut").fadeIn(1000);
          $("#rut").focus();
          $("#rut").css({"border":"2px solid red"});
          return false;
      }else{
                  $("#validarrut").fadeOut();
        
           if(nombres.length==""){
                 
                $("#validarnombre").fadeIn(1000);
                $("#nombres").focus();
                $("#nombres").css({"border":"2px solid red"});
                  return false;
           }else{
               
                 $("#validarnombre").fadeOut();
               
            if(apellidos.length==""){
                 
                $("#validarapellidos").fadeIn(1000);
                $("#apellidos").focus();
                $("#apellidos").css({"border":"2px solid red"});
                return false;
            }else{
                 
                 $("#validarapellidos").fadeOut();
                    
                if(telefono.length==""){
                    
                    $("#validartelefono").fadeIn(1000);
                    $("#telefono").focus();
                    $("#telefono").css({"border":"2px solid red"});
                    return false;
                    
                }else{
                    
                    $("#validartelefono").fadeOut();
                                        
                    if(edad.val()==""){
                        
                        $("#validaredad").fadeIn(1000);
                        $("#edad").focus();
                        $("#edad").css({"border":"2px solid red"});
                        return false;
                        
                    }else{
                        
                        $("#validaredad").fadeOut();
                        
                        if(comuna.val()==""){
                             
                            $("#validarcomuna").fadeIn(1000);
                            $("#comuna").focus();
                            $("#comuna").css({"border":"2px solid red"});
                             
                            return false;
                            
                        }else{
                            
                            $("#validarcomuna").fadeOut();
                            
                            if(direccion.length==""){
                                
                                $("#validardireccion").fadeIn(1000);
                                $("#direccion").focus();
                                $("#direccion").css({"border":"2px solid red"});  
                                return false;
                            }else{
                                
                                $("#validardireccion").fadeOut();
                                
                                if(carrera.val()==""){
                                     
                                     $("#validarcarrera").fadeIn(1000);
                                     $("#carrera").focus();
                                     $("#carrera").css({"border":"2px solid red"});
                                       return false;
                                    
                                }else{
                                    
                                     $("#validarcarrera").fadeOut();
                                     
                                    if(correo.length==""){
                                        
                                        $("#validarcorreo").fadeIn(1000);
                                        $("#correo").focus();
                                        $("#correo").css({"border":"2px solid red"});
                                        return false;
                                    }else{
                                        
                                        $("#validarcorreo").fadeOut();
                                        
                                        
                                        
                                        
                                    }
                                    
                                }
                                
                                
                            }
                            
                        }
                        
                    }
                    
                }
                
            }
               
               
              
     }
                 
    return true;             
 }
         
             
         
         
         
 
     });
    
    
    
           $("#rut").keypress(function(){
            var rut=$("#rut").val(); 
            if(rut!=""){
            $("#rut").css({"border":"none"});
                       }
            });
        $("#nombres").keypress(function(){
          var nombres=$("#nombres").val();
           if(nombres!=""){
            $("#nombres").css({"border":"none"});
                          }
       });
       $("#apellidos").keypress(function(){
          var apellidos=$("#apellidos").val();
           if(apellidos!=""){
           $("#apellidos").css({"border":"none"});
                            }
           });
          $("#telefono").keypress(function(){
          var telefono=$("#telefono").val();
          if(telefono!=""){
          $("#telefono").css({"border":"none"});
                          }
             });
           $("#edad").keydown(function(){
            var edad=$("#edad option:selected"); 
              if(edad.val()!=""){
              $("#edad").css({"border":"none"});
                                }
           });
         $("#comuna").keydown(function(){
           var comuna=$("#comuna option:selected"); 
           if(comuna.val()!=""){
           $("#comuna").css({"border":"none"});
             }
           });
         $("#direccion").keypress(function(){
          var direccion=$("#direccion").val(); 
           if(direccion!=""){
          $("#direccion").css({"border":"none"});
             }
           });
           $("#carrera").keydown(function(){
            var carrera=$("#carrera option:selected"); 
              if(carrera.val()!=""){
            $("#carrera").css({"border":"none"});
             }
            });
           $("#correo").keypress(function(){
            var correo=$("#correo").val(); 
             if(correo!=""){
             $("#correo").css({"border":"none"});
             }
           });
    });





