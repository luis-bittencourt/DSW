$(document).ready(function(){
	
	  /*$("html, body").animate({
				  
				  scrollTop: 0
				  
			  }, 300);
	*/
	position_page("TOP");
	
	/*$("#div_menu").click(function(){
		
		maskOnTop("TESTE");
		
	});*/
	
	
/* ***********************************************************************************************************

                    FUN합ES GERAIS

*************************************************************************************************************/
		
	carrega_template();
	function carrega_template(){
		
		//atributo_site("CODIGO_PROJETO","CONF.txt", "NOME_DIV");
		recupera_secoes_cliente("AUXILIAR.txt");
		busca_dados_CONFTXT("CONF.txt");
		exibe_formEmail();
		
	};
	
	function recupera_secoes_cliente(nome_arquivo){
		// ler arquivo AUXILIAR.txt e trazer a relacao de secoes escolhidas
		
		$.get('controle-dados.php?action=recupera_secoes_AUXILIARTXT&nome_arquivo='+nome_arquivo,
			function(data){
				
				if( data != ""){
					
					var dados = eval(data);
					for(campo in dados){
						
						//PEGA AS LINHAS CONTENDO OS DADOS
						$.each(dados.CHECKS, function(index, value) {
							
							/*FIXME!!!!*/
							
							var str = value;
							 var cod_secao = str.substring(11,10);
							
							if( cod_secao == 1 ){ $("#div_cabecalho").css("display","block");}
							
							else if( cod_secao == 2 ){ $("#rodape").css("display","block");}
							
							else if( cod_secao == 3 ){ 
							
								$("#apresentacao").css("display","block");
								$("#menus").append("<li><a href='#apresentacao'>Apresentacao </a></li>");
								
							}
							
							else if( cod_secao == 4 ){ 
							
								$("#apresentacao_pessoal").css("display","block");
								$("#menus").append("<li><a href='#apresentacao_pessoal'>Quem somos </a></li>");
								
							}
							
							else if( cod_secao == 5 ){ 
							
								$("#produtos_servicos").css("display","block");
								$("#menus").append("<li><a href='#produtos_servicos'> Nossos produtos </a></li>");
							
							}
							
							else if( cod_secao == 6 ){ 
							
								$("#fale_conosco").css("display","block");
								$("#menus").append("<li><a href='#fale_conosco'> Fale conosco</a></li>");
								
							}
							
							else if( cod_secao == 7 ){ 
							
								$("#tabela_precos").css("display","block");
								$("#menus").append("<li><a href='#tabela_precos'> Nossos precos</a></li>");
								preenche_tabela_produtos("PRODUTOS.txt");
							}
							
						});
							
					}
					
				}else{ alert("ARQUIVO DE CONTROLE DAS SECOES NAO LOCALIZADO."); }
				
			});
		
	};
	
		
	//BUSCA E PREENCHE COM OS DADOS A SEREM EXIBIDOS PELO SITE
	function busca_dados_CONFTXT(nome_arquivo){
		
		//var codigo_projeto = $("#projeto").val();		
		$.get('controle-dados.php?action=carrega_dados_CONFTXT&nome_arquivo='+nome_arquivo,
			function(data){
			
				if(data != ""){
							var dados = eval(data);			
							for(campo in dados){
																							
										$("#"+ campo).html( dados[campo] );
										$("input[name='" + campo + "' ]").val( dados[campo] );
										
										//if("#"+FONE_CELULAR == ""){ $("#FONE_CELULAR").html(dados.FONE_FIXO); }
										
										$("#logo_cliente").html( dados.TITULO_PAGINA);
										$("meta[name='keywords']").html( dados.PALAVRAS_CHAVE);		
										$("#palavras_chave").html( dados.PALAVRAS_CHAVE);
										
										$("#email").html( dados.EMAIL);
										$("#dados_endereco").html( dados.ENDERECO_COMERCIAL);
										$("#dados_fone_fixo").html( dados.FONE_FIXO);
										$("#dados_fone_celular").html( dados.FONE_CELULAR);

										
										$("#div_cabecalho").css("background-image","url("+ dados.IMAGEM_BANNER +")");
										$(".navbar").css("background-color", dados.COR_PRIMARIA);
										$(".div_barra").css("background-color", dados.COR_PRIMARIA);
										$(".footer").css("background-color", dados.COR_PRIMARIA);
										$(".imagem_div i").css("color", dados.COR_PRIMARIA);
										
										$("body").css("background-color", dados.COR_SECUNDARIA);
										
							}
							
				}
													
			});
		
	};
	
	$(".readmore").click( function(){
		
		var section_title = $(this).attr("rel");
		var div_dados = $(this).attr("alt");
		     div_dados = div_dados.toUpperCase();
		
			$.get('controle-dados.php?action=maximiza_div&nome_div='+section_title+'&data_div='+div_dados,
				function(data){
					
					$("#div_sections").html(data);
					atributo_site(div_dados,"CONF.txt", "DADOS_SITE");
					busca_dados_CONFTXT("CONF.txt");
					
					$(".voltar").click(recarrega_pagina);
					
					
					
				});
		
		
	});
	
	
	function recarrega_pagina(){
		
			var destino='./';
			$(window.document.location).attr('href',destino);
				
	};
	
	function preenche_tabela_produtos(nome_arquivo){
		
		$.get('controle-dados.php?action=carrega_dados_PRODUTOSTXT&nome_arquivo='+nome_arquivo,
			function(data){
				
								if(data != "" ){
											
										$("#tabela_valores").html(data);
										
								}
						
				});
				
				
	};

	
	//NAVBAR - MENU DE NAVEGACAO
	//carrega_navbar();
	/*function carrega_navbar(){
		//var id = $("#user_logado").attr("alt");
		$.get('controle-dados.php?action=carrega_navbar&id=0',
			function(data){
				
				$("#div_menu").html(data);
												
			});
	};*/
	
		
	//CENTRALIZA A JANELA PRINCIPAL
	centraliza(".centralizar");
	function centraliza(div){
		
		var left = ($(window).width() /2) - ( $(div).width() / 2 ); //margem esquerda
        var top = ($(window).height() / 2) - ( $(div).height() / 2 ); //calcula margem superior
		//var alturaMenu = $("nav").innerHeight();  //verifica a altura do menu
		
		var topDiv = (top * 2.3); //soma a altura do menu com a margem superior indicada
		//var topDiv = (top - alturaMenu * 2); //soma a altura do menu com a margem superior indicada
		//var topDiv = (top - alturaMenu) + "15vh"; //soma a altura do menu com a margem superior indicada
		
		//console.log(topDiv);
		
		 $(div).css({'top':topDiv,'left':left});
		
	};
	
	
	(function(){
		
		var target = $(".anime_left,  .anime_top"),
	                  animationClass = 'anime-start',
				      offset = $(window).height() * 3/4;
		function animeScroll(){
		
				var documentTop = $(document).scrollTop();
				
				target.each(function(){
					
					var itemTop = $(this).offset().top;
					
					if( documentTop > itemTop - offset ){
						
						$(this).addClass(animationClass);
						
					}else{
						
						$(this).removeClass(animationClass);
						
					}
					
				});
			   
		  };
	
		animeScroll();
		 $(document).scroll(function(){
			 
			 animeScroll();
			 
		 });
	
	}());
	
/*
		BOTAO PARA SUBIR AO INICIO DA PAGINA
		
	******************************************************************/
	$("#div_sobe_pagina").html("<div class='box' title='subir ao inicio da pagina.'>	<span><center> <i class='fas fa-angle-up'></i></center></span>	</div>");
	$(".box").hide();
	$(window).scroll(function(){
		
		if( $(this).scrollTop() > 5 ){
			
			$(".box").fadeIn();
			
		}else{
			
			$(".box").fadeOut();
			
		}
		
	});
	
	$(".box").click(function(){
							
		//$(window).scrollTop( 0 );
		  $("html, body").animate({
				  
				  scrollTop: 0
				  
			  }, 500);
		
	});
	
	$("li a" ).click(function(e){
		e.preventDefault();
		
		var id = $(this).attr("href"),
		      targetOffSet = $(id).offset().top,
			  menuHeight = $("#div_barra").innerHeight();
			  
			 // alert(id);
			  $("html, body").animate({
				  
				  scrollTop: targetOffSet - menuHeight
				  
			  }, 500);
		
			//console.log(id);
			//$(window).scrollTop( valor );
	});
	
	/*$(window).scroll(function() {
		 var  menuHeight = $("nav").innerHeight();
		if ($(window).scrollTop() > menuHeight) {
			
		  $(".navbar-modelo").removeClass("navbar-light navbar-fixed");
		  $(".navbar-modelo").addClass("navbar-dark cor_menu");
		  $(".navbar-page").css("display","none");
		  //$(".navbar").css("background-color:#FF6347");
		  
		} else {
			
		  $(".navbar-modelo").removeClass("navbar-dark cor_menu");
		  $(".navbar-modelo").addClass("navbar-light");
		    $(".navbar-page").css("display","block");
		}
	
  });*/
	
/* *********************************************************************************************************

                FURMUARIO DE E-MAIL

***********************************************************************************************************/
	
	//exibe_formEmail();
	function exibe_formEmail(){
		
		$.get('controle-dados.php?action=formulario_emailFaleConosco',
						function(data){ 
							
							$("#FRM_FALE_CONOSCO").html(data);
							$("#enviar").click(enviar_mensagem);
							
							
						});
		
	};
	
	function enviar_mensagem(){
		
		var dados = $("#form_faleConosco").serialize();
		
		    var origem         = $("#origem"  ).val();
			/*var destino        = $("#destino"  ).val();*/
			var assunto       = $("#assunto"  ).val();
			var mensagem = $("#mensagem" ).val();
			
		if( origem == "" || assunto == "" || mensagem == ""){
						 
						 $('.required').css("border-color","#FF6347");
						 var atention = "PREENCHA TODOS OS CAMPOS DESTACADOS.";
						 $("#mensagens_sys").html("<div class='alert alert-danger' role='alert'>"+atention+" </div>");
						 
							 
		}else{
				$.get('controle-dados.php?action=envia_email_FaleConosco&'+dados,
								function(data){
									$("#mensagens_sys").html(data);
										var str = data;
										var n = str.indexOf("Error:");
										if (n > -1){
											
											//SE RETORNAR A MENSAGEM DE ERRO DA PDOException, CAI AQUI:
											$("#mensagens_sys").html("<div class='alert alert-danger' role='alert'>"+data+" </div>");
																				
										}else{
											
											//SE PASSAR:
											$('.required').css("border-color","#CFCFCF");
											$("#mensagens_sys").html("");
											$("#mensagens_sys").html("<div class='alert alert-success' role='alert'>"+data+" </div>");
																				
										}
									
								});
								
		}
		
	};
	
	
	
/* ****************************************************************************************************************************************

                FUN합ES PARA A ESCOLHA DAS SE합ES

*******************************************************************************************************************************************/





/* ****************************************************************************************************************************************

                FUN합ES DO SUB-MENU: CONTATOS

*******************************************************************************************************************************************/	




/* ****************************************************************************************************************************************

                FUN합ES DO SUB-MENU: ENDERE?S

*******************************************************************************************************************************************/	





/* ****************************************************************************************************************************************

                FUN합ES DO SUB-MENU: PESSOAS

*******************************************************************************************************************************************/	

	
		
	
	
	
/* ******************************************************************************

                FUN합ES DO MENU DROPDOWN: GER - MENU GERENCIAL

********************************************************************************/



/* ******************************************************************************

                FUNCOES DO MAPA DE LOCALIZACAO

********************************************************************************/
		/*(function(){		
			
			
			initialize();
			function initialize() {
				var lat = -29.534505;				// Porto Alegre -30.02;
				var lng = -53.390607;				// Porto Alegre -51.22;
			
				var map;
				
				var myOptions = {
					zoom: 6,
					center: new google.maps.LatLng(lat, lng),
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					streetViewControl: true,
					mapTypeControlOptions: {
						style: google.maps.MapTypeControlStyle.DROPDOWN_MENU  
					}
				}

				// Carrega mapa	
				var map = new google.maps.Map(document.getElementById("mapa_show"), myOptions);
			}
	
		}());*/
		
/* *****************************************************************************************************************
                                                   FUN합ES GERAIS 
********************************************************************************************************************/
	function carregando(container) {
		$(container).html('<center><img src="../css/img/loading.gif" id="carregando" /></center>');
	};
	
	//FUNCAO PARA POSICIONAR A PAGINA EM UM LOCAL ESPECIFICO:
	//recebe TOP para ir ao topo, ou o nome de uma Div onde se seseja que a pagina se posicione.
	function position_page(position){
		
		if( position == "TOP"){
			
			  var targetOffSet = 0;
			  
		}else{
			
			 var targetOffSet = $(position).offset().top;
			
		}
			  
		 $("html, body").animate({
				  
				  scrollTop: targetOffSet
				  
			  }, 300);
			
	};
	
	function maskOnTop (data) {
		$('.mask').remove();
	
		$('body').after("<div id='mask' class='mask'> </div>");
		$('body').after("<div id='mask-container' class='mask'> </div>");
		$('#mask-container').html(data);
		$('#mask-container').css('border-radius','5px');
		
		var left = ($(window).width() /2) - ( $("#mask-container").width() / 2 );
        var top = ($(window).height() / 2) - ( $("#mask-container").height() / 2 );
     
        $("#mask-container").css({'top':top,'left':left});
		
		$('#mask').click(maskClose);
		
	};
	
	var maskClose = function() {
			$('.mask').remove();
	};
	
	
	/*
	   BUSCA UM ATRIBUTO INFORMADO:
	   Recebe: 1) atributo -> nome do atributo;
	                   2) nome_arquivo -> nome do arquivo TXT, onde esta o atributo; e
	                   3) div_show, onde o respectivo atributo vai ser inserido.
	************************************************************************************* */
	function atributo_site(atributo,nome_arquivo, div_show){
		
		$.get('controle-dados.php?action=pega_atributo_site&atributo='+atributo+'&arquivo='+nome_arquivo,
			function(data){
				
				$("#"+div_show).html(data);
		
			});
		
	};
	
	
	
});