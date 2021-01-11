$('#form1').submit(function(e){

	e.preventDefault();

	var name    = $('#name').val();
	var comment = $('#comment').val();

	$.ajax({

		url:'http://localhost:8080/Ajax/inserir.php',
		method : 'POST',
		data : { name : name, comment : comment },
		dataType :'json'

	}).done(function(resultado){

		console.log(resultado);

	});
});