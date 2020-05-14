<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <meta name="description" content="Sites de graça ou com preços baixos para empreendedores em geral.">
    <meta name="author" content="Luis Fernando da Silva Bittencourt https://www.lfbittencourt.com.br">
   <!-- <link rel="icon" href="css/img/icone.png"> -->
	
	<?php 
		//Acaba com a sessão do usuário sempre que voltar a esta página!
		//Assim, sempre obriga os usuários a se logarem para navegar no sistema.
		session_start(); session_destroy();
	?>

    <title> 3Bits </title>
	
	
	<!-- Jquery for system -->
     <script src="js/jquery/jquery-3.4.1.min.js"></script>
	 <script src="js/forms/index_geral.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="dev/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Fonts do Google -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	
	<link href="css/style.css" rel="stylesheet">
   <link href="dev/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
	 
  </head>

  <body style="font-family: 'Open Sans', sans-serif;">

    <nav class="navbar navbar-inverse navbar-light navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="https://www.lfbittencourt.com.br" target="_blank" alt='pagina do projeto'> <i class="fas fa-chart-line" aria-hidden="true"></i> ERP INTUIR &copy;  v1.0</a>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
              <li class="active"><a href="./">Inicio</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="#">Fale conosco</a></li>
			</ul>
		
		
          <form class="navbar-form navbar-right" id="acesso_user_adm">
            <!--<div class="form-group">
              <input type="email" placeholder="Email" class="form-control required" id="inputEmail" required autofocus>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control required" id="inputPassword" required>
            </div>-->
			
			<!--<button id="sign_in" class="btn btn-outline-success" type="button">Sign in</button>-->
			<div id="sign_in" class='form-group link' style='margin-right:10px;'> Assine </div>
            <button id="entrar_adm" class="btn btn-success" type="button">Entrar</button>
            
			
          </form>
		  
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	
	
	<div id="div_body">
	
	  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
	  
			<div class="item active">
			  <img class="first-slide" src="css/fotos/free2.png" alt="First slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1 class="font-weight-bold"><b> + LIBERDADE</b></h1>
				  <p> <?php echo utf8_encode("Mais  liberdade  para gerenciar seus negócios de onde estiver."); ?></p>
				  <p><a class="btn btn-lg btn-primary" href="#apresentacao" role="button">Saiba mais</a></p>
				</div>
			  </div>
			</div>
		
			<div class="item">
			  <img class="second-slide" src="css/fotos/prod2.png" alt="Second slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1><b> + PRODUTIVIDADE</b></h1>
				  <p><?php echo utf8_encode(" Mais produtividade  para você chegar onde deseja.");?></p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Saiba mais</a></p>
				</div>
			  </div>
			</div>
		
			<div class="item">
			   <img class="third-slide" src="css/fotos/tecno.png" alt="Third slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1><b> + TECNOLOGIA</b></h1>
				  <p><?php echo utf8_encode("Muito mais tecnologia para você e sua empresa, sem pagar nada mais por isso."); ?></p>
				  <p><a class="btn btn-lg btn-primary" href="#cards" role="button">Saiba mais</a></p>
				</div>
			  </div>
			</div>
		
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	
	
	 	<!-- APRESENTAÇÃO -->
		<section id="apresentacao" class="">
			<div class="jumbotron jumbotron-fluid" style="padding:0px 20px 0px 20px;">
				<div class="container">
					<h2 class="display-4 font-weight-bold" style=''> <span class='shadow-lg p-3 mb-5 rounded'>Somos muito gratos em ter você aqui</span>   </h2>
							<p  class='text-justify'>
									<?php $text = "
												  <p style=''>Conheça quem somos e nosso porquê de existir:</p>
												  ";
										  echo utf8_encode($text);
									?>	
							<p>
							<hr class="my-4">
							<div id="apresentacao_intuir" class="font-weight-bold">
							
							</div>
				</div>
			</div>
		</section>
		
		<!-- VALORES DA EMPRESA -->
		<section id="valores" class="container">
		
			<nav id="cards">
				  <!-- Example row of columns -->
				  <div class=" card-deck row">	
						<div class=" card-body col-md-4">
						 <spam style="font-size:80px;"><center><i class="fas fa-bullhorn"></i></center></spam>
						  <center><h2 class="card-title"><b><?php echo utf8_encode("Missão");?></b></h2></center>
						  <p class="card-text" align="justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
								ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						  <p><a class="btn btn-default" href="#" role="button" id="col_missao">Veja mais &raquo;</a></p>
						</div>
						
						
						<div class=" card col-md-4">
						<spam style="font-size:80px;"><center><i class="far fa-eye"></i></center></spam>
						  <center><h2 class="card-title"><b><?php echo utf8_encode("Visão");?></b></h2></center>
						  <p class="card-text" align="justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
								ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						  <p><a class="btn btn-default" href="#" role="button" id="col_visao">Veja mais &raquo;</a></p>
					   </div>
						<div class="card col-md-4">
						<spam style="font-size:80px;"><center><i class="fas fa-bullseye"></i></center></spam>
						  <center><h2 class="card-title"><b><?php echo utf8_encode("Objetivos");?></b></h2></center>
						  <p class="card-text" align="justify">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
								Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						  <p><a class="btn btn-default" href="#" role="button" id="col_objetivos">Veja mais &raquo;</a></p>
						</div>
					
				  </div>
			</nav>
		</section><!-- /container -->
		
		<!-- RESPONSABILIDADE SOCIAL -->
		<section id="responsabilidade_social">
		
				<div class="tema_social">
				<center>
					<h2 class="display-4 font-weight-bold" style=''> <span class='shadow-lg p-3 mb-5 rounded'><b>Responsabilidade social é uma obrigação de todos!</b></span>   </h2>
				</center>		
				</div>
				
				<div class="container social">
				<center>
					<h2 class="display-4 font-weight-bold titulo_social" style=''> <span class='shadow-lg p-3 mb-5 rounded'><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b></span>   </h2>
				</center>
				<spam class="texto_servicos ">
				
				<p class="sombrear">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate enim justo, ut porttitor erat faucibus id. Suspendisse a lectus euismod, porttitor dui id, 
				      hendrerit lectus. Aenean ultricies turpis tincidunt lacus luctus porta. Morbi sed eros nec mi semper eleifend sed in sem. Sed sollicitudin vitae tortor ac pretium. 
					  Mauris condimentum, libero et placerat interdum, sem leo varius nisl, eu dictum risus enim hendrerit nisl. Ut et aliquet urna. Curabitur in lectus pulvinar, venenatis
					  magna vel, facilisis erat. Pellentesque iaculis tempor quam, a fermentum augue varius egestas. Nulla ac lobortis massa, vitae convallis odio.</p>

					   
				<center><a id="saiba_mais" class="btn btn-success" type="button" href="#"><b>SAIBA COMO PARTICIPAR</b></a></center>
				</br>
				</spam>
				</div>
		
		</section>
		
		<!--NOSSOS SERVIÇOS-->
		<section id="servicos">
			<div class="jumbotron jumbotron-fluid"> NOSSOS SERVIÇOS </div>
		
		</section>
		
		<!--QUEM SOMOS-->
		<section id="quem_somos">
			<div class="jumbotron jumbotron-fluid" style="">
					<table border="1" width="100%">
					
					<tr>
						<td width="60%" height="400px" style="padding-left:20px;padding-right:15px;"><p class="text-justify">
										<spam class="titulo_perfil"><b>LUIS BITTENCOURT</b></spam><br/>
										<spam class="texto_perfil">
											Morbi rutrum erat et leo dignissim viverra. Duis velit nunc, bibendum non nulla in, finibus rhoncus neque. Pellentesque habitant morbi tristique
											senectus et netus et malesuada fames ac turpis egestas. Aliquam ligula enim, rutrum eu blandit ac, tristique at metus. Morbi dolor est, accumsan 
											a enim vitae, convallis posuere libero. Curabitur bibendum libero sapien, et pulvinar erat sollicitudin nec. Maecenas eget velit magna. Integer mollis 
											lacus vulputate, maximus dolor congue, porttitor neque. Nulla eu varius lectus, vel laoreet neque. Aliquam nec lobortis enim. Morbi ac auctor nisl, 
											in dictum lorem.
										</spam>
								</p>
																
						</td>
						<td valign="top" width="" id="imagem_perfil" class="imagem_respnsiva"> </td>
					</tr>
					
					</table>
				</div>
		</section>
		
		<!-- FALE CONOSCO -->
		<section id="fale_conosco">
		
		
		</section>
		
		
		
		
	</div>
	
	
      <section id="footer">
         <!-- FOOTER: RODAPÉ DA PÁGINA: MEU JABÁ! -->
			<footer class="footer mt-auto py-3">
					  <div class="container">
					  
					  <center><a class="link rede_social" href="#" ><i class="fab fa-facebook"></i></a>  |  <a class="link rede_social" href="#"><i class="fab fa-instagram"></i></a>  |  <a class="link rede_social" href="#"><i class="fab fa-pinterest"></i></a></center>
					  <br/>
					  <center><a class="link" href="#" ><i>termos de uso</i></a>    |    <a class="link" href="#" ><i>perguntas frequentes</i></a>    |    <a class="link" href="#" ><i>política de privacidade</i></a></center>
					  <hr/>
					  <p class="mt-5 mb-3 text-muted text-center"> <a href="https://www.lfbittencourt.com.br" target="__blank" >&copy; copyright lfbittencourt -2009 / <?php echo $ano = date("Y"); ?></a> </br> TODOS OS DIREITOS RESERVADOS</p>
					  </div> 
			</footer>
	</section>
 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script>window.jQuery || document.write('<script src="js/jquery/jquery-3.4.1.min.js"><\/script>')</script>
    <script src="dev/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   
	 
  </body>
</html>
