<html>
	<head>
		<?php
		$this->load->view('head');
		?>
	</head>
	<body>
		<?php
			$this->load->view('menu');
		?>
			teste02
		<div class="coluna col7 login text-center">
			<?php
				echo form_open('login');
				echo form_label('Email','email');
				echo '<br>';
				echo form_input('email', set_value('email'));
				echo '<br>';				
				echo form_label('Senha','senha');
				echo '<br>';				
				echo form_password('password', set_value('password'));
				echo '<br>';				
				echo form_submit('enviar', 'Enviar', array('class'=>'botao'));
				echo form_close();
				if($formerror):
					echo '<div class="alert alert-danger">'.$formerror.'</div>';
				endif;				
			?>
			<p> 
				Não possui cadastro? <a href="Cadastrarpessoas">Clique aqui</a>
			</p>			
		</div>
	</body>
</html>