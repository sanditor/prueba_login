window.addEventListener("load", function() {
	$(document).on('click', '#user_del', function () {
		var id_user = $(this).attr('data-id_user');
		$('#modalDel input[name=id_del]').val(id_user);	
	});

});	