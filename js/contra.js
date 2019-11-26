function validarBotones(){
    var cont, vcont, tCaracteres;
    cant=$("#inpContra").val();
    cant=cant.length;

    vcant=$("#inpVcontra").val();
    vcant=vcant.length;

    tCaracteres= cant + vcant;

    if (tCaracteres>0) {
        $("#btnVerContra").removeAttr("disabled");
        if ($("#inpContra").val()==$("#inpVcontra").val()) {
            $("#btnActualizarContra").removeAttr("disabled");
            $("#inpContra").css('background', 'rgba(46, 204, 113,0.2)');
            $("#inpVcontra").css('background', 'rgba(46, 204, 113,0.2)');
        } else {
            $("#btnActualizarContra").attr("disabled","disabled");
            $("#inpContra").css('background', 'rgba(231, 76, 60,0.2)');
            $("#inpVcontra").css('background', 'rgba(231, 76, 60,0.2)');
        }
    }else{
        $("#btnVerContra").attr("disabled","disabled");
        $("#btnActualizarContra").attr("disabled","disabled");
        $("#inpContra").css('background', 'rgba(0, 0, 0,0)');
        $("#inpVcontra").css('background', 'rgba(0, 0, 0,0)');
    }
}

function mostrarContra(){
    var valorBoton=$("#btnVerContra").val();
    if (valorBoton==0) {
        $("#btnVerContra").val(1);
        $("#icoVerContra").removeClass("far fa-eye-slash");
        $("#icoVerContra").addClass("far fa-eye");
        $("#inpContra").attr('type', 'text');
        $("#inpVcontra").attr('type', 'text');
    } else {
        $("#btnVerContra").val(0);
        $("#icoVerContra").removeClass("far fa-eye");
        $("#icoVerContra").addClass("far fa-eye-slash");   
        $("#inpContra").attr('type', 'password');
        $("#inpVcontra").attr('type', 'password');    
    }
}


$("#inpContra").keyup(function(){
    validarBotones();
});

$("#inpVcontra").keyup(function(){
    validarBotones();
});

$("#btnVerContra").click(function(){
    mostrarContra();
});