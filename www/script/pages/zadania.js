$(document).ready(function(){

	$( "#date-finish" ).datepicker();
    $( "#date-finish" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
	
	$( "#date-add" ).datepicker();
    $( "#date-add" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    
	//$( "#date-finish2" ).datepicker();
	
	$('.delete').die().live('click', function(){
		if(confirm('Удалить?')==true){
			var id = $(this).attr('data-id');
			
			delProject(id, $(this));
		}
	});
	
	//Кнопка добавления задания
	$('#zadaniya-add').die().live('click', function(){
		var new_file = $('iframe#file-frame').contents().find('body').text();
		var old_file = $('#name-old-file').contents().text();
		
		if($('#zadanie-name').val() == ''){
			alert('Вы не заполнили название задания');
		} else {
			if($('iframe#file-frame').contents().find('body').text() != ''){
				if (new_file != old_file) {
					$('input[name*="customer_id"]').after('<input type="hidden" value="' + old_file +'" name="change_file" />');
				}
				$('input[name*="customer_id"]').after('<input type="hidden" value="'+ new_file + /*$('iframe#file-frame').contents().find('body').text()+*/'" name="zadanie_file" />');
			}
			$('#add_zadanie').submit();
		}
	})
	
	//удаление файла
	$("#file-del").die().live('click', function(){
											if(confirm('Удалить файл?')==true) {
												var old_file = $('#name-old-file').contents().text();
												$('input[name*="file"]').after('<input type="hidden" name="delete" value="' + old_file +'">');
												$('#file-form').submit();
												$('div#old-file').remove();
											}
										});
										
	//progressBar
	var progressbar = $(".proc-isp");
	
	
	//количество результатов
	$('#count-res').change(function(){							
								$.ajax({
											type: "POST",
											url: "ajax/zadania.php",
											timeout: 4000,
											data: {
												'row_count' : $('#count-res').val()											
											},
											success: function(data){
												//alert(data);
												document.location.reload();
												
											}
										});								
	});
	
	//фильтр по статусу
	$('#filter-status').change(function(){							
								$.ajax({
											type: "POST",
											url: "ajax/zadania.php",
											timeout: 4000,
											data: {
												'checker'	: 11,
												'status' : $('#filter-status').val()											
											},
											success: function(data){
												//alert(data);
												document.location.reload();
												
											}
										});								
	});
	
	
	//фильтр по исполнителю
	$('#filter-isp').change(function(){							
								$.ajax({
											type: "POST",
											url: "ajax/zadania.php",
											timeout: 4000,
											data: {
												'checker'	: 12,
												'isp' : $('#filter-isp').val()											
											},
											success: function(data){
												//alert(data);
												document.location.reload();
												
											}
										});								
	});
	
	//упорядочивание
	$('.order').die().live("click", function(){
										$.ajax({
											type: "POST",
											url: "ajax/zadania.php",
											timeout: 4000,
											data: {
												'checker'	: 20,
												'order_by' : $(this).attr("value")											
											},
											success: function(data){
												//alert(data);
												document.location.reload();
												
											}
										});			
	
	});
	
	//начало/конец работы
	var sl = 1;
	$('.start_butt').die().live("click", function(){
		var id = parseInt($(this).parents('tr').find('td:eq(0)').text());
		var action = $(this).find('input[name*="for_start"]').val();
		var proc_isp = '';
		
		//alert($(this).parent('tr').html());
		if(sl == 1){
			sl = 2;
			//alert(action);
			if (action == '2') {
				proc_isp = parseInt(prompt('Введите процент завершения задания:'));
			}
			var id = parseInt($(this).parents('tr').find('td:eq(0)').text());
			$.ajax({
													type: "POST",
													url: "ajax/zadania.php",
													data: {
														'zadanie_id' : id,
														'action' : action,
														'proc_isp' : proc_isp
													},
													success: function(data){
																//alert(data);
																//$(this).val('Закончить');
																sl = 1;																
																document.location.reload();
															}
												
												})
		}
		
											
	
										});
										
	//показать комментарии
	$('.comments_butt').die().live('click', function(){
		var id = parseInt($(this).parents('tr').find('td:eq(0)').text());
		if($(this).text() == 'Комментарии'){
			commentSearch(id, $(this));
		} else if($(this).text('Скрыть')) {
			$('#comment_'+id+'').remove();
			$(this).text('Комментарии');
		}
	
	});	
										
	
	//добавить комментарий
	// Передать параметры - айдишник, автор: 0 - исполн, 1 - заказчик
	 $('input[name="add_comment"]').die().live('click',function(){
															var comment = $(this).prevAll('textarea').val();
															var id = parseInt($(this).parents('tr').prev('tr').find('td:eq(0)').text());
															var button = this;
															
															$.ajax({
																type: "POST",
																url: "ajax/comments.php",
																timeout: 4000,
																dataType: "json",
																data: {
																	'zad_id' : id,
																	'new_comment' : comment,
																	'cheker' : 63
																},
															success: function(data){
																		var prev_p = $(button).prevAll('p:first');
																		if (data.name) {																			
																				$(button).parents('p').before('<p><span>Автор: '+data.name+'</span><br/><span>Комментарий: '+data.comment+"</span><br/></p>");																																						
																		}
																	}
															})																						
	 
														})
	
	
});

function delProject(id, obj){
	$.ajax({
		type: "POST",
		url: "ajax/zadania.php",
		timeout: 4000,
		data: {
			'id' : id,
			'checker' : 95
		},
		success: function(data){
			if (data==10){
				//document.location.reload();
				$(obj).closest('tr').remove();
				$('#mess').remove();
			}else {
				//alert(data);
				document.location.reload();
			}
		}
	});

}

//Поиск комментариев
function commentSearch(id, obj){
	$.ajax({
			type: "POST",
			url: "ajax/comments.php",
			dataType: "json",
			data: {
				'zadanie_id'	: id,
				'checker'		: 85
			},
			success: function(data){
				
				//if(data != 0){
				
					var str = '';
					var add_form = '<p><textarea name="new_comment"></textarea><br /><input type="button" name="add_comment" value="Отправить"></p>';				
					for(var i = 0; i<data.length; i++){
						var author = (data[i].author == 0)? data[i].ispoln_name : data[i].cust_name; //автор: 0 - исполн, 1 - заказчик
						str += '<p><span>Автор: '+author+'</span><br/><span>Комментарий: '+data[i].comment+"</span><br/></p>";
					}
					obj.parents('tr').after('<tr id="comment_'+ id +'"><td class="comments" colspan="14">'+ str + add_form + '</td></tr>');
					obj.text('Скрыть');
				//}
				
				
				
			}
	});
}