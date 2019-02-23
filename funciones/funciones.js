/*$(document).ready(function(){
	alert('bien');
});*/
$(document).ready(function(){
	$('#addG').on('click', function(){
		$('#myModal').modal("show");
	});

	$('#addCat').on('click', function(){
		$('#myModalCat').modal("show");
	});

	$('#addGOp').on('click', function(){
		$('#myModalOp').modal("show");
	});
	
});