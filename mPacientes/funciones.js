// LLENAR COMBO
function verificarNHC(valor) {
    $.ajax({
      url: "verificarNHC.php",
      data: {'valor':valor},
      type: "POST",
      dataType: "html",
      success: function(respuesta) {
        console.log(respuesta);
          if (respuesta==1) {
            $("#btnPaciente").attr("disabled","disabled");
          }else{
            $("#btnPaciente").removeAttr("disabled");
          }
      },
  
      error: function(xhr, status) {
        alert("Disculpe, existió un problema");
      }
    });
  }

  $("#nhc").keyup(function(){
    var valor    = this.value;
    verificarNHC(valor);
    
  })