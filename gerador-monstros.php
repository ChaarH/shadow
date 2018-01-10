<?php
include_once('inc/inc-header.php');
include_once('arrays.php');
include_once('eventoController.php');

$option = 1;

if ($option == 1){$option   = $monstrosNivel1;}
if ($option == 5){$option   = $monstrosNivel5;}
if ($option == 10){$option  = $monstrosNivel10;}
if ($option == 25){$option  = $monstrosNivel25;}
if ($option == 50){$option  = $monstrosNivel50;}
if ($option == 100){$option = $monstrosNivel100;}
if ($option == 250){$option = $monstrosNivel250;}
if ($option == 500){$option = $monstrosNivel500;}

$contagem = (count($option) -1);
$rand = rand(0, $contagem);
$returnArray = array_values($option[$rand]);


?>

<section class="introducao">
	<div class="container">
		<blockquote class="quote-externo">
			<h1>GERADOR DE MONSTROS</h1>
				<p>"Foi então que meus olhos mortais viram o despertar do fim. Não fora um pesadelo, disso eu tenho certeza. Nenhum sonho ou pesadelo teria o poder de me cegar"</p>
				<cite>Namain - Oráculo de Ownam</cite>
		</blockquote>
	</div>
</section>

<section>
	<h2 class="subtitulo">Gerador de Monstros</h2>
</section>

<form id="form" method="POST" class="formulario container">
	Nível: <br />
	<select id="value">
		<option name="0" selected>Selecione um nível</option>
		<option name="1">1 - Iniciante</option>
		<option name="5">5 - Iniciante</option>
		<option name="10">10 - Novato</option>
		<option name="25">25 - Novato</option>
		<option name="50">50 - Especialista</option>
		<option name="100">100 - Especialista</option>
		<option name="250">250 - Mestre</option>
		<option name="500">500 - Mestre</option>
	</select>

	<input type="submit" name="gerar" type="submit" class="btn-gerar" value="Gerar" />
	<input type="submit" name="gerar-again" class="btn-gerar-again" value="Gerar Novamente" />
</form>

<?php if ($option > 0) { ?>

<div class="int-ficha">
<section class="ficha-geral">
	<section class="header-ficha container">
		<div class="grid-16">
			<p><?php echo ($returnArray[0]);; ?></p>
			<p class="dificuldade">Dificuldade # <?php echo ($returnArray[1]); ?></p>
		</div>
	</section>

	<section class="categoria-ficha container">
		<div class="grid-16">
			<p><?php echo ($returnArray[2]); ?></p>
			<p class="exp1"></p>
		</div>
	</section>

	<section class="descricao-ficha container">
		<div class="grid-16">
			<p><strong>Percepção:</strong> <span><?php echo ($returnArray[3]); ?></span></p>
			<p class="atributos1"><strong>Defesa:</strong> <span><?php echo ($returnArray[4]); ?></span></p>
			<p class="atributos1"><strong>Vida:</strong> <span><?php echo ($returnArray[5]); ?></span></p><br/>
			<p class="atributos2"><strong>Força:</strong> <span><?php echo ($returnArray[6]); ?></span></p>
			<p class="atributos2"><strong>Agilidade:</strong> <span><?php echo ($returnArray[7]); ?></span></p>
			<p class="atributos2"><strong>Inteligência:</strong> <span><?php echo ($returnArray[8]); ?></span></p>
			<p class="atributos2"><strong>Vontade:</strong> <span><?php echo ($returnArray[9]); ?></span></p>
			<p><strong>Velocidade:</strong> <span><?php echo $returnArray[10]; ?></span></p>
			<p><strong>Imunidade:</strong> <span><?php echo $returnArray[11]; ?></span></p>
			<p><strong>Vulnerabilidade:</strong> <span><?php echo $returnArray[12]; ?></span></p>
			<p><strong>Talentos Passivos:</strong> <span><?php echo $returnArray[13]; ?></span></p>
		</div>
	</section>

	<section class="opcoes-ataques-ficha container">
		<div class="grid-16">
			<p>Opções de Ataque</p>
			<p class="exp2"></p>
		</div>
	</section>

	<section class="descricao-opcoes-ataque container">
		<div class="grid-16">
			<p><strong>Ataque(corpo-a-corpo): </strong><span><?php echo $returnArray[14];; ?></span></p>
			<p><strong>Ataque(à distância): </strong><span><?php echo $returnArray[15]; ?></span></p>
			<p><strong>Talento de Ataque: </strong><span><?php echo $returnArray[16]; ?></span></p>
		</div>
	</section>

	<section class="ataques-especiais-ficha container">
		<div class="grid-16">
			<p>Ataques Especiais</p>
			<p class="exp3"></p>
		</div>
	</section>

	<section class="descricao-ataques-especiais container">
		<div class="grid-16">
			<p><strong>Nome: </strong><span><?php echo $returnArray[17]; ?></span></p>
			<p><strong>Descrição: </strong><span><?php echo $returnArray[18]; ?></span></p>
		</div>
	</section>

	<section class="acoes-especiais-ficha container">
		<div class="grid-16">
			<p>Ações Especiais</p>
			<p class="exp4"></p>
		</div>
	</section>

	<section class="descricao-acoes-especiais container">
		<div class="grid-16">
			<p><strong>Nome: </strong><span><?php echo $returnArray[19]; ?></span></p>
		</div>
	</section>

	<section class="magia-ficha container">
		<div class="grid-16">
			<p>Magias</p>
			<p class="exp5"></p>
		</div>
	</section>

	<section class="descricao-magia container">
		<div class="grid-16">
			<p><strong>Poder: </strong><span><?php echo $returnArray[20]; ?></span></p>
			<p><strong>Tradição: </strong><span><?php echo $returnArray[21]; ?></span></p>
		</div>
	</section>

	<section class="end-turn-ficha container">
		<div class="grid-16">
			<p>Fim do Turno</p>
			<p class="exp6"></p>
		</div>
	</section>

	<section class="descricao-end-turn container">
		<div class="grid-16">
			<p><span><?php echo $returnArray[22]; ?></span></p>
		</div>
	</section>
<?php } else {echo "<script>alert('Ao menos um nível deve ser selecionado!');</script>";}
 ?>




</section>
</div>

<?php include_once('inc/inc-footer.php'); ?>



