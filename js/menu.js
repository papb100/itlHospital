
var contador=1;

$('#menuV').on('click',function(){
	if (contador==1) {
        
        $(".vertical").fadeOut(300, function(){
            expandir();
         });
		
        console.log('Ocultar');
		contador=0;
	}else{
        $('.vertical').fadeIn(600);
        $('.cont').hide();
		$(".cont").removeClass("col-xs-12 col-sm-12 col-md-12 col-lg-12");
        $(".cont").addClass("col-xs-12 col-sm-9 col-md-10 col-lg-10");
        $('.cont').fadeIn(100);	
        console.log('mostrar');
		contador=1;
	}
});

function expandir(){
    $('.cont').hide();
    $(".cont").removeClass("col-xs-12 col-sm-9 col-md-10 col-lg-10");
    $(".cont").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-12");	
    $('.cont').fadeIn(100);
}

function menuActivo(letra){
    $(".menuInicio").removeClass("activo");
    switch(letra){
        case 'A':
            $("#mnuA").addClass("activo");
            break;
        case 'B':
            $("#mnuB").addClass("activo");
            break;
        case 'C':
            $("#mnuC").addClass("activo");
            break;
        case 'D':
            $("#mnuD").addClass("activo");
            break;
        case 'E':
            $("#mnuD").addClass("activo");
            break;
        case 'F':
            $("#mnuD").addClass("activo");
            break;
        //case......
    }   
}
