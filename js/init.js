(function ($) {
    $(function () {

        $('.button-collapse').sideNav();




    }); // end of document ready
})(jQuery); // end of jQuery name space
function Filtra(campo){
	var digits="abcdefghijklmnopqrstuvwxyzç"
	var campo_temp 
	for (var i=0;i<campo.value.length;i++){
   campo_temp=campo.value.substring(i,i+1)	
   if (digits.indexOf(campo_temp)==-1){
      campo.value = campo.value.substring(0,i);
     alert("por favor, não utilize caracteres inválidos neste campo.");
      break;
   }
	}
}