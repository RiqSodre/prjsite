<?php
	if($_SERVER["HTTPS"] != "on")
	{
	    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
	    exit();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>MG Service</title>
	<meta name="author" content="Essentials Technology">
	<meta name="robots" content="index, follow"> 
	<meta name="description" content="MG Service - Empresa de tercerização de serviços, como: Portaria, Recepção, Limpeza, Jardinagem e Zeladoria.">
	<meta name="keywords" content="Grupo MG Service, Segurança, Tercerização, Portaria, Recepção, Limpeza, Jardinagem, Zeladoria">
	<meta name="description" content="A MG Service é uma empresa que tem como principal atividade a terceirização de serviços com um atendimento personalizado, buscando sempre a satisfação dos clientes e oferecendo profissionais capacitados nas áreas de: Portaria, Recepção, Limpeza, Jardinagem e Zeladoria.">
	<meta name="robots" content="noarchive">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
  	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/vendors/plugins.css">
	<link rel="stylesheet" href="css/vendors/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="css/vendors/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="shortcut icon" href="images/favicon.ico">
	<script src="js/vendors/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/vendors/jquery/jquery.mask.min.js"></script>
	<script src="js/vendors/jquery/jquery.validate.min.js"></script>
</head>
<body>
	<header id="top" class="container"> 	
		<div class="content">
			<div class="logo-container">
				<div class="logo-container__logo">
					<a href="http://grupomgservice.com.br/">
						<img src="images/logo.png" class="img-responsive" alt="#">
					</a>
				</div>
			</div>
		</div>
	</header>
	<div id="navegacao">
		<div class="container">
			<div class="content">
				<div id="navegacao__content">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
						   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
						        <span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						    </button>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						    <ul class="nav navbar-nav">
						        <li class="active"><a href="#top">Inicio</a></li>
						        <li><a href="#about">Sobre Nós</a></li>
						        <li><a href="#servicos">Serviços</a></li>
						        <li><a href="#contato">Contato</a></li>
						        <li><a href="#footer">Localização</a></li>
						    </ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div id="slider" class="owl-carousel owl-theme">	
		<div class="item">
		    <img src="images/bgindex.jpg" alt="MG SERVICE">
		</div>
	</div>
	<div class="faixa"></div>
	<section class="container" id="about">
		<header class="content" id="title">
			<h2 class="heading">
				<span></span>
				Sobre Nós
			</h2>
		</header>
		<div class="aboutus">
			<div class="subtitle" id="subtitle">
				<h2 id="who">
					Quem
					<div class="max" id="max">
						Somos
					</div>
				</h2>
			</div>
			<div class="aboutus__itens" id="aboutus__itens">
				<div class="presentation">
					<i class="fa fa-users fa-3x" aria-hidden="true"></i>
					<br>
					<b>NOSSA EMPRESA</b>
					<br>
					<p>A MG Service é uma empresa que tem como principal atividade a terceirização de serviços com um atendimento personalizado, buscando sempre a satisfação dos clientes.
					</p>
					<p>Disponibilizamos equipes responsáveis e capacitadas para melhor atender a sua necessidade. Além de  trabalharmos com ética e integridade, temos o compromisso com a excelência de nossos serviços.
					</p>
				</div>
				<div class="about__item">
					<i class="fa fa-handshake-o fa-3x" aria-hidden="true"></i>
					<br>
					<b>MISSÃO</b>
					<br>
					<p>Garantir a prestação de serviço com qualidade, ética e responsabilidade, atendendo aos requisitos contratuais, visando sempre a superação da expectativa de nossos clientes e acionistas.</p>
				</div>
				<div class="about__item">
					<i class="fa fa-unlock-alt fa-3x" aria-hidden="true"></i>
					<br>
					<b>VALORES</b>
					<br>
					<ul>
						<li>Autonomia - ser responsável nas atitudes.</li>
						<li>Credibilidade - refletir confiança no atendimento.</li>
						<li>Ética - praticar ações claras e justas.</li>
						<li>Inovação - buscar soluções criativas e viáveis nas nossas ações.</li>
						<li>Trabalho em equipe - estar comprometido com o cliente, com projetos e ações da organização.</li>
						<li>Responsabilidade social - contribuir para o desenvolvimento da sociedade e do meio ambiente.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="qualities">
			<div class="subtitle">
				<h2>
					Nosso Diferencial
				</h2>
			</div>
			<div class="qualities__item">
				<h2>
					QUALIDADE
				</h2>
				<div class="item">
					<div class="item__ico">
						<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
					</div>
					<br>
					<p>Trabalhamos com os mais altos padrões de qualidade. Acreditamos que este é um dos fatores decisivos na hora de diferenciar um trabalho bem feito.</p>
				</div>
			</div>
			<div class="qualities__item">
				<h2>
					SEGURANÇA
				</h2>
				<div class="item">
					<div class="item__ico">
						<i class="fa fa-shield fa-2x" aria-hidden="true"></i>
					</div>
					<br>
					<p>A MG Service nasceu no ramo da segurança, por isso esse é um dos nossos pontos fortes. Contamos com um rigoroso processo de seleção e treinamento. Nossos profissionais estão preparados para manter a segurança e o sigilo no local de trabalho.</p>
				</div>
			</div>
			<div class="qualities__item">
				<h2>
					PREÇO JUSTO
				</h2>
				<div class="item">
					<div class="item__ico">
						<i class="fa fa-money fa-2x" aria-hidden="true"></i>
					</div>
					<br>
					<p>Sabemos que na hora de contratar uma prestadora de serviços, qualidade não é o unico fator a ser avaliado, por isso a MG Service busca o Preço Justo. Nosso objetivo é a total satisfação do cliente e a construção de uma parceria de negócios duradoura.</p>
				</div>
			</div>
		</div>
	</section>
		<div class="faixa"></div>
	<section class="container" id="servicos">
		<header class="content" id="title">
			<h2 class="heading">
				<span></span>
				Nossos Serviços
			</h2>
		</header>
		<div class="servicos__itens">
			<div class="servico__item" id="pt">
				<h1>PORTARIA</h1>
				<div class="faixa"></div>
				<p>O porteiro tem como função recepcionar os moradores, visitantes, funcionários e prestadores de serviços. Os porteiros são profissionais de extrema confiança, escolhidos por meio de um processo seletivo rigoroso. Nossos profissionais passam por um treinamento qualificado para suprir as necessidades de cada cliente, com supervisionamento cauteloso e constante.
				</p>
				<img id="img" src="images/pt.png">
			</div>
			<div class="servico__item" id="rp">
				<h1>RECEPÇÃO</h1>
				<div class="faixa"></div>
				<p>A recepcionista é a profissional responsável por atuar com o atendimento ao publico. Atender e filtrar ligações, anotar recados, receber e orientar visitas, arquivar documentos, esclarecer duvidas, são algumas das funções exercidas. Com um enfoque na agilidade e praticidade, nossas recepcionistas buscam a satisfação das pessoas com a qualidade de atendimento necessária, além de serem profissionais altamente qualificadas, com conhecimentos em informática, boa dicção e experiência na área.
				</p>
				<img id="img" id="img" src="images/rp.png">
			</div>
			<div class="servico__item" id="lp">
				<h1>LIMPEZA</h1>
				<div class="faixa"></div>
				<p>O profissional da limpeza cuida da higienização de todos os ambientes do local de trabalho, garantindo sempre uma sensação de bem-estar e segurança. A MG SERVICE trabalha com profissionais capacitados, educados, e com exelente comprometimento com a limpeza, com a organização e com a satisfação do cliente, além de equipamentos modernos e produtos de qualidade. Nós cuidamos do seu ambiente, para que você se preocupe somente com o seu negócio.
				</p>
				<img id="img" id="img" src="images/lp.png">
			</div>
			<div class="servico__item" id="jd">
				<h1>JARDINAGEM</h1>
				<div class="faixa"></div>
				<p>A função exercida pelo jardineiro é de preservar todas as áreas verdes de sua empresa ou condomínio. Os serviços de manutenção de jardins, levam em conta a periodicidade e necessidades peculiares de cada caso, também atuamos para satisfazer as modificações desejadas pelo cliente. As tarefas são realizadas por profissionais experientes e que utilizam de todas as ferramentas necessárias. A MG SERVICE garante um serviço de alta qualidade e que, com asseveração, irá transfigurar o recinto de sua empresa ou condomínio.
				</p>
				<img id="img" id="img" src="images/jd.png">
			</div>
			<div class="servico__item" id="zd">
				<h1>ZELADORIA</h1>
				<div class="faixa"></div>
				<p>O profissional da zeladoria é bastante solicitado por aqueles que buscam por um profissional de alto nível com ótimo custo-benefício. A terceirização de um zelador assegura a presença de alguém com responsabilidade para atuar com perfeição em diversas vertentes. Além de sempre zelar pela segurança do seu empreendimento, o zelador é um profissional capaz de acatar e controlar a circulação de pessoas e veículos, receber objetos, mercadorias, matérias e equipamentos, e de realizar pequenos reparos.
				</p>
				<img id="img" src="images/zd.png">
			</div>
		</div>
	</section>
			<div class="faixa"></div>
	<section class="container" id="contato" >
		<header class="content" id="title">
			<h2 class="heading">
				<span></span>
				Contato
			</h2>
		</header>
		<div class="formulario__ico">
			<label>
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				&nbsp;Formulário:
			</label>
		</div>
		<div class="content" id="contato__items">
			<form class="form__contato" enctype="multipart/form-data" id="form__contato" method="post" action="#">
				<div class="form-inline">
					<div class="form-group">
						<label for="input__nome" class="control-label">
							Nome<span class="campo__obrigatorio">*</span>
						</label>
				      	<input id="input__nome" name="input__nome" type="text" class="form-control" maxlength="50">
				      	<div class="divError"></div>
				    </div>
				    <div class="form-group">
						<label for="input__email" class="control-label">Email</label>
				      	<input id="input__email" name="input__email" type="email" class="form-control" maxlength="40">
				      	<div class="divError"></div>
				    </div>
				</div>
				<div class="form-inline">
				    <div class="form-group">
					    <label for="input__telefone" class="control-label">
					    	Telefone<span class="campo__obrigatorio">*</span>
					    </label>
					    <input id="input__telefone" name="input__telefone" type="tel" class="form-control" placeholder="Telefone ou Celular" maxlength="15">
				      	<div class="divError"></div>
				    </div>	
				    <div class="form-group">
				    	<label for="input__telefonetipo" class="control-label">
				    		Tipo de Telefone
				    	</label>
						<select id="input__telefonetipo" name="input__telefonetipo" class="form-control" >
				            <option value="">Selecione</option>
				            <option value="Residencial">Residencial</option>
				            <option value="Celular">Celular</option>
				            <option value="Comercial">Comercial</option>
				        </select>
				      	<div class="divError"></div>
				    </div>
				</div>	
				<div class="form-inline">
				    <div class="form-group" id="group__assunto">
				    	<label for="input__assunto" class="control-label">
				    		Motivo do Contato<span class="campo__obrigatorio">*</span>
				    	</label>
						<select id="input__assunto" name="input__assunto" class="form-control">
				            <option value="">Selecione</option>
				            <option value="Orçamento">Orçamento</option>
				            <option value="Duvida">Dúvida</option>
				            <option value="Elogio">Elogio</option>
				            <option value="Sugestão">Sugestão</option>
				            <option value="Trabalhe_Conosco">Trabalhe Conosco</option>
				        </select>
				        <!--Div criada para resolução de um bug--> 
				      	<div class="divError2"></div>
				    </div>
				    <div class="form-group" id="group__cv">
				    	<input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
				    	<input id="input__cv" type="file" class="input__cv" name="input__cv"/>
				    	<label id="label__cv" class="label__cv" for="input__cv">Selecione seu CV</label>
				    </div> 
				</div>
				    <div class="form-inline">
				    	<div class="form-group" id="group__mensagem">
						    <label for="input__mensagem" class="control-label" id="mensagem1">
						    	Mensagem<span class="campo__obrigatorio">*</span>
						    </label>
						    <label for="input__mensagem" class="label" id="mensagem2">
						    	<span class="char__restantes">400</span>
						    	Caracteres Restantes
							</label>
						    <textarea id="input__mensagem" name="input__mensagem" class="form-control" maxlength="400"></textarea>
				      		<div class="divError"></div>
						</div>
				    </div>
					<div class="form-inline">
					  	<div class="form-group" id="group__enviar">
					      	<button id="btn__enviar" name="btn__enviar" type="submit" type="button" class="btn btn-default">
					      		Enviar Mensagem
					      	</button>
					  	</div>
					</div>
			</form>
			<div class="fale__conosco">
				<label>
					<i class="fa fa-comments-o" aria-hidden="true"></i>
					&nbsp;Fale conosco:
				</label>
			</div>
			<div class="contato__telefones">
				<div class="contato__telefone">
					<h1>
						<i class="fa fa-phone-square fa-lg" aria-hidden="true"></i>
						- (15) 3211-5442  
					</h1>
				</div>
				<div class="contato__telefone">
					<h1>
						<i class="fa fa-mobile fa-lg" aria-hidden="true"></i>
						- (15) 99664-4554
					</h1>
				</div>
				<div class="contato__telefone">
					<h1>
						<i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
						- (15) 98832-9039
					</h1>
				</div>
 			</div>
		</div>
	</section>
	<div class="barra"></div>
	<footer id="footer">
		<div class="container">	
			<div class="content" id="footer-sidebar">
				<div class="footer-widget footer-widget--about">
					<h4 class="widget__title">
						<span></span> Empresa:
					</h4>
					<a href="" title="MG Service">
						<a href="http://grupomgservice.com.br/">
							<img src="images/logo.png" class="img-responsive" alt="" title="MG Service">
						</a>
					</a>
					<p>
						A MG Service é uma empresa de terceirizações de serviços, que disponibiliza e desenvolve soluções operacionais nas áreas de portaria, limpeza, recepção entre outras. 
					</p>
				</div>
				<div class="footer-widget footer-widget--about">
					<h4 class="widget__title">
						<span></span> Facebook:
					</h4>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgivamonteiroconsultordeseguranca%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" height="215px" style="border:none; overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" data-adapt-container-width="true"></iframe>
				</div>
				<div class="footer-widget footer-widget--about">
					<h4 class="widget__title">
						<span></span> Localização:
					</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.619006391517!2d-47.457268485483546!3d-23.47420356426341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5f55980555ec1%3A0xbc4ea20f59f8f8f8!2sCondom%C3%ADnio+Residencial+Planalto+-+R.+Jo%C3%A3o+Ribeiro+de+Barros%2C+1000+-+Vila+Odim+Matadour%2C+Sorocaba+-+SP%2C+18080-180!5e0!3m2!1spt-BR!2sbr!4v1506692405412" width="180px" height="213px" frameborder="0" style="border:0" allowfullscreen="true"></iframe>
					R. João Ribeiro de Barros, 1000 - Vila Odim Matadour
					Sorocaba - SP
					18080-180
				</div>
			</div>
		</div>
			<div class="direitos">
				<div class="container">
					<div class="content">
						<p>Todos os Direitos Reservados © - 2017 - MG SERVICE | CNPJ.: 18.765.447/0001-17 | Givanildo Monteiro | Versão 1.0 </p>
						<p>Desenvolvimento por: <a href="https://www.facebook.com/EssentialsTech/">Essentials Technology</a></p>
					</div>
				</div>
			</div>
	</footer>
	<script src="js/main.js"></script>
	<script src="js/contato.js"></script>
	<script src="js/vendors/bootstrap/bootstrap.min.js"></script>

	<script src="js/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="https://use.fontawesome.com/7bbbae59e5.js"></script>
</body>
</html>