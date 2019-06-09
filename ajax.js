function ajax_post(url,function2call,values)
{
	$.ajax({
            url: url,
            type: 'POST',
			data: {function2call: function2call,ajax_data:values},
            dataType: 'script',
            error: function (xhr, textStatus, error){
				 console.log(error);
			}
			
        });
	console.clear();	
}

function ajax_form_post(url,function2call,values)
{
	$.ajax({
            url: url,
            type: 'POST',
			data: {function2call: function2call,form_data:'yes',ajax_data:values},
            dataType: 'script',
			success:function(){
				console.clear();
			},
            error: function (xhr, textStatus, error){
				 console.log(error);
			}
			
        });	
}