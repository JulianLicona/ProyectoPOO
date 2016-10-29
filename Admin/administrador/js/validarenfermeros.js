$(document).ready(function(){
        $("#btn.Actualizar").click(function(){
        $("#btn-Actualizar").button("loading");
        $("#img-loading").fadeIn(100);

        function validaForm(){
            var variable=true;
            echo"validar los campos";


            if ($("#txt-numero-expediente").val()==" "){
                alert("el campo no  puede estar vacio");
                $("#txt-numero-expediente").focus();
            return false;
            }
            

            if($("#txt-txt-nombre").val()==" "){
                alert("el campo no  puede estar vacio");
                $("#txt-txt-nombre").focus();
            return false;
            }
            
        
            if($("#txt-apellido").val()==" "){
                alert("el campo no  puede estar vacio");
                $("#txt-txt-edad").focus();
            return false;
            }
            
            
            if($("#txt-identidad").val()==" "){
                alert("el campo no  puede estar vacio");
                $("#txt-txt-identidad").focus();
            return false;
            }
            

            if($("#txt-fecha-nacimiento").val()==" "){
                alert("el campo no  puede estar vacio");
                $("#txt-fecha-nacimiento").focus();
            return false;
            }
            

            if($("#txt-direccion").val()==" "){
                alert("el campo no  puede estar vacio");
                $("#txt-txt-direccion").focus();
            return false;
            }
            
            if($("#txt-telefono").val()==" "){
                alert("el campo no  puede estar vacio");
                $("#txt-txt-telefono").focus();
            return false;  

            }

            
            if(!$("#slc-estado").is(":selected")){
                alert("el campo no  puede estar vacio").focus();
            return false;  

            }

        }
    

        alert("Informacion que se enviara" + validaForm);
            $.ajax({
                url:"ajax/procesar.php?accion=guardar",
                method:"POST",
                data:validaForm,
                succes:function(respuesta){
                    $("#img-loading").fadeOut(100);
                    $("#btn-Actualizar").button("reset");
                    $("#div-respuesta").html(respuesta);
                    },
                    error:function(){
                        alert("ocurrio un error.")
                    }
                };        
            
        });
    });
