alert(working);

(document).ready(function(){
	//inicial
	$('#content').load('principal.php');

	//manejar clicks en el menú
	$('ul#nav li a').click(function(){
		var page = $(this).attr('href');
		$('#content').load(page + '.php');

		return false;
	});
});