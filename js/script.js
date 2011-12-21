/* Author:

*/

function confirmation(message) {
	var asnwere = window.confirm(message);
	
	if(asnwere) {
		return true;
	} else {
		return false;
	}
}

function controlRemoveElements(elem) {
	if(typeof elem != 'undefine') {
		$(elem).bind('click', function() {
			if(!confirmation('Deseja remover este item?')) {
				return false;
			}
		});
	}
}

function controlValues(elem) {
	if (typeof elem != 'undefined') {
		$(elem).bind('focus', function() {
			var field_value = $(this).val(); //save the default value
		
			$(this).val(''); //remove value
		
			//if the value not change, return the default value
			$(this).bind('focusout', function() {
				$(this).val(field_value);
			});
		
			//if change the value, maintain the same
			$(this).bind('keypress', function() {
				$(this).unbind('focus');
				$(this).unbind('focusout');
			});
		});
	}
}

$(function() {
	controlRemoveElements('a.remove-item');
	controlValues('form input, form textarea');
});
