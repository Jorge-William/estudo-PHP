<?php 
		include 'header.php';
		$aula_atual = 'loop-foreach';
	?>


	<body>

		<h2>LOOP FOREACH</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		

			<?php 

				$cursos = array(
								array(
									"n_alunos" => 400,
									"titulo" => "Excel do zero ao avançado",
									"url" => "http://www.udemy.com",
									"aval" => 200
								),
								array(
									"n_alunos" => 300,
									"titulo" => "Aprenda Desenvolvimento Web em HTML/CSS",
									"url" => "http://www.udemy.com",
									"aval" => 150
								),
								array(
									"n_alunos" => 280,
									"titulo" => "Programe em Python",
									"url" => "http://www.udemy.com",
									"aval" => 90
								),
								array(
									"n_alunos" => 110,
									"titulo" => "JavaScript do zero",
									"url" => "http://www.udemy.com",
									"aval" => 44
								)
				); 
			?>


		<h3>Meus Cursos</h3>
				
			<ul>	
				<?php foreach ($cursos as $item) { ?>
					<li>
						<a href="<?php echo $item['url']?>"><?php  echo $item['titulo'];?></a><br>
						<?php  echo $item['n_alunos'].' Alunos '.' / '.$item['aval'].' Avaliações';?>
						
					</li>
					<br>
				<?php }?>
			</ul>	
		<h3>Agora é a sua vez</h3>

			<p>Crie um Array, de preferência multidimensional, e solte as informações de cada item deste array em uma lista usando o loop foreach.</p>
			<br>

			<?php 
				$filme = array(
					array(
						"Titulo" => "Mad-Max",
						"Lançamento" => "1987",
						"Genero" => "Ação",
						"Protagonista" => "Mel Gibson"
					),
					array(
						"Titulo" => "O demolidor",
						"Lançamento" => "1994",
						"Genero" => "Ação",
						"Protagonista" => "Silvester Stallone"
					),
					array(
						"Titulo" => "O predador",
						"Lançamento" => "1985",
						"Genero" => "Ação",
						"Protagonista" => "Arnold S."
					),					
				)
			?>



			<div class="cartao">
				<?php foreach ($filme as $valor) {?>
					<h3>O Filme: <?php echo $valor['Titulo'];}?></h3>

			</div>	


		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>