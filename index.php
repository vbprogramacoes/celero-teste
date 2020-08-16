<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Teste Celero - Web Develope</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
</head>
<body>
	<div class="body">
		<!-- Menu -->
		<div class="nav-container">
			<nav class="sidebar">
				<div class="sidebar-container">
					<div class="sidebar-header">
						<button class="sidebar-close-button">
							<img src="./assets/imgs/screen/Fechar.svg" />
							Fechar
						</button>
					</div>
					<!-- Dados da conta -->
					<div class="sidebar-body">
						<!-- Dados do usuário -->
						<div class="sidebar-body-user">
							<div class="sidebar-body-user-topo">
								<div class="sidebar-body-user-avatar">
									<img src="./assets/imgs/screen/Avatar_feminino.svg" id="sidebar-menu-avatar"/>
								</div>
								<div class="sidebar-body-user-name" id="sidebar-menu-name"></div>
							</div>
							<div class="sidebar-body-user-data">
								<div class="sidebar-body-user-email">
									<img src="./assets/imgs/screen/Email.svg"/><span id="sidebar-menu-email"></span>
								</div>
								<div class="sidebar-body-user-tel">
									<img src="./assets/imgs/screen/Telefone.svg"/><span id="sidebar-menu-tel"></span>
								</div>
							</div>
						</div>
						<!-- Dados do plano -->
						<div class="sidebar-body-signature">
							<div class="sidebar-body-signature-topo">
								<div class="sidebar-body-signature-topo-title">Plano mensal</div>
								<div class="sidebar-body-signature-topo-time">16 dias restantes</div>
							</div>
							<div class="sidebar-body-signature-progrees">
								<div class="sidebar-body-signature-progrees-fill"></div>
							</div>
						</div>
						<div class="sidebar-body-button-assignature">
							<a href="#">Assinar plano anual</a>
						</div>
					</div>
					<!--  Rodapé do menu  -->
					<div class="sidebar-footer">
						<a href="#" class="sidebar-footer-row">
							<img src="./assets/imgs/screen/Bug.svg" /><span>Reportar bug ou abuso</span>
						</a>
						<a href="#" class="sidebar-footer-row">
							<img src="./assets/imgs/screen/Senha.svg" /><span>Alterar senha</span>
						</a>
						<a href="#" class="sidebar-footer-row">
							<img src="./assets/imgs/screen/Sair.svg" /><span>Sair</span>
						</a>
					</div>
				</div>
			</nav>
		</div>
		<!-- Início do cabeçalho do site -->
		<header class="header">
			<section class="header-topo width960">
				<!-- Logo do site -->
				<a class="logo header-topo-logo" href="">
					Cook<span>fy</span>
				</a>
				<!-- Campo de busca -->
				<div class="header-topo-search">
					<div class="header-topo-search-container">
						<input class="header-topo-search-container-type" type="text" placeholder="Pesquise alguma receita" />
						<div class="header-topo-search-lupa">
							<img src="./assets/imgs/screen/Lupa.svg" class="Lupa" />
						</div>
					</div>
				</div>
				<!-- Menu -->
				<div class="header-topo-menu">
					<!-- Local do nome do usuário no menu -->
					<div class="header-topo-menu-name" id="topo-name"></div>
					<!-- Local do avatar do usuário no menu -->
					<div class="header-topo-menu-avatar">
						<img class="header-topo-menu-avatar-image" id="topo-avatar" />
					</div>
				</div>
			</section>
			<section class="header-topo-mobile width960">
				
				<div class="header-topo-mobile-lm">
					<!-- Logo do site -->
					<a class="logo header-topo-logo" href="#">
						Cook<span>fy</span>
					</a>
					<div class="header-topo-menu">
						<div class="header-topo-menu-name">
							Marina
						</div>
						<div class="header-topo-menu-avatar">
							<img src="./assets/imgs/screen/Avatar_feminino.svg" class="header-topo-menu-avatar-image" />
						</div>
					</div>
				</div>
				
				<!-- Campo de busca -->
				<div class="header-topo-search">
					<div class="header-topo-search-container">
						<input class="header-topo-search-container-type" type="text" placeholder="Pesquise alguma receita" />
						<div class="header-topo-search-lupa">
							<img src="./assets/imgs/screen/Lupa.svg" class="Lupa" />
						</div>
					</div>
				</div>
				<!-- Menu -->			
			</section>
		</header>
		<!-- Fim do cabeçalho do site -->
		<!-- Corpo do site -->
		<main class="container">
			<section>
				<div class="container-topo width960 relative">
					<img src="./assets/imgs/screen/Elemento_2.svg" class="container-topo-svg" />
					<!-- Topo do corpo do site -->
					<div class="container-topo-container width544">
						<div class="container-topo-container-text">
							<h2>
								Bem vindo de volta 
								<!-- Local do nome do usuário -->
								<span id="name-container-topo"></span>
							</h2>
							<p>
								Contribuição da comunidade: Ceviche de peixe branco 
								<span>Por Michel Filipe</span>
							</p>
						</div>
						<div class="container-topo-container-imgs relative">
							<img src="./assets/imgs/screen/Elemento_1.svg" class="container-topo-container-imgs-ele1 absolute" />
							<div class="container-topo-container-imgs-header-container relative">
								<img src="./assets/imgs/page/Header.jpg" class="container-topo-container-imgs-header absolute" />
								<div class="container-topo-container-imgs-header-container-view-receita">
									<img src="./assets/imgs/screen/Seta_direita.svg" /> Ver foto
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="container-body width960">
				<section class="container-body-container width544">
					<h1>Experimente alguma das últimas receitas</h1>
					<!-- Slide -->
					<div class="container-body-container-slide">
						<div class="container-body-container-slide-photo">
							<img class="imageslide" id="imageslide" />
							<div class="container-body-container-slide-photo-view-receita">
								<img src="./assets/imgs/screen/Seta_direita.svg" /> Ver foto
							</div>
						</div>
						<div class="container-body-container-slide-painel">
							<div class="container-body-container-slide-painel-dateadded" id="slide-painel-dateadded" ></div>
							<h2 class="container-body-container-slide-painel-title" id="slide-painel-title"></h2>
							<div class="container-body-container-slide-painel-rating">
								<span id="slide-painel-difficulty"></span>
								<div class="slide-painel-rating-stars" id='slide-painel-avarage'>
									<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star" />
									<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star" />
									<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star" />
									<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star" />
									<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star" />
								</div>
							</div>
							<div class="container-body-container-slide-painel-controls">
								<button class="slide-controls-button">
									<img src="./assets/imgs/screen/Seta_esquerda.svg" />
								</button>
								<button class="slide-controls-button">
									<img src="./assets/imgs/screen/Seta_direita.svg"/>
								</button>
							</div>
						</div>
					</div>
				</section>
				<div class="container-body-divider">
					<img src="./assets/imgs/screen/Elemento_5.svg" class="container-body-divider-img" />
				</div>
				<section class="container-body-container width544">
					<h2 class="entre-no-mundo-gastronomico">Entre no mundo gastronômico</h2>
					<!-- Slide Vertical -->
					<div class="container-body-container-vertical-slide">
						<div class="vertical-slide-panel">
							<button class="vertical-slide-panel-button">
								<div class="vertical-slide-panel-button-img">
									<img src="./assets/imgs/screen/Cozinha.svg" />
								</div>
								<div class="vertical-slide-panel-button-text">Cozinha</div>
							</button>
							<button class="vertical-slide-panel-button vertical-slide-activate">
								<div class="vertical-slide-panel-button-img">
									<img src="./assets/imgs/screen/Patisserie_active.svg" />
								</div>
								<div class="vertical-slide-panel-button-text vertical-slide-text-activate">Patisserie</div>
							</button>
							<button class="vertical-slide-panel-button">
								<div class="vertical-slide-panel-button-img">
									<img src="./assets/imgs/screen/Drinks.svg" />
								</div>
								<div class="vertical-slide-panel-button-text">Drinks</div>
							</button>
						</div>
						<div class="vertical-slide-img-container">
							<img class="vertical-slide-img-container-img" id="vertical-slide-image"/>
							<div class="vertical-slide-img-container-view-receita">
								<img src="./assets/imgs/screen/Seta_direita.svg" /> Ver foto
							</div>
						</div>
					</div>
				</section>
				<!--Criação das manchas do corpo -->
				<img src="./assets/imgs/screen/Elemtno_4.svg"  class="absolute manchas-corpo4 "/>
				<img src="./assets/imgs/screen/Elemento_6.svg" class="absolute manchas-corpo6" />
				<img src="./assets/imgs/screen/Elemento_7.svg" class="absolute manchas-corpo7" />
			</section>
		</main>
		<!-- Fim do corpo do site -->
		<!-- Início do rodapé do site -->
		<footer class="footer">
			<img src="./assets/imgs/screen/Rodapé.svg" class="Rodap" />
			<div class="footer-complement width544">
				<div class="footer-complement-left">
					<!-- Logo footer do site -->
					<a class="logo" href="#">
						Cook<span>fy</span>
					</a>
					<div class="footer-complement-text">
						© 2020 Cookfy.
					</div>
				</div>
				<!-- Mídias sociais -->
				<div class="footer-complement-right">
					<div class="footer-complement-social-area">
						<a class="footer-complement-social-area-item">
							<div class="backgroundImage"></div>
						</a>
						<a class="footer-complement-social-area-item">
							<div class="backgroundImage"></div>
						</a>
						<a class="footer-complement-social-area-item">
							<div class="backgroundImage"></div>
						</a>
						<a class="footer-complement-social-area-item">
							<div class="backgroundImage"></div>
						</a>
						<a class="footer-complement-social-area-item">
							<div class="backgroundImage"></div>
						</a>
					</div>
				</div>
			</div>
		</footer>
		<!-- Fim do rodapé do site -->
	</div>
	<!-- Modal das imagens -->
	<div class="modal-image">
		<div class="modal-container">
			<!-- Cabeçalho do modal -->
			<div class="modal-container-image">
				<img src="./assets/imgs/page/Header.jpg" id="modal-container-img" />
			</div>
			<!-- Corpo do modal -->
			<div class="modal-container-content">
				<!-- Botão de fechar o modal -->
				<div class="modal-container-header">
					<img src="./assets/imgs/screen/Fechar.svg" id="close-modal" />
				</div>
				<div class="modal-container-body">
					<div class="modal-container-body-header">
						Ceviche de peixe branco
						<span>Por Michel Filipe</span>
					</div>
					<div class="modal-container-body-body">
						O ceviche é um prato de origem peruana feito com cubos de peixe que são cozidos em uma solução ácida, geralmente caldo de limão. Quando o peixe em contato com o limão, um processo químico é iniciado: a proteína do peixe se desnatura e a textura do peixe muda e o peixe fica mais saboroso. O segredo para fazer um bom ceviche é a qualidade do ingrediente principal: o peixe tem que estar bem fresco. Esse prato peruano pode ser feito com salmão, camarões e alguns contam até com manga e abacate, e o tradicional é preparado com peixe branco.
					</div>
				</div>
				<!-- Rodapé do modal -->
				<div class="modal-container-footer">
					<a href="#"><img src="./assets/imgs/screen/Like.svg" />Curtir</a>
					<a href="#"><img src="./assets/imgs/screen/Seta_direita.svg" />Ver receita</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Fim do Modal das imagens -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="./assets/js/script.js"></script>
</body>
</html>