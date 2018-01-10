/* Animação no btn Gerar */

$(function(){

	$('.btn-gerar').bind('click', function(){
		$('.ficha-geral').show();
	});

});

$(function(){
		$('.descricao-ficha').fadeOut('slow');
		$('.descricao-opcoes-ataque').fadeOut('slow');
		$('.descricao-ataques-especiais').fadeOut('slow');
		$('.descricao-acoes-especiais').fadeOut('slow');
		$('.descricao-magia').fadeOut('slow');
		$('.descricao-end-turn').fadeOut('slow');
	})


/* Animação na ficha dos Monstros */

$(function(){

	$('.header-ficha').bind('click', function(){
		$('.descricao-ficha').slideToggle('slow');
		$('.descricao-opcoes-ataque').slideToggle('slow');
		$('.descricao-ataques-especiais').slideToggle('slow');
		$('.descricao-acoes-especiais').slideToggle('slow');
		$('.descricao-magia').slideToggle('slow');
		$('.descricao-end-turn').slideToggle('slow');
	})

	$('.exp1').bind('click', function(){
		$('.descricao-ficha').slideToggle('slow');
	});

	$('.exp2').bind('click', function(){
		$('.descricao-opcoes-ataque').slideToggle('slow');
	});

	$('.exp3').bind('click', function(){
		$('.descricao-ataques-especiais').slideToggle('slow');
	});

	$('.exp4').bind('click', function(){
		$('.descricao-acoes-especiais').slideToggle('slow');
	});

	$('.exp5').bind('click', function(){
		$('.descricao-magia').slideToggle('slow');
	});

	$('.exp6').bind('click', function(){
		$('.descricao-end-turn').slideToggle('slow');
	});

});


$(function() {

	$('#form').bind('submit', function(e){
		e.preventDefault();

		var txt = $(this).serialize();
		console.log(txt);

		$.ajax({
			type: 'GET',
			url: 'gerador-monstros.php',
			data: txt,
			success: function() {
				$('.int-ficha').show();
			},
			error: function() {

			}
		});

	});

});
