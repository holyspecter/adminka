$(document).ready(function() {
	/*$('input:button').die().live('click', function(){
		if ($("input[name*=zadanie_name]").val() == "") {
			alert("Введите название задания!");
		} else {
			$("#add_zadanie").append("<input type='hidden' name='zadanie_file' />");
			$("input[name*=zadanie_file]").attr('value', $('#file_frame'))'
		}
	});*/

	alert($('iframe#file-frame').contents().find('body').text());
})