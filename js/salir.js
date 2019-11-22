function salir(){
    // console.log("Saliendo del sistema...")
    alertify.confirm('alert').set({transition:'slide',message: 'Transition effect: slide'}).show();
    alertify.confirm(
        'Sistema', 
        '¿Deseas salir del Sistema?', 
        function(){ 
                // alertify.success('Saliendo....') ; 
                preCarga(1000,2);
                setInterval(salida, 1000);
            }, 
        function(){ 
                // alertify.error('Cancelar') ; 
                console.log('cancelado')}
    ).set('labels',{ok:'Salir',cancel:'Cancelar'});

}

function salida(){
    window.location='../sesiones/cerrarsesion.php';
}
