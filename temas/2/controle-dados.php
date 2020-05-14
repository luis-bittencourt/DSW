<?php
//include("../global/global.php");

$vAction = $_REQUEST["action"];

if( $vAction == "carrega_navbar"){
	
	/*$navbar = "<nav class='navbar navbar-expand-md navbar-inverse navbar-fixed_' style='border-radius:0px;'>
						 <div class='container_'>
							<div class='navbar-header link'>
							  <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar2' aria-expanded='true' aria-controls='navbar2'>
								<span class='sr-only'>Toggle navigation</span>
								<span class='icon-bar'></span>
								<span class='icon-bar'></span>
								<span class='icon-bar'></span>
							  </button>
							  <a id='logo_cliente' class='navbar-brand' href='#' target='_blank' alt='pagina de modelo'>  SEU LOGO </a>
							</div>
		
							<div id='navbar2' class='navbar-collapse collapse'>
								<ul class='nav navbar-nav navbar-right link'>
								  <li class=''><a href='#apresentacao'>Home</a></li>
								  <li><a href='#'>About Us</a></li>
								  <li><a href='#fale_conosco'>Contact Us</a></li>
								</ul>
								
							</div><!--/.navbar-collapse -->
						</div>
					 </nav>";*/
					 
	$vReturnData = "teste"; //$navbar;

}elseif( $vAction == "formulario_emailFaleConosco"){	
	
	$form = "<div id='formularios' style='top:0px;width:100%;border:1px solid #0000;'>
						 <form id='form_faleConosco' class='form-signin_' style=''>
							<!--<div class='' style='font-size:68px; text-align:center;'> <i class='far fa-envelope-open'></i></div>
								<h3 class='form-signin-heading'><center>Deixe sua mensagem</center></h3>-->
							
							<div class='form-group'>
								<!--<label for='email_origem'>E-mail de origem</label>-->
								<input type='email' id='email_origem' name='email_origem' class='form-control required' placeholder='Endereço de email' required>
								
							</div>
							
							<div class='form-group'>
								<!--<label for='assunto'>Assunto (subject)</label>-->
								<input type='text' id='assunto' name='assunto' class='form-control required' placeholder='Assunto da mensagem' required>
								
							</div>
							
							<div class='form-label-group'>				
								<textarea id='mensagem' name='mensagem' class='form-control required' rows='2' placeholder='Teor da mensagem'></textarea>
								
							</div>
								  
							 <center><button id='enviar' class='btn btn-primary' type='button'>ENVIAR MENSAGEM</button></center>
							 
						</form>
							  <div id='mensagens_sys' class='container'></div>
					</div>";
	
	
	$vReturnData = $form;
	
}elseif( $vAction == "envia_email_FaleConosco"){

	ini_set('display_errors', 0);
		error_reporting(E_ALL);

		$testaDados = $_REQUEST;
	
	//Verificar se foram todos preenchidos.
	$_cont=0;
	foreach ($testaDados as $vlr=>$cont){
		
			if(empty($cont)){
				
				if( $vlr != "codigo_usuario" ){
										
					echo "preencha o  campo: <b>$vlr</b>;<br />";
					$_cont++;
					
				}	
			} 
				
		}
		
		if( $_cont <> 0 ){
			
				die("[Error:] <b><font color='ff0000'>Preencha os campos descritos acima!</font></b><br />");
				
		}
		
		$arrayDados[] = $_REQUEST;
		foreach($arrayDados as $dados){
			
				$origem           = $dados["email_origem"   ];
				$destino           = "loja@alinhavosebordados";
				$assunto          = $dados["assunto"             ];
				$mensagem    = $dados["mensagem"       ];
						
		}
			
			$from = $origem;

			$to = $destino;

			$subject = $assunto;

			$message = $mensagem;

			$headers = "De:". $from;

			$enviar = mail($to, $subject, $message, $headers);
			
			$resultado = $enviar;
			if($resultado == false){
				
				die("[ Error: ] Erro ao enviar a mensagem.");
				
			}else{
				
				$vReturnData = "[$resultado] Mensagem enviada com sucesso";
				
			}

	
}elseif( $vAction == "pega_atributo_site"){
	$atributo  = strtoupper($_REQUEST["atributo"]);
	$arquivo = strtoupper($_REQUEST["arquivo"]);
	
	//$dir =basename(__DIR__);
	
	$dir_atual=getcwd();
	$caminho_arquivo = "$dir_atual/$arquivo";
	
	$opendir=opendir($dir_atual);
	
	 if(is_file($caminho_arquivo)==false){
		 
		 $vReturnData = "ARQUIVO NAO LOCALIZADO.";
		 
	 }else{
		 
		 //abrimos o arquivo de configuração 
		  $fp = fopen($caminho_arquivo,'r');
		  $texto = fread($fp, filesize($caminho_arquivo));
		  $texto = utf8_encode(nl2br($texto));
		  
		  $inicio = strpos($texto,"<$atributo>");
		  $fim     = strpos($texto, "</$atributo>", $inicio);
		  $vReturnData = str_replace("<$atributo>","",substr($texto, $inicio, $fim - $inicio) );
		  
		  
	 }
	
}elseif( $vAction == "recupera_secoes_AUXILIARTXT"){
	$nome_arquivo  = $_REQUEST["nome_arquivo"];
	
	$dir_atual=getcwd();
	$opendir=opendir($dir_atual);
	
	 if(is_file($dir_atual."/".$nome_arquivo)==false){
		 
		 $vReturnData = "[ Error: ] ARQUIVO $nome_arquivo NAO LOCALIZADO.";
		 
	 }else{
		 
		 //abrimos o arquivo de configuração 
		  $fp = fopen($dir_atual."/".$nome_arquivo,'r');
		  
		  $i = 0;
		  while($linha=fgets($fp)){
				
				$array[] = substr($linha,0,-2);
				 
				 $i++;
				
			}
			fclose($fp);
			
			$vCont = 1;
			$vSecs = "";
			
			rsort($array); //ordena o array (decrescente)!
			foreach($array as $aSecs) {
				
					$vSecs .= " 'p" . $vCont++ . "' : '$aSecs', ";
					
			} $vSecs = substr($vSecs, 0, -2);
			
			$vData = "({
								'CHECKS' : { $vSecs }
							})";
			
			  $vReturnData = $vData;
		 
	 }

}elseif( $vAction == "carrega_dados_PRODUTOSTXT"){
	
	$nome_arquivo  = $_REQUEST["nome_arquivo"];
	
	$dir_atual=getcwd();
	$opendir=opendir($dir_atual);
	
	 if(is_file($dir_atual."/".$nome_arquivo)==false){
		 
		 $vReturnData = "[ Error: ]ARQUIVO $nome_arquivo NAO LOCALIZADO.";
		 
	 }else{
		 
		  //abrimos o arquivo de configuração 
		  $fp = fopen($dir_atual."/".$nome_arquivo,'r');
		  
		  $i = 0;
		  $table = "";
		  while($linha = fgets($fp)){
				
				//$array[] = substr($linha,0,-2);
				 
				 //$i++;
				 
				 $table .= $linha;
				
			}
			fclose($fp);
		 	 
	 }
	 
	  $vReturnData = utf8_encode($table);
	 
}elseif( $vAction == "carrega_dados_CONFTXT"){
	
	$nome_arquivo  = $_REQUEST["nome_arquivo"];
	
	$dir_atual=getcwd();
	$opendir=opendir($dir_atual);
	
	 if(is_file($dir_atual."/".$nome_arquivo)==false){
		 
		 $vReturnData = "ARQUIVO NAO LOCALIZADO.";
		 
	 }else{
		 
		 //abrimos o arquivo de configuração 
		  $fp = fopen($dir_atual."/".$nome_arquivo,'r');
		  $texto = fread($fp, filesize($dir_atual."/".$nome_arquivo));
		  $texto = utf8_encode(nl2br($texto));
		  
		  //CÓDIGO
		  $inicio = strpos($texto,"<CODIGO>");
		  $fim     = strpos($texto, "</CODIGO>", $inicio);
		  $vCodigo =substr($texto, $inicio, $fim - $inicio);
		  $vCodigo = str_replace("<CODIGO>","",$vCodigo);
		  
		  //CÓDIGO DO PROJETO
		  $inicio = strpos($texto,"<CODIGO_PROJETO>");
		  $fim     = strpos($texto, "</CODIGO_PROJETO>", $inicio);
		  $vCodigo_projeto =substr($texto, $inicio, $fim - $inicio);
		  $vCodigo_projeto = str_replace("<CODIGO_PROJETO>","",$vCodigo_projeto);
		  
		   //TITULO DO PROJETO
		  $inicio = strpos($texto,"<TITULO>");
		  $fim     = strpos($texto, "</TITULO>", $inicio);
		  $vTitulo_projeto =substr($texto, $inicio, $fim - $inicio);
		  $vTitulo_projeto = str_replace("<TITULO>","",$vTitulo_projeto);
		  
		   //SUBTITULO DO PROJETO
		  $inicio = strpos($texto,"<SUBTITULO>");
		  $fim     = strpos($texto, "</SUBTITULO>", $inicio);
		  $vSubitulo_projeto =substr($texto, $inicio, $fim - $inicio);
		  $vSubitulo_projeto = str_replace("<SUBTITULO>","",$vSubitulo_projeto);
		  
		   //APRESENTACAO_PESSOAL
		  $inicio = strpos($texto,"<APRESENTACAO_PESSOAL>");
		  $fim     = strpos($texto, "</APRESENTACAO_PESSOAL>", $inicio);
		  $vApresentacao_pessoal =substr($texto, $inicio, $fim - $inicio);
		  $vApresentacao_pessoal = str_replace("<APRESENTACAO_PESSOAL>","",$vApresentacao_pessoal);
		  
		   //FINALIDADE_SITE
		  $inicio = strpos($texto,"<FINALIDADE_SITE>");
		  $fim     = strpos($texto, "</FINALIDADE_SITE>", $inicio);
		  $vFinalidade_site =substr($texto, $inicio, $fim - $inicio);
		  $vFinalidade_site = str_replace("<FINALIDADE_SITE>","",$vFinalidade_site);
		  
		   //PRODUTOS_SERVICOS
		  $inicio = strpos($texto,"<PRODUTOS_SERVICOS>");
		  $fim     = strpos($texto, "</PRODUTOS_SERVICOS>", $inicio);
		  $vProdutos =substr($texto, $inicio, $fim - $inicio);
		  $vProdutos = str_replace("<PRODUTOS_SERVICOS>","",$vProdutos);
		  
		   //PALAVRAS_CHAVE
		  $inicio = strpos($texto,"<PALAVRAS_CHAVE>");
		  $fim     = strpos($texto, "</PALAVRAS_CHAVE>", $inicio);
		  $vPalavra = substr($texto, $inicio, $fim - $inicio);
		  $vPalavra = str_replace("<PALAVRAS_CHAVE>","",$vPalavra);
		  
		  //FONE_FIXO
		  $inicio = strpos($texto,"<FONE_FIXO>");
		  $fim     = strpos($texto, "</FONE_FIXO>", $inicio);
		  $vFone_fixo =substr($texto, $inicio, $fim - $inicio);
		  $vFone_fixo = str_replace("<FONE_FIXO>","",$vFone_fixo);
		  
		  //FONE_CELULAR
		  $inicio = strpos($texto,"<FONE_CELULAR>");
		  $fim     = strpos($texto, "</FONE_CELULAR>", $inicio);
		  $vFone_celular =substr($texto, $inicio, $fim - $inicio);
		  $vFone_celular = str_replace("<FONE_CELULAR>","",$vFone_celular);
		  
		   //ENDERECO_COMERCIAL
		  $inicio = strpos($texto,"<ENDERECO_COMERCIAL>");
		  $fim     = strpos($texto, "</ENDERECO_COMERCIAL>", $inicio);
		  $vEndereco_comercial =substr($texto, $inicio, $fim - $inicio);
		  $vEndereco_comercial = str_replace("<ENDERECO_COMERCIAL>","",$vEndereco_comercial);
		  
		   //EMAIL
		  $inicio = strpos($texto,"<EMAIL>");
		  $fim     = strpos($texto, "</EMAIL>", $inicio);
		  $vEmail =substr($texto, $inicio, $fim - $inicio);
		  $vEmail = str_replace("<EMAIL>","",$vEmail);
		  
		   //FACEBOOK
		  $inicio = strpos($texto,"<FACEBOOK>");
		  $fim     = strpos($texto, "</FACEBOOK>", $inicio);
		  $vFacebook =substr($texto, $inicio, $fim - $inicio);
		  $vFacebook = str_replace("<FACEBOOK>","",$vFacebook);
		  
		   //INSTAGRAM
		  $inicio = strpos($texto,"<INSTAGRAM>");
		  $fim     = strpos($texto, "</INSTAGRAM>", $inicio);
		  $vInstagram =substr($texto, $inicio, $fim - $inicio);
		  $vInstagram = str_replace("<INSTAGRAM>","",$vInstagram);
		  
		  //TWITTER
		  $inicio = strpos($texto,"<TWITTER>");
		  $fim     = strpos($texto, "</TWITTER>", $inicio);
		  $vTwitter =substr($texto, $inicio, $fim - $inicio);
		  $vTwitter = str_replace("<TWITTER>","",$vTwitter);
		  
		   //LINKEDIN
		  $inicio = strpos($texto,"<LINKEDIN>");
		  $fim     = strpos($texto, "</LINKEDIN>", $inicio);
		  $vLinkedin =substr($texto, $inicio, $fim - $inicio);
		  $vLinkedin = str_replace("<LINKEDIN>","",$vLinkedin);
		  
		  //YOUTUBE
		  $inicio = strpos($texto,"<YOUTUBE>");
		  $fim     = strpos($texto, "</YOUTUBE>", $inicio);
		  $vYoutube =substr($texto, $inicio, $fim - $inicio);
		  $vYoutube = str_replace("<YOUTUBE>","",$vYoutube);
		  
		   //IMAGEM_BANNER
		  $inicio = strpos($texto,"<IMAGEM_BANNER>");
		  $fim     = strpos($texto, "</IMAGEM_BANNER>", $inicio);
		  $vImagem_banner =substr($texto, $inicio, $fim - $inicio);
		  $vImagem_banner = str_replace("<IMAGEM_BANNER>","",$vImagem_banner);
		  
		   //TITULO_PAGINA
		  $inicio = strpos($texto,"<TITULO_PAGINA>");
		  $fim     = strpos($texto, "</TITULO_PAGINA>", $inicio);
		  $vTitulo_pagina =substr($texto, $inicio, $fim - $inicio);
		  $vTitulo_pagina = str_replace("<TITULO_PAGINA>","",$vTitulo_pagina);
		  
		    //POSSUE_DOMINIO
		  $inicio = strpos($texto,"<POSSUE_DOMINIO>");
		  $fim     = strpos($texto, "</POSSUE_DOMINIO>", $inicio);
		  $vPossue_dominio =substr($texto, $inicio, $fim - $inicio);
		  $vPossue_dominio = str_replace("<POSSUE_DOMINIO>","",$vPossue_dominio);
		  
		  //DOMINIO
		  $inicio = strpos($texto,"<DOMINIO>");
		  $fim     = strpos($texto, "</DOMINIO>", $inicio);
		  $vDominio =substr($texto, $inicio, $fim - $inicio);
		  $vDominio = str_replace("<DOMINIO>","",$vDominio);
		  
		   //COR_PRIMARIA
		  $inicio = strpos($texto,"<COR_PRIMARIA>");
		  $fim     = strpos($texto, "</COR_PRIMARIA>", $inicio);
		  $vCor_primaria =substr($texto, $inicio, $fim - $inicio);
		  $vCor_primaria = str_replace("<COR_PRIMARIA>","",$vCor_primaria);
		  
		   //COR_SECUNDARIA
		  $inicio = strpos($texto,"<COR_SECUNDARIA>");
		  $fim     = strpos($texto, "</COR_SECUNDARIA>", $inicio);
		  $vCor_secundaria =substr($texto, $inicio, $fim - $inicio);
		  $vCor_secundaria = str_replace("<COR_SECUNDARIA>","",$vCor_secundaria);
		  
		  $Data = "({'CODIGO' :'".$vCodigo."',
								'CODIGO_PROJETO'   :'".$vCodigo_projeto."',
								'TITULO'   :'".$vTitulo_projeto."',
								'SUBTITULO'    :'".$vSubitulo_projeto."',
								'APRESENTACAO_PESSOAL'   :'".$vApresentacao_pessoal."',
								'FINALIDADE_SITE'   :'".$vFinalidade_site."',
								'PRODUTOS_SERVICOS'   :'".$vProdutos."',
								'PALAVRAS_CHAVE'   :'".$vPalavra."',
								'FONE_FIXO'   :'".$vFone_fixo."',
								'FONE_CELULAR'   :'".$vFone_celular."',
								'ENDERECO_COMERCIAL'   :'".$vEndereco_comercial."',
								'EMAIL'   :'".$vEmail."',
								'FACEBOOK'   :'".$vFacebook."',
								'INSTAGRAM'   :'".$vInstagram."',
								'TWITTER'   :'".$vTwitter."',
								'LINKEDIN'   :'".$vLinkedin."',
								'YOUTUBE'   :'".$vYoutube."',
								'IMAGEM_BANNER'   :'".$vImagem_banner."',
								'TITULO_PAGINA'   :'".$vTitulo_pagina."',
								'POSSUE_DOMINIO'   :'".$vPossue_dominio."',
								'DOMINIO'   :'".$vDominio."',
								'COR_PRIMARIA'   :'".$vCor_primaria."',
								'COR_SECUNDARIA'   :'".$vCor_secundaria."'
																					
							})";
	 
	 }
	 
	 $vReturnData = $Data;
	 
	 
}elseif( $vAction == "maximiza_div"){
	
	$nome_div  = $_REQUEST["nome_div"];
	$dada_div  = $_REQUEST["data_div"];

	if( $nome_div == "apresentacao"){
		
		$img = " <i class='fas fa-globe-americas'></i>";
		$label = "APRESENTAÇÃO";
		
	}
	if( $nome_div == "produtos_servicos"){
		
		$img = " <i class='fas fa-charging-station'></i>";
		$label = "NOSSOS SERVIÇOS";
		
	}
	if( $nome_div == "apresentacao_pessoal"){
		
		$img = " <i class='fas fa-users'></i>";
		$label = "QUEM SOMOS";
		
	}
	
	$max = "<section id='$nome_div' style='display:block;'>
			
						<div class='quadro_textos_max'>
							<div class='imagem_div' > $img <br> <h2> $label </h2></div>
							<div id='DADOS_SITE' >  </div>
							<p><button type='button' class='btn btn-dark voltar' alt='finalidade_site' rel='apresentacao'>voltar</button></p>
						</div>

				</section>";
	
	 $vReturnData = $max;
	
}

 print $vReturnData;

?>