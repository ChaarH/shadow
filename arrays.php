<?php

$monstrosNivel1 = array (

	array (

		"Nome" => "Acorrentado",
		"Dificuldade" => 50,
		"Categoria" => "Morto-vivo Horripilante - Tamanho 3",
		"Percepção" => "10(+0); visão no escuro",
		"Defesa" => 10,
		"Vida" => 50,
		"Força" => "14(+4)",
		"Agilidade" => "8(-2)",
		"Inteligência" => "5(-5)",
		"Vontade" => "11(+1)",
		"Deslocamento" => 8,
		"Imunidade" => "Dano por doença, frio e veneno; ganhar insanidade, adormecido, assustado, atordoado, doente, encantado, envenenado, pasmo e fatigado.",
		"Vulnerabilidade" => "Não possui",
		"TalentosPassivos" => "Gerar cadáver animado: Quando um acorrentado fica ferido, ele imediatamente expele 1d3 cadáveres animados. Os cadáveres caem prostados a 1 metro do espaço do Acorrentado e agem no próximo turno possível.",
		"OpcoesAtaque(melee)" => "Corrente: alcance +2, +4 com 1 dádiva (3d6 + Arrastar em jogadas de ataque 20+)",
		"OpcoesAtaque(range)" => "Não possui",
		"TalentoAtaque" => "Arrastar: O Acorrentado move o alvo 1d6 metros em sua direção.",
		"NomeAtaqueEspecial" => "Ataque Duplo",
		"DescricaoAtaqueEspecial" => "O Acorrentado ataca duas vezes com suas correntes.",
		"NomeAcaoEspecial" => "Não possui",
		"PoderMagia" => "Não possui",
		"TradicaoMagia" => "Não possui",
		"EfeitoEndTurn" => "<strong>Fedor:</strong> Cada criatura viva à curta distância do Acorrentado deve fazer uma jogada de Força com 2 perdições. Caso fracasse, ela fica debilitada por 1 rodada."
	),


	array (

		"Nome"                    => "Alcatrão Vivo",
		"Dificuldade"             => 100,
		"Categoria"               => "Gosma Assustadora - Tamanho 3",
		"Percepção"               => "15(+5); percepção às cegas",
		"Defesa"                  => 14,
		"Vida"                    => 80,
		"Força"                   => "14(+4)",
		"Agilidade"               => "8(-2)",
		"Inteligência"            => "5(-5)",
		"Vontade"                 => "15(+5)",
		"Deslocamento"            => "6; escalador; nadador",
		"Imunidade"               => "Dano por frio; ganhar insanidade; agarrado;assustado; atordoado; cego; doente; encantado; envenenado; pasmo; prostado e qualquer efeito que altere a forma do Alcatrão Vivo.",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Corpo Corrosivo:</strong> Um Alcatrão vivo sofre metade do dano por armas.
		Quando o Alcatrão vivo sofre dano por uma arma
		de metal ou madeira que não seja mágica, a arma
		fica parcialmente dissolvida ou, caso já esteja parcialmente
		dissolvida, ela é destruída. Quando uma
		criatura ataca com uma arma parcialmente dissolvida,
		faz suas jogadas de ataque com 1 perdição.<br>
		
		<strong>Divisão:</strong> Quando o Alcatrão vivo sofre dano por eletricidade
		ou por uma arma que não o incapacita, ele
		se divide. Um segundo Alcatrão se move para fora
		do espaço original para um espaço aberto a 1 metro
		dele. O tamanho de cada Alcatrão diminui em 1 e o
		novo Alcatrão tem a Saúde igual à metade do original.
		Cada Alcatrão tem metade do dano sofrido total
		do original antes de se dividir.
		Um Alcatrão vivo com tamanho inferior a 1 não
		pode se dividir mais.
		Amorfo: Um Alcatrão vivo pode se mover livremente
		por aberturas largas o bastante para permitir a passagem
		de água, também pode se mover por espa-
		ços ocupados por outras criaturas.",
		"OpcoesAtaque(melee)"     => "Pseudópode:  (corpo a corpo) +4 com 2 dádivas (5d6 mais Dissolver Armadura).
		",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Não possui",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "<strong>Dissolver metal e madeira:</strong> O Alcatrão vivo dissolve 5 cm de madeira e 1 cm de metal em contato com ele."
	),

	array (

		"Nome"                    => "Anão",
		"Dificuldade"             => 10,
		"Categoria"               => "Anão - Tamanho 1/2",
		"Percepção"               => "11(+1); visão no escuro",
		"Defesa"                  => "16(cota de malha, escud pequeno)",
		"Vida"                    => 16,
		"Força"                   => "12(+2)",
		"Agilidade"               => "9(-1)",
		"Inteligência"            => "10(+0)",
		"Vontade"                 => "10(+0)",
		"Deslocamento"            => 8,
		"Imunidade"               => "Dano por frio; ganhar insanidade; agarrado;assustado; atordoado; cego; doente; encantado; envenenado; pasmo; prostado e qualquer efeito que altere a forma do Alcatrão Vivo.",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "Constituição Robusta: Um anão sofre metade do dano por veneno e faz jogadas de desafio com 1 dádiva
		para evitar ou remover a aflição envenenado.",
		"OpcoesAtaque(melee)"     => "Picareta (corpo a corpo) +2 com 1 dádiva (1d6+2).",
		"OpcoesAtaque(range)"     => "Besta (longa distância) -1 com 1 dádiva (2d6)",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Sacudir a Poeira O anão cura 4 de dano e remove uma das seguintes aflições: fatigado, debilitado ou
		envenenado. Uma vez que utilizou Sacudir a Poeira,
		não pode utilizar novamente até que complete um
		descanso",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),


	array (

		"Nome"                    => "Anfisbena",
		"Dificuldade"             => 25,
		"Categoria"               => "Monstro - Tamanho 2",
		"Percepção"               => "14(+4); visão no escuro",
		"Defesa"                  => 16,
		"Vida"                    => 20,
		"Força"                   => "15(+5)",
		"Agilidade"               => "8(-2)",
		"Inteligência"            => "11(+1)",
		"Vontade"                 => "12(+2)",
		"Deslocamento"            => 8,
		"Imunidade"               => "Dano por frio; ganhar insanidade; atordoado; pasmo.",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "Duas cabeças: Uma Anfisbena pode fazer tanto um turno rápido quanto um lento e pode utilizar duas ações desencadeadas por turno.",
		"OpcoesAtaque(melee)"     => "Presas +5(1d6 + Veneno).",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Veneno: O alvo deve fazer uma jogada de desafio de Força com 1 perdição. Caso fracasse, ele sofre 1d6
		de dano e fica envenenado por 1 minuto. Caso já esteja
		envenenado, o alvo sofre 1d6 de dano adicional",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Olhar Paralisante: A Anfisbena utiliza uma ação desencadeada em seu turno para olhar para uma criatura
		alvo a média distância. O alvo deve fazer uma jogada
		de desafio de Vontade. Caso fracasse, ele fica
		imobilizado até que utilize uma ação para remover
		a aflição. Caso seja bem-sucedido, ele fica imune ao
		Olhar Paralisante da Anfisbena até que complete um
		descanso.",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (

		"Nome"                    => "Animal Imenso",
		"Dificuldade"             => 50,
		"Categoria"               => "Animal - Tamanho 3 ou maior",
		"Percepção"               => "12(+2)",
		"Defesa"                  => 11,
		"Vida"                    => 80,
		"Força"                   => "16(+6)",
		"Agilidade"               => "10(-0)",
		"Inteligência"            => "6(-4)",
		"Vontade"                 => "12(+2)",
		"Deslocamento"            => 8,
		"Imunidade"               => "Não possui",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "Não possui",
		"OpcoesAtaque(melee)"     => "+6 com 1 dádiva(3d6)
		Animais imensos incluem dinossauros, elefantes, rinocerontes,
		hipopótamos e versões gigantes de animais
		normais. Adicione a propriedade aquático para criar
		tubarões enormes, baleias e criaturas similares.",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Não possui	",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (

		"Nome"                    => "Animal Grande",
		"Dificuldade"             => 25,
		"Categoria"               => "Animal - Tamanho 2",
		"Percepção"               => "12(+2)",
		"Defesa"                  => 12,
		"Vida"                    => 40,
		"Força"                   => "15(+5)",
		"Agilidade"               => "11(+1)",
		"Inteligência"            => "6(-4)",
		"Vontade"                 => "11(+1)",
		"Deslocamento"            => 10,
		"Imunidade"               => "Não possui",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "Não possui",
		"OpcoesAtaque(melee)"     => "+5 com 1 dádiva(2d6)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Não possui	",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (
		
		"Nome"                    => "Animal Médio",
		"Dificuldade"             => 10,
		"Categoria"               => "Animal - Tamanho 1",
		"Percepção"               => "12(+2)",
		"Defesa"                  => 14,
		"Vida"                    => 20,
		"Força"                   => "13(+3)",
		"Agilidade"               => "13(+3)",
		"Inteligência"            => "6(-4)",
		"Vontade"                 => "10(+0)",
		"Deslocamento"            => 10,
		"Imunidade"               => "Não possui",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "Não possui",
		"OpcoesAtaque(melee)"     => "+3 com 1 dádiva(1d6+2)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Não possui	",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (

		"Nome"                    => "Animal Pequeno",
		"Dificuldade"             => 10,
		"Categoria"               => "Animal - Tamanho 1",
		"Percepção"               => "12(+2)",
		"Defesa"                  => 13,
		"Vida"                    => 5,
		"Força"                   => "8(-2)",
		"Agilidade"               => "13(+3)",
		"Inteligência"            => "6(-4)",
		"Vontade"                 => "8(-2)",
		"Deslocamento"            => 10,
		"Imunidade"               => "Não possui",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "Não possui",
		"OpcoesAtaque(melee)"     => "+3 (1d6+1)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Não possui	",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (
		
		"Nome"                    => "Animal Minúsculo",
		"Dificuldade"             => 1,
		"Categoria"               => "Animal - Tamanho 1/4 ou menor",
		"Percepção"               => "14(+4)",
		"Defesa"                  => 14,
		"Vida"                    => 5,
		"Força"                   => "5(-5)",
		"Agilidade"               => "14(+4)",
		"Inteligência"            => "6(-4)",
		"Vontade"                 => "8(-2)",
		"Deslocamento"            => 10,
		"Imunidade"               => "Não possui",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "Não possui",
		"OpcoesAtaque(melee)"     => "+4 com 2 perdições",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Distrair",
		"DescricaoAtaqueEspecial" => " Uma criatura alvo, ao alcance do animal, deve
		fazer uma jogada de desafio de Vontade. Caso fracasse,
		ela fica debilitada por 1 rodada ou até que
		não esteja mais ao alcance do animal.",
		"NomeAcaoEspecial"        => "Não possui	",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (

		"Nome"                    => "Enxame de Animais",
		"Dificuldade"             => 5,
		"Categoria"               => "Animal - Tamanho 1",
		"Percepção"               => "12(+2)",
		"Defesa"                  => 13,
		"Vida"                    => 20,
		"Força"                   => "8(-2)",
		"Agilidade"               => "13(+3)",
		"Inteligência"            => "5(-5)",
		"Vontade"                 => "8(-2)",
		"Deslocamento"            => 8,
		"Imunidade"               => " agarrado, assustado, atordoado, encantado,
		imobilizado, lento, pasmo, prostrado, surdo",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Multidão:</strong> Um enxame sofre metade do dano por efeitos
		que utilizam jogadas de ataque e o dobro do
		dano por efeitos que exijam uma jogada de desafio
		do enxame.<br>
		<strong>Asco:</strong> Criaturas, exceto as do tipo do Enxame, ficam
		debilitadas quando estão no espaço do Enxame ou
		a 1 metro dele.",
		"OpcoesAtaque(melee)"     => "+3 com 1 dádiva (1d6
		ou 1d3 caso o enxame esteja ferido)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Não possui	",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "<strong>Aglomeração de Animais:</strong> Cada criatura, que não
		seja um enxame e esteja em seu espaço ou a 1
		metro dele, deve fazer uma jogada de desafio de
		Agilidade. Caso fracasse, ela sofre 1d6 de dano e
		fica lenta por 1 rodada."
	),

	array (

		"Nome"                    => "Aparição",
		"Dificuldade"             => 100,
		"Categoria"               => "Espírito Horripilante - Tamanho 1",
		"Percepção"               => "14(+4)",
		"Defesa"                  => 16,
		"Vida"                    => 60,
		"Força"                   => "Não possui",
		"Agilidade"               => "16(+6)",
		"Inteligência"            => "11(+1)",
		"Vontade"                 => "14(+4)",
		"Deslocamento"            => "14; voador",
		"Imunidade"               => "dano por doença, fogo, frio, e veneno; ganhar
		Insanidade; adormecido, doente, envenenado, fatigado,
		imobilizado, lento",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Insubstancial:</strong>  Uma aparição sofre metade do dano
		por armas, pode se mover através de objetos sólidos
		e outras criaturas, e ignora os efeitos de movimentação
		por terreno difícil.<br>
		<strong>Asco:</strong> Criaturas, exceto as do tipo do Enxame, ficam
		debilitadas quando estão no espaço do Enxame ou
		a 1 metro dele.",
		"OpcoesAtaque(melee)"     => "Lâmina de Sombras (corpo a corpo) +6 com 2 dádivas
		(2d6 mais Ferimento Duradouro)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "<strong>Ferimento Duradouro:</strong> Um alvo vivo sofre uma penalidade
		cumulativa em sua Saúde igual ao dano
		sofrido pelo ataque. Se o alvo ficar incapacitado por
		um ataque da aparição enquanto sob o efeito desta
		penalidade, ele morre. No final da próxima rodada,
		uma nova aparição com metade da Saúde de seu
		criador sai do corpo e levanta-se no espaço aberto
		mais próximo. Ela é compelida por 1 hora por seu
		criador e pode agir normalmente após isto.",
		"NomeAtaqueEspecial"      => "<strong>Ventos Etéreos",
		"DescricaoAtaqueEspecial" => "A aparição utiliza uma ação ou ação
		desencadeada em seu turno para se mover até seu
		Deslocamento. Este movimento não desencadeia
		ataques livres.",
		"NomeAcaoEspecial"        => "Não possui	",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "<strong>Queimada pelo Sol:</strong> A aparição sofre 3d6 de dano,
		caso esteja em uma área iluminada pela luz do Sol."
	),

	array (

		"Nome"                    => "Aranha Gigante",
		"Dificuldade"             => 10,
		"Categoria"               => "Horripilante",
		"Percepção"               => "16(+6); visão no escuro",
		"Defesa"                  => 14,
		"Vida"                    => 20,
		"Força"                   => "12(+2)",
		"Agilidade"               => "13(+3)",
		"Inteligência"            => "7(-3)",
		"Vontade"                 => "10(+0)",
		"Deslocamento"            => "14; escalador",
		"Imunidade"               => "Não possui",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "Não possui",
		"OpcoesAtaque(melee)"     => "+3 com 1 dádiva (1d6 + veneno)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "O alvo deve fazer uma jogada de desafio de Força. Caso fracasse, ele sofre 1d6 de dano e fica envenenado por 1 minuto. Caso o alvo já esteja envenenado, em vez disso sofre 1d6 de dano adicional.",
		"NomeAtaqueEspecial"      => "Recuar",
		"DescricaoAtaqueEspecial" => "Quando uma criatura ao alcance da aranha se move, ela pode utilizar uma ação desencadeada para recuar.",
		"NomeAcaoEspecial"        => "Não possui",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (
		
		"Nome"                    => "Assombração",
		"Dificuldade"             => 25,
		"Categoria"               => "Espírito Horripilante - Tamanho 1",
		"Percepção"               => "11(+1); visão no escuro",
		"Defesa"                  => 16,
		"Vida"                    => 25,
		"Força"                   => "-",
		"Agilidade"               => "13(+3)",
		"Inteligência"            => "9(-1)",
		"Vontade"                 => "11(+1)",
		"Deslocamento"            => 10,
		"Imunidade"               => "dano por doença, fogo, frio e veneno; ganhar
		Insanidade; adormecido, cego, doente, envenenado,
		fatigado, imobilizado, lento, surdo",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Insubstancial:</strong> Uma assombração sofre metade do
		dano por armas, pode se mover através de objetos
		sólidos e outras criaturas, e ignora os efeitos de movimento
		por terreno difícil.<br>
		<strong>Naturalmente Invisível:</strong> Uma assombração é invisível
		para todas as criaturas, com exceção de assombra-
		ções, animais e crianças. Enquanto estão invisíveis,
		as assombrações não possuem a propriedade horripilante
		e não podem utilizar seus ataques.",
		"OpcoesAtaque(melee)"     => "+3 com 2 dá-
		divas (2d6+2)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "O alvo deve fazer uma jogada de desafio de Força. Caso fracasse, ele sofre 1d6 de dano e fica envenenado por 1 minuto. Caso o alvo já esteja envenenado, em vez disso sofre 1d6 de dano adicional.",
		"NomeAtaqueEspecial"      => "Recuar",
		"DescricaoAtaqueEspecial" => "Quando uma criatura ao alcance da aranha se move, ela pode utilizar uma ação desencadeada para recuar.",
		"NomeAcaoEspecial"        => "<strong>Manifestação:</strong> A assombração utiliza uma ação ou uma
		ação desencadeada em seu turno para ficar visível.
		Ela se mantém visível até utilizar uma ação ou ação
		desencadeada para ficar invisível novamente.",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (

		"Nome"                    => "Assombração",
		"Dificuldade"             => 25,
		"Categoria"               => "Espírito Horripilante - Tamanho 1",
		"Percepção"               => "11(+1); visão no escuro",
		"Defesa"                  => 16,
		"Vida"                    => 25,
		"Força"                   => "-",
		"Agilidade"               => "13(+3)",
		"Inteligência"            => "9(-1)",
		"Vontade"                 => "11(+1)",
		"Deslocamento"            => 10,
		"Imunidade"               => "dano por doença, fogo, frio e veneno; ganhar
		Insanidade; adormecido, cego, doente, envenenado,
		fatigado, imobilizado, lento, surdo",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Insubstancial:</strong> Uma assombração sofre metade do
		dano por armas, pode se mover através de objetos
		sólidos e outras criaturas, e ignora os efeitos de movimento
		por terreno difícil.<br>
		<strong>Naturalmente Invisível:</strong> Uma assombração é invisível
		para todas as criaturas, com exceção de assombra-
		ções, animais e crianças. Enquanto estão invisíveis,
		as assombrações não possuem a propriedade horripilante
		e não podem utilizar seus ataques.",
		"OpcoesAtaque(melee)"     => "+3 com 2 dá-
		divas (2d6+2)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "O alvo deve fazer uma jogada de desafio de Força. Caso fracasse, ele sofre 1d6 de dano e fica envenenado por 1 minuto. Caso o alvo já esteja envenenado, em vez disso sofre 1d6 de dano adicional.",
		"NomeAtaqueEspecial"      => "Recuar",
		"DescricaoAtaqueEspecial" => "Quando uma criatura ao alcance da aranha se move, ela pode utilizar uma ação desencadeada para recuar.",
		"NomeAcaoEspecial"        => "<strong>Manifestação:</strong> A assombração utiliza uma ação ou uma
		ação desencadeada em seu turno para ficar visível.
		Ela se mantém visível até utilizar uma ação ou ação
		desencadeada para ficar invisível novamente.",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	array (

		"Nome"                    => "Autômato",
		"Dificuldade"             => 25,
		"Categoria"               => "Autômato - Tamanho 1",
		"Percepção"               => "10(+0)",
		"Defesa"                  => "14 (escudo pequeno)",
		"Vida"                    => 32,
		"Força"                   => "12(+2)",
		"Agilidade"               => "8(-2)",
		"Inteligência"            => "10(+0)",
		"Vontade"                 => "10(+0)",
		"Deslocamento"            => 8,
		"Imunidade"               => " dano por doença e veneno; adormecido, doente,
		envenenado, fatigado",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Chave:</strong> Um autômato tem uma chave em algum lugar
		de seu corpo que não consegue alcançar. Quando a
		chave é girada, ele é uma criatura; quando ela para,
		se torna um objeto. A chave para de girar quando
		fica incapacitado. Ela também para de girar no fim
		da rodada, se o autômato obteve um resultado de 0
		ou menos em uma jogada de ataque ou desafio.
		Enquanto é um objeto, o autômato não pode
		utilizar ações, se mover, falar ou perceber seus
		arredores. Qualquer criatura que possa alcançá-lo
		pode utilizar uma ação para dar corda nele; caso
		não esteja incapacitado, o autômato volta a ser uma
		criatura.<br>
		<strong>Acelerar as Engrenagens:</strong> Um autômato pode aumentar
		a quantidade de ações que pode realizar em um
		turno em 1. Quando ele terminar o turno, jogue 1d6.
		Caso o resultado seja ímpar, ele se torna um objeto
		no fim da rodada.",
		"OpcoesAtaque(melee)"     => "<strong>Espada</strong> +2 com 1 dádiva (2d6+2)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Não possui",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),

	

);

$monstrosNivel5 = array (


	array (
		
		"Nome"                    => "Barghest",
		"Dificuldade"             => 250,
		"Categoria"               => "Fada Horripilante - Tamanho 2(diabo)",
		"Percepção"               => "20(+10); visão da verdade",
		"Defesa"                  => 17,
		"Vida"                    => 100,
		"Força"                   => "15(+5)",
		"Agilidade"               => "14(+4)",
		"Inteligência"            => "10(+0)",
		"Vontade"                 => "15(+5)",
		"Deslocamento"            => 14,
		"Imunidade"               => " dano por fogo e frio; ganhar Insanidade; assustado,
		compelido, encantado",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Resiliência:</strong> Um Barghest sofre metade do dano por
		armas.<br>
		<strong>Defesa Contra Magia:</strong> Um Barghest sofre metade do
		dano por magias e faz jogadas de desafio para resistir
		a magias com 1 dádiva. Criaturas fazem suas
		jogadas de ataque com 1 perdição quando atacam
		um Barghest com uma magia.<br>
		<strong>Vulnerabilidade ao Ferro:</strong> Um Barghest fica debilitado,
		enquanto está em contato com ferro.<br>
		<strong>Consumido pelo Fogo Infernal:</strong> Quando um Barghest
		fica incapacitado, fogo infernal preenche uma esfera
		de 10 metros de raio, centrada em um ponto em seu
		espaço, consumindo o corpo. Cada criatura na área
		deve fazer uma jogada de desafio de Agilidade com
		2 perdições, sofrendo 5d6+10 de dano, caso fracasse,
		ou metade do dano, caso seja bem-sucedida.<br>
		<strong>Sentir Vida:</strong> Um Barghest sabe a localização de cada
		criatura viva a 1,6 quilômetros de distância. Tais
		criaturas não podem se esconder dele, e seus ataques
		ignoram perdições impostas por obscurecimento
		contra alvos vivos",
		"OpcoesAtaque(melee)"     => "<strong>Dentes</strong> +5 com 3 dádivas (4d6+2
		mais 2d6 de fogo)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "<strong>O Inferno Aguarda</strong>",
		"DescricaoAtaqueEspecial" => "O Barghest utiliza uma ação ou
		ação desencadeada em seu turno para fazer uma
		jogada de desafio de Vontade contra a Vontade de
		uma criatura alvo a média distância que possa vê-
		-lo. Ele faz suas jogadas de ataque com 3 dádivas,
		caso o alvo tenha pontos de Corrupção. Caso seja
		bem-sucedido, o alvo ganha 1 de Insanidade e fica
		amaldiçoado por 1 hora ou até que o Barghest fique
		incapacitado. Enquanto a maldição não for removida,
		o alvo não pode curar dano e fica debilitado.
		Uma criatura amaldiçoada por um Barghest morre
		instantaneamente quando fica incapacitada, e o
		Inferno leva sua alma. Ela não pode retornar a vida
		por magia.
		Uma vez que o Barghest utiliza O Inferno
		Aguarda, não pode fazer isso novamente por 1
		minuto.",
		"NomeAcaoEspecial"        => "<strong>Fogo do Inferno:</strong> Quando uma criatura ao alcance do
		Barghest lhe causa dano, ele pode utilizar uma ação
		desencadeada para cuspir fogo de sua boca. A criatura
		desencadeadora precisa obter sucesso em um
		desafio de Agilidade ou sofre 2d6 de dano.<br>
		<strong>Cães do Inferno:</strong> Quando uma criatura sai do alcance
		do Barghest, ele pode utilizar uma ação desencadeada
		para se mover até seu Deslocamento em
		direção a criatura desencadeante. Este movimento
		não desencadeia ataques livres.",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "<strong>Queimado pelo Sol:</strong> O Barghest sofre 2d6 de dano
		caso esteja em uma área iluminada pela luz do sol."
	),


	array (

		"Nome"                    => "Barrete Vermelho",
		"Dificuldade"             => 5,
		"Categoria"               => "Fada - Tamanho 2",
		"Percepção"               => "12(+2); visão nas sombras",
		"Defesa"                  => 14,
		"Vida"                    => 10,
		"Força"                   => "12(+2)",
		"Agilidade"               => "14(+4)",
		"Inteligência"            => "10(+0)",
		"Vontade"                 => "13(+3)",
		"Deslocamento"            => 10,
		"Imunidade"               => " dano por doença; doente; encantado",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Defesa Contra Magias:</strong> Um Barrete Vermelho sofre
		metade do dano por magias e faz jogadas de desafio para resistir a magias com 1 dádiva. Quando
		uma criatura ataca um Barrete Vermelho com
		uma magia, faz suas jogadas de ataque com 1
		perdição.<br>
		<strong>Vulnerabilidade ao Ferro:</strong> Um Barrete Vermelho
		fica debilitado, enquanto está em contato com
		ferro.",
		"OpcoesAtaque(melee)"     => "<strong>Navalha</strong> +4 com 1 dádiva (1d6)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "<strong>Botas Velozes:</strong> O Barrete Vermelho utiliza uma
		ação ou ação desencadeada em seu turno para
		mover-se até quatro vezes seu Deslocamento.
		Caçada Assassina Quando uma criatura sai do
		alcance do Barrete Vermelho, ele pode utilizar
		uma ação desencadeada para mover-se até
		seu Deslocamento em direção a criatura
		desencadeante. O Barrete Vermelho faz
		jogadas de ataque com 1 dádiva contra
		tais criaturas por 1 rodada.",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),


	array (
		
		"Nome"                    => "Basilisco",
		"Dificuldade"             => 250,
		"Categoria"               => "Monstro - Tamanho 3",
		"Percepção"               => "12(+2); visão no escuro",
		"Defesa"                  => 18,
		"Vida"                    => 150,
		"Força"                   => "17(+7)",
		"Agilidade"               => "11(+1)",
		"Inteligência"            => "8(-2)",
		"Vontade"                 => "11(+1)",
		"Deslocamento"            => 12,
		"Imunidade"               => "Não possui",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Aparência Cativante:</strong> Ao ver pela primeira vez um
		Basilisco, uma criatura deve fazer uma jogada de
		desafio de Vontade com 3 perdições. Caso fracas-
		se, ela ganha 1 de Insanidade e não pode tirar os
		olhos do Basilisco por 1 rodada. Caso obtenha su-
		cesso ou fracasse, a criatura fica imune ao efeito da
		Aparência Cativante do Basilisco até que complete
		um descanso.",
		"OpcoesAtaque(melee)"     => "<strong>Presas</strong> +7 com 3 dádiva (4d6 + Veneno)<br>
		Veneno O alvo deve fazer uma jogada de desafio de
		Força com 3 perdições. Ele sofre 4d6 de dano e
		fica envenenado por 1 minuto, caso fracasse; sofre
		apenas metade do dano, caso obtenha sucesso. Se
		o alvo já está envenenado, em vez disso, ele sofre
		4d6 de dano adicional.
		Ao final de cada rodada, uma criatura envenena-
		da por esta fonte deve fazer uma jogada de desafio
		de Força. Caso fracasse, ela sofre 2d6 de dano e
		fica pasma por 1 rodada.",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "Não possui",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "<strong>Olhar Mortal:</strong> Todas as criaturas a média distância do
		Basilisco que podem vê-lo devem utilizar uma ação
		desencadeada para desviar o olhar do olhar do Basilisco ou fazem uma jogada de desafio de Força
		com 2 perdições. Por 1 rodada, a criatura que desviou o olhar faz
		suas jogadas de ataque com 2 perdições e outras
		criaturas fazem suas jogadas de ataque contra ela
		com 2 dádivas.
		Se a criatura fracassa na jogada de desafio de Força, ela sofre 3d6 de dano. Se a criatura fica incapacitada por esse dano, ela morre
		instantaneamente."
	),

	array (

		"Nome"                    => "Barrete Vermelho",
		"Dificuldade"             => 5,
		"Categoria"               => "Fada - Tamanho 2",
		"Percepção"               => "12(+2); visão nas sombras",
		"Defesa"                  => 14,
		"Vida"                    => 10,
		"Força"                   => "12(+2)",
		"Agilidade"               => "14(+4)",
		"Inteligência"            => "10(+0)",
		"Vontade"                 => "13(+3)",
		"Deslocamento"            => 10,
		"Imunidade"               => " dano por doença; doente; encantado",
		"Vulnerabilidade"         => "Não possui",
		"TalentosPassivos"        => "<strong>Defesa Contra Magias:</strong> Um Barrete Vermelho sofre
		metade do dano por magias e faz jogadas de desafio para resistir a magias com 1 dádiva. Quando
		uma criatura ataca um Barrete Vermelho com
		uma magia, faz suas jogadas de ataque com 1
		perdição.<br>
		<strong>Vulnerabilidade ao Ferro:</strong> Um Barrete Vermelho
		fica debilitado, enquanto está em contato com
		ferro.",
		"OpcoesAtaque(melee)"     => "<strong>Navalha</strong> +4 com 1 dádiva (1d6)",
		"OpcoesAtaque(range)"     => "Não possui",
		"TalentoAtaque"           => "Não possui",
		"NomeAtaqueEspecial"      => "Não possui",
		"DescricaoAtaqueEspecial" => "Não possui",
		"NomeAcaoEspecial"        => "<strong>Botas Velozes:</strong> O Barrete Vermelho utiliza uma
		ação ou ação desencadeada em seu turno para
		mover-se até quatro vezes seu Deslocamento.
		Caçada Assassina Quando uma criatura sai do
		alcance do Barrete Vermelho, ele pode utilizar
		uma ação desencadeada para mover-se até
		seu Deslocamento em direção a criatura
		desencadeante. O Barrete Vermelho faz
		jogadas de ataque com 1 dádiva contra
		tais criaturas por 1 rodada.",
		"PoderMagia"              => "Não possui",
		"TradicaoMagia"           => "Não possui",
		"EfeitoEndTurn"           => "Não possui"
	),











































);

	$monstrosNivel10 = array (



	);

	$monstrosNivel25 = array (



	);

	$monstrosNivel50 = array (



	);

	$monstrosNivel100 = array (



	);

	$monstrosNivel250 = array (



	);

	$monstrosNivel500 = array (



	);

















































?>	