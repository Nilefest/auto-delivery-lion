$('#mark').change(function(){
    var mark = $('#mark').val();
    var arr = mark_arr;
	$('#model').html('');
    $('#model').append("<option value='all'>Все модели</option>");
	arr[mark].forEach(function(item){
		$('#model').append("<option value='" + item + "'>" + item + "</option>");
	});
});