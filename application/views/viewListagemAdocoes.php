<!DOCTYPE html>
	<head>
		<?php
		$this->load->view('head');
		?>

		<script>
		function concluir() {
			alert("função ainda não implementada");
		}
		</script>
		
	</head>
	<body>
		<?php
			$this->load->view('menu');
		?>
	<div class="container">


		<div class="container-fluid">

			<div class="row"><!--inicio da row-->

			<div class="alert alert-info text-center">
				<?php
					if($listacaes == null){
						echo "Nenhuma solicitação de adoção no momento";
					}else{
						echo "Há solicitações de adoção para os pets abaixo";
					}
  				
  				?>
			</div>


			<?php
				foreach ($listacaes as $cao) {
					echo "<div class='col-sm-3'><!--inicio do bloco-->";
					echo "<div class='panel panel-default'>";
					echo "<div class='panel-body'>";
						echo "<a href=''><img src='http://localhost/viralate/images/dogs/" . $cao['id'] . "/". $cao['imagem']."' height='100%' width='100%'></a>";
						echo "<h4>Nome: " . $cao['nomecao'] . "</h4>";
						echo "<h4>Solicitante: " . $cao['nomepessoa'] . "</h4>";
					echo "</div>";
					echo "<div class='panel-footer text-center' onclick='concluir()'>";
					echo "<h5>Concluir</h5></div>";
					echo "</div></div><!--fim do bloco-->";
				}
			?>

			</div> <!-- fim da div row-->

		</div>
		
	</div>

	</body>
</html>
