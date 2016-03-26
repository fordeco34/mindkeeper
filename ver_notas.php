<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
	<?php
	include 'common/head.php';
	?>
</head>

<body>
	<div class="container">
		<?php
		include 'common/menu.php';
		?>	

		<div class="row">			
			<div class="col-lg-3">
				Bem vindo, RicardoCPS31 <a href="index.php">Sair</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<table class="table table-striped"> 
					<thead> 
						<tr>
							<th></th> 
							<th>Nome</th> 
							<th>Tipo</th> 
							<th>Data de criacao</th>
							<th>Excluir</th>
						</tr> 
					</thead> 
					<tbody> 
						<tr> 
							<td>
								<input type="checkbox">
							</td>
							<td><a href="#">Supermercado</a></td>
							<td>Lista</td>
							<td>12/02/2016</td>
							<td>
								<a href="#">
									<img src="images/trashcan.png" class="trashIcon">
								</a>
							</td>
						</tr>

						<tr> 
							<td>
								<input type="checkbox">
							</td>
							<td><a href="#">Testamento</a></td>
							<td>Texto</td>
							<td>13/02/2016</td>
							<td>
								<a href="#">
									<img src="images/trashcan.png" class="trashIcon">
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 text-right">
				<a role="button" class="btn btn-primary" href="excluir_nota.php">Excluir nota</a>
				<a role="button" class="btn btn-primary" href="incluir_nota.php">Incluir nota</a>				
			</div>			

		</div>

		
	</div> <!-- /container -->


	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>



