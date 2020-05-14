<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <meta name="description" content="Template Black Tie: elegante e discreto, perfeito para atividades profissionais.">
    <meta name="author" content="Luis Fernando da Silva Bittencourt https://www.lfbittencourt.com.br">
   <!-- <link rel="icon" href="css/img/icone.png"> -->
	
	<?php 
		/*include("../../ctl/global.php");
		
		//ABRE A SESSÃO
		session_start(); 
		if(isset($_SESSION['id'])){
									
				//CASO EXISTA, PEGA OS DADOS DA SESSÃO
				$id                   = $_SESSION["id"   ];             
				$data_logado = $_SESSION['data'];
				$ip_logado     = $_SESSION['ip'     ];
				
				$form_logon = "<div id='sign_out' class='form-group link'  alt='$id'> <i>aguade, carregando...</i> </div>";
									
		}else{
				
				unset($_SESSION['id'    ]);
				unset($_SESSION['data']);
				unset($_SESSION['ip'    ]);
				
				$form_logon = "<form class='navbar-form navbar-right  form-inline' id='acesso_user'>
				
												<button id='entrar_adm' class='btn btn-success' type='button'>Entrar</button>
											
											</form>";
									
		}*/
		
	?>

    <title> Template Black Tie </title>
	
	
	<!-- Jquery for system -->
     <script src="../../js/jquery/jquery-3.4.1.min.js"></script>
	 <script src="js/blacktie.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../../sys/bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Fonts do Google -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	
	<link href="css/style_black_tie.css" rel="stylesheet">
   <link href="../../sys/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
	 
  </head>

  <body style="font-family: 'Open Sans', sans-serif;">
  
  
  <!-- MENU DA PÁGINA-->
  <nav class="navbar navbar-expand-md navbar-inverse navbar-fixed-top navbar-page">
      <div class="container">
        <div class="navbar-header">
		 <a class="navbar-brand link" href="#"><img src="../../css/img/logo/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" target="_blank" alt='pagina de modelo'>  3Bits </a>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav ">
              
              <!--<li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>-->
			</ul>
		
			<form class="navbar navbar-nav navbar-right form-inline">
			
				<li class=""><a href="#"><b>ESTE MODELO: BALCK TIE</b></a></li>
				  
			</form>
			
		
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
  
	<div class="box" title="subir ao inicio da pagina.">
		<span><center> <i class="fas fa-angle-up"></i></center></span>
	</div>
  
	<!-- BANNER DE CABEÇALHO E MENU DO MODELO-->
	<div class="banner jumbotron jumbotron-fluid" style="">
				<div class="container anime_top" style="">
					<h1 class="display-4 font-weight-bold sombrear" > <spam id="titulo_site" class='shadow-lg p-3 mb-5 rounded'>TITULO DO SITE (Tema ou finalidade)</spam>   </h1>
							<h2  class="display-4 font-weight-bold sombrear"> <spam id="subtitulo_site" class='shadow-lg p-3 mb-5 rounded'>subtitulo a ser utilizado no site</spam></h2>	
				</div>
	</div>
  
   <nav class="navbar navbar-expand-md navbar-inverse navbar-fixed navbar-modelo">
      <div class="container">
        <div class="navbar-header link">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="true" aria-controls="navbar2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="logo_cliente" class="navbar-brand" href="#" target="_blank" alt='pagina de modelo'>  SEU LOGO</a>
        </div>
		
        <div id="navbar2" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right link">
              <li class=""><a href="#apresentacao">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#fale_conosco">Contact Us</a></li>
			</ul>
			
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	
	
	<div id="div_body">
	
		<div id="open-apresentacao"class="open_section " >
		
					<h2 class=""><spam id="frase-apresentacao">Uma frase sobre você ou seu negócio. </spam></h2>
							
		</div>
		
	 	<!-- APRESENTAÇÃO -->
		<section id="apresentacao" class="secao" >
			<div id="div_apresentacao" class="div_texto anime_left">
				<h3><center><spam id="h3-apresentacao">BEM VINDO A EMPRESA XYZ</spam></center></h3>
				<br/>
				<p>
					<spam id="p-apresentacao">
							Aqui você deve utilizar para aprsentar seus objetivos profissionais, sua empresa e coisas relevantes sobre os seus serviços, produtos e/ou modelo de negócio adotado.
							Lembre-se em ser conciso em suas idéias, procurando passar de forma clara e limpa tudo aquilo que desejar informar. Poderá falar mais sobre você na seção Quem Sou.
					</spam>
				</p>
				<br/>				
				<p><a class="btn btn-primary my-2 my-sm-0" href="#" role="button" id="boas-vindas">saiba mais &raquo;</a></p>
				<br/>
			</div>
		</section>
		
		
		
		<!-- VALORES DA EMPRESA -->
		<section id="valores" class="container">
		
			<nav id="cards" class="anime_left">
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
		
	
		
		<!--NOSSOS SERVIÇOS-->
		<section id="servicos" class="secao">
			<div id="div_servicos"class="div_texto anime_left"> 
				<h3><center><spam id="h3-servicos">SOBRE OS NOSSOS SERVIÇOS</spam></center></h3>
				<p>
					Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
								Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</p>
				<br/>				
				<p><a class="btn btn-primary my-2 my-sm-0" href="#" role="button" id="saiba_servicos">saiba mais &raquo;</a></p>
								
			</div>
		
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
		<section id="fale_conosco" class="secao">
	
			<div class="container-fluid">
					<div class="row" style="">
		
						<div  id="contatos" class="col-sm container-fluid"  style="">
							<div class=" border bg-light" style="border-radius:5px; padding:5px 5px 5px 5px;">
						
								<h5><b>Nossos contatos:</b></h5>
								<ul style="list-style-type: none;">
									<li><b>telefone: </b>(51)9 9999-9999;</li>
									<li><b>endereço:</b> Rua São Paulo, 333 cj 105 - São João, Porto Alegre/RS;</li>
									<li><b>e-mail:</b> daniele@naoseioque.com.br</li>
								
								</ul>
							</div>
							
						</div> <!-- /contatos -->	
						
						<div  id="mapa" class="col-sm container-fluid" style="" >
							
							<div id="mapa_show">
							
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d863.711887394138!2d-51.18912490300943!3d-30.012533545923265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979db7b38693d%3A0x520d16b57792508!2sSalut%C3%A1%20Cl%C3%ADnica%20de%20Sa%C3%BAde%20e%20Bem-Estar!5e0!3m2!1spt-BR!2sbr!4v1580821570421!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							
							</div>
						</div> <!-- /mapa-->	
						
						
				</div>	
			</div>
	
	</section>	
	</div>
	
	
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
 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script>window.jQuery || document.write('<script src="../../js/jquery/jquery-3.4.1.min.js"><\/script>')</script>
	<script src="../../js/jquery/jquery-3.4.1.min.js"></script>
    <script src="../../sys/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
   
	 
  </body>
</html>
