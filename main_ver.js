$(document).ready(function(){
    
   
    
    $("#guardar").click(function(validar){      
        var buscar=$("#palabra").val();
        var nombres=$("#nombres").val();
        var apellidos=$("#apellidos").val();
        var foto=$("#imagen").val();
        
        if(buscar.length=="" && nombres.length=="" && apellidos.length=="" && foto.length==""){
            
            $("#palabra").focus();
            $("#palabra").css({"border":"2px solid red"});
            $("#validarpalabra").fadeIn(1000);
            
            $("#nombres").css({"border":"2px solid red"});
            $("#validarnombre").fadeIn(1000);
            
            $("#apellidos").css({"border":"2px solid red"});
            $("#validarapellidos").fadeIn(1000);
            
            $("#imagen").css({"border":"2px solid red"});
            $("#validarimagen").fadeIn(1000);
            
            return false;
            }else{
               $("#validarpalabra").fadeOut();
               $("#validarnombre").fadeOut();
               $("#validarapellidos").fadeOut();
               $("#validarimagen").fadeOut();
        }
        if(foto.length==""){
              $("#imagen").css({"border":"2px solid red"});
              $("#validarimagen").fadeIn(1000);
            return false;
        }
        
    });
    
    
    
    
    
    $("#palabra").keypress(function(){
        var buscar=$("#palabra").val();
        if(buscar!=""){
                 $("#palabra").css({"border":"none"});
                 $("#validarpalabra").fadeOut();
                 }else{
                 $("#palabra").css({"border":"2px solid red"});
                 $("#validarpalabra").fadeIn(1000);
            }
        });
    $("#nombres").keypress(function(){
    var nombres=$("#nombres").val();
        if(nombres!=""){
                 $("#nombres").css({"border":"none"});
                 $("#validarnombre").fadeOut();
                 }else{
                 $("#nombres").css({"border":"2px solid red"});
                 $("#validarnombre").fadeIn(1000);
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
    $("#imagen").keypress(function(){
        var imagen=$("#imagen").val();
       if(imagen.val()!=""){
                 $("#imagen").css({"border":"none"});
                 $("#validarimagen").fadeOut();
                 }else{
                 $("#imagen").css({"border":"2px solid red"});
                 $("#validarimagen").fadeIn(1000);
                 }});
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});