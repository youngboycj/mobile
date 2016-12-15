function ajax(url,_data,type){
	return $.ajax({
		url:"ajax1.php",
		type:type,
		dataType:'json',
		data:{data:_data}
	});
};