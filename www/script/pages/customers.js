$(document).ready(function(){

	$('.delete').die().live('click', function(){
		if(confirm('Удалить?')==true){
			var id = $(this).attr('data-id');
			
			delProject(id,this);
		}
	});
	
	$('#customer-status').change(function(){
		$('#proj-ids').toggle();
	});
});

function delProject(id, obj){
	$.ajax({
		type: "POST",
		url: "ajax/customers.php",
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