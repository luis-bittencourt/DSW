<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <meta name="author" content="Luis Fernando da Silva Bittencourt https://www.lfbittencourt.com.br">
	<meta name="keywords" content="[ INSERIR AS PALAVRAS CHAVES DO SITE ]">
	<meta name="application-name" content="TEMPLATE:  BLACK TIE">
	<meta name="description" content=" [ inserir a descricao do site ]">
	  
   <!-- <link rel="icon" href="css/img/icone.png"> -->
	
	
    <title id="TITULO_PAGINA"> [ TITULO DO SITE ] </title>
	
	
	<!-- Jquery for system -->
     <!--<script src="../../js/jquery/jquery-3.4.1.min.js"></script>-->
	
	 
	 <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
	<script src="controle.js"></script> 
	
    <!-- Bootstrap core CSS 
    <link href="../../sys/bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">-->
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Fonts do Google -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Icones Awesome -->
	<!--<link href="../../sys/fontawesome/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet"> -->
	
	<script src="https://kit.fontawesome.com/ce38887de8.js" crossorigin="anonymous"></script>
	
	<!-- CSS DO TEMPLATE -->
	<link href="estilo.css" rel="stylesheet">
	<link href="menu.css" rel="stylesheet">
	
	 
  </head>

  <body>
  
	<div id="div_sobe_pagina" ></div>
	<div id="palavras_chave"style="display:none;" style="background-color:#ff0000;"></div>
	<!--<div id="div_abertura" class="bloco_" style="background-color:#ff0000;">-->
	
		<div id="div_barra" class="div_barra"> 
			<div id="div_barra_esquerda" class="div-left"> <span id="FONE_CELULAR">algum texto interessante </span> </div>
			<div id="div_barra_direita" class="div-right"> 
					<input type="hidden" id="CODIGO_PROJETO" name="CODIGO_PROJETO">
			        <span id="texto-inicial"> <a class="link" href="#" ><i class="fab fa-facebook"></i></a>  |  <a class="link" href="#"><i class="fab fa-instagram"></i></a>  |  <a class="link" href="#"><i class="fab fa-pinterest"></i></a> </span> 
			</div>
		</div>
		
		<div id="div_cabecalho" style="display:none;">
		
			<h1 id="TITULO"> TÍTULO DO SITE </h1>
			<h2 id="SUBTITULO">Aqui um subtítulo interessante para destacar o que vai ser apresentado.</h2>
			
		</div>
		
		<!--<div id="div_menu" class="div_barra_menu">-->
			<!--<nav class="navbar navbar-expand-md navbar-inverse" style="border-radius:0px;">
					<div class="container_">
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="true" aria-controls="navbar2">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a class="navbar-brand" href="#" >  SEU LOGO </a>
							</div>
		
							<div id="navbar2" class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
								  <li><a href="#">Home</a></li>
								  <li><a href="#">About Us</a></li>
								  <li><a href="#">Contact Us</a></li>
								</ul>
								
							</div>
					</div>
			</nav>-->
			
			<!--<div id="div_menu" class="div_barra_menu">
				<input type="checkbox" id="bt_menu">
				<label for="bt_menu">&#9776;</label>
				<nav class="menu">
					<ul>
						<li><a href="#">Home</a></li>
						
						<li><a href="#">Serviços</a>
							<ul>
									<li><a href="#">Sites</a></li>
									<li><a href="#">Blogs</a></li>
							</ul>
						</li>
						
						<li><a href="#">Quem somos</a>
							<ul>
									<li><a href="#">Projetos</a></li>
									<li><a href="#">Trabalhos</a></li>
							</ul>
						</li>
						<li><a href="#">Contatos</a></li>
					
					</ul>
				
				</nav>
			</div>-->
		
					 
		<!--</div><!--FECHA DIV_MENU -->
	
	<!--</div>-->
	
		<!--<input type="checkbox" id="check">
		<label for="chec" id="label_check_menu">&#9776;</label>-->
		<!--<label for="check" ><i class="fas fa-bars"></i></label>-->
		
	
	<input type="checkbox" id="menu-hamburger">
	<label for="menu-hamburger">
	<div id="div_menu" class="menu">
		<span class="hamburger"></span>
	</div>
	</label>
	
	<nav  class="menu-nav">
			<ul>
					<span id="menus">
					<!--<li><a href="#">Home</a></li>
						
					<li><a href="#">Serviços</a>	</li>
						
					<li><a href="#">Quem somos</a>	</li>
						
					<li><a href="#">Contatos</a></li>-->
					</span>
			</ul>
		</nav>
	
	
	<div id="div_sections" class="setores_pagina bloco">
		
	 	<!-- APRESENTAÇÃO -->
		<section id="apresentacao" style="display:none;">
			
			<div class="quadro_textos anime_top">
				<div class="imagem_div" > <i class="fas fa-globe-americas"></i> <br> <h2> <?php echo utf8_encode("APRESENTAÇÃO"); ?></h2></div>
				<div id="FINALIDADE_SITE" >  </div>
				<p><button type="button" class="btn btn-dark readmore" alt="finalidade_site" rel="apresentacao">leia mais </button></p>
			</div>

		</section>
		
		<!--NOSSOS SERVIÇOS-->
		<section id="produtos_servicos" style="display:none;">
		
			<div class="quadro_textos anime_top">
				<div class="imagem_div" > <i class="fas fa-charging-station"></i> <h2> <?php echo utf8_encode("NOSSOS SERVIÇOS"); ?></h2></div>
				<div id="PRODUTOS_SERVICOS">  </div>
				<p><button type="button" class="btn btn-dark readmore" alt="produtos_servicos" rel="produtos_servicos">leia mais </button></p>
			</div>
		
		</section>
		
		<!--TABELA DE PREÇOS-->
		<section id="tabela_precos" style="display:none;"> 
		
			<div class="quadro_textos anime_top" style="overflow-y:auto;">
				<div class="imagem_div" > <i class="fas fa-cash-register"></i> <h2> <?php echo utf8_encode("TABELA DE PREÇOS"); ?></h2></div>
				<div id="TABELA_PRECOS" >
					<table class="table table-bordered table-hover">
						<thead class="table-dark">
						<tr align="center">
							<th scope="col">COD</th><th scope="col">PRODUTO</th><th scope="col"> <?php echo utf8_encode("DESCRIÇÃO"); ?></th><th scope="col">VALOR</th>
						</tr>
						<thead>
						<tbody id="tabela_valores"></tbody>
					</table>
				</div>
			</div>

		</section>
		
		<!--QUEM SOMOS-->
		<section id="apresentacao_pessoal" style="display:none;"> 
		
			<div class="quadro_textos anime_top">
				<div class="imagem_div" > <i class="fas fa-users"></i> <h2> <?php echo utf8_encode("QUEM SOMOS"); ?></h2></div>
				<div id="APRESENTACAO_PESSOAL">  </div>
				<p><button type="button" class="btn btn-dark readmore" alt="apresentacao_pessoal" rel="apresentacao_pessoal">leia mais </button></p>
			</div>

		</section>
		
		<!-- FALE CONOSCO -->
		<section id="fale_conosco" class="secao" style="display:none;">
			<div class="quadro_textos anime_top">
				<div class="imagem_div" > <i class="fas fa-bullhorn"></i> <h2> <?php echo utf8_encode("FALE CONOSCO"); ?></h2></div>
				<div id="FRM_FALE_CONOSCO">  </div>
			</div>

		</section>	
		
	</div>
	
	
     <!-- FOOTER: RODAPÉ DA PÁGINA: MEU JABÁ! -->
	<footer  id="rodape" class="footer mt-auto py-3" style="display:none;">
	
			<div class="container" >					  
					<center><a class="link rede_social" href="#" ><i class="fab fa-facebook"></i></a>  |  <a class="link rede_social" href="#"><i class="fab fa-instagram"></i></a>  |  <a class="link rede_social" href="#"><i class="fab fa-pinterest"></i></a></center>
					<br/>
					<center><div id="email"></div></center>
					<center><div id="dados_endereco"></div></center>
					<div class="fone_dados">
					
						<div id="dados_fone_fixo" > </div>
						<div id="dados_fone_celular"> </div>
						
					</div>
				
			</div> 
			
	</footer>
 
	<div id="" class="div_barra" style="font-size:0.6em;"> 
			<div id="" class=""> <p class="mt-5 mb-3 text-muted text-center"> <a class="link" href="https://www.lfbittencourt.com.br" target="__blank" >&copy; 3BITS - 2009 / <?php echo $ano = date("Y"); ?></a> </div>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.5.0.js"><\/script>')</script>
	<!--<script src="../../js/jquery/jquery-3.4.1.min.js"></script>
    <script src="../../sys/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   
	 
  </body>
</html>
