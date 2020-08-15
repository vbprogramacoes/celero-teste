<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teste Celero - Web Develope</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
	<!-- Início do cabeçalho do site -->
	<header class="header">
		<section class="header-topo width960">
			<!-- Logo do site -->
			<div class="logo header-topo-logo">
				Cook<span>fy</span>
			</div>
			<!-- Campo de busca -->
			<div class="header-topo-search">
				<div class="header-topo-search-container">
					<input class="header-topo-search-container-type" type="text" placeholder="Pesquise alguma receita">
					<div class="header-topo-search-lupa">
						<img src="./assets/imgs/screen/Lupa.svg" class="Lupa">
					</div>
				</div>
			</div>
			<!-- Menu -->
			<div class="header-topo-menu">
				<div class="header-topo-menu-name">
					Marina
				</div>
				<div class="header-topo-menu-avatar">
					<img src="./assets/imgs/screen/Avatar_feminino.svg" class="header-topo-menu-avatar-image">
				</div>
			</div>
		</section>
		<section class="header-topo-mobile width960">
			<!-- Logo do site -->
			<div class="header-topo-mobile-lm">
				<div class="logo header-topo-logo">
					Cook<span>fy</span>
				</div>
				<div class="header-topo-menu">
					<div class="header-topo-menu-name">
						Marina
					</div>
					<div class="header-topo-menu-avatar">
						<img src="./assets/imgs/screen/Avatar_feminino.svg" class="header-topo-menu-avatar-image">
					</div>
				</div>
			</div>
			
			<!-- Campo de busca -->
			<div class="header-topo-search">
				<div class="header-topo-search-container">
					<input class="header-topo-search-container-type" type="text" placeholder="Pesquise alguma receita">
					<div class="header-topo-search-lupa">
						<img src="./assets/imgs/screen/Lupa.svg" class="Lupa">
					</div>
				</div>
			</div>
			<!-- Menu -->
			
		</section>
	</header>
	<!-- Fim do cabeçalho do site -->
	<!-- Início do corpo do site -->
	<main class="container">
		<section>
			<div class="container-topo width960 relative">
				<img src="./assets/imgs/screen/Elemento_2.svg" class="container-topo-svg">
				<div class="container-topo-container width544">
					<div class="container-topo-container-text">
						<h2>
							Bem vindo de volta 
							<span>Marina Wedderhoff</span>
						</h2>
						<p>
							Contribuição da comunidade: Ceviche de peixe branco 
							<span>Por Michel Filipe</span>
						</p>
					</div>
					<div class="container-topo-container-imgs relative">
						<img src="./assets/imgs/screen/Elemento_1.svg" class="container-topo-container-imgs-ele1 absolute" />
						<img src="./assets/imgs/page/Header.jpg" class="container-topo-container-imgs-header absolute" />
					</div>
				</div>
			</div>
		</section>
		<section class="container-body width960">
			<section class="container-body-container width544">
				<h1>Experimente alguma das últimas receitas</h1>
				<div class="container-body-container-slide">
					<div class="container-body-container-slide-photo">
						<div class="imageslide backgroundImage" style="background-image: url(./assets/imgs/page/Sandwich.jpg)"></div>
						<img src="./assets/imgs/page/Sandwich.jpg" class="displaynone">
					</div>
					<div class="container-body-container-slide-painel">
						<div class="container-body-container-slide-painel-dateadded">
							Adicionado ontem
						</div>
						<h2 class="container-body-container-slide-painel-title">
							Sanduiche de tomate com salada de ovos
						</h2>
						<div class="container-body-container-slide-painel-rating">
							Fácil 
							<div class="slide-painel-rating-stars">
								<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star" />
								<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star" />
								<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star opacity01" />
								<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star opacity01" />
								<img src="./assets/imgs/screen/Estrela.svg" class="slide-painel-rating-stars-star opacity01" />
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
				<div class="container-body-container-horizontal-slide">
					<div class="horizontal-slide-panel">
						<button class="horizontal-slide-panel-button">
							<div class="horizontal-slide-panel-button-img">
								<img src="./assets/imgs/screen/Cozinha.svg" />
							</div>
							<div class="horizontal-slide-panel-button-text">Cozinha</div>
						</button>
						<button class="horizontal-slide-panel-button horizontal-slide-activate">
							<div class="horizontal-slide-panel-button-img">
								<img src="./assets/imgs/screen/Patisserie_active.svg" />
							</div>
							<div class="horizontal-slide-panel-button-text horizontal-slide-text-activate">Patisserie</div>
						</button>
						<button class="horizontal-slide-panel-button">
							<div class="horizontal-slide-panel-button-img">
								<img src="./assets/imgs/screen/Drinks.svg" />
							</div>
							<div class="horizontal-slide-panel-button-text">Drinks</div>
						</button>
					</div>
					<div class="horizontal-slide-img-container">
						<div style="background-image:url(./assets/imgs/page/Patisserie.jpg)" class="horizontal-slide-img-container-img backgroundImage"></div>
						<img src="./assets/imgs/page/Patisserie.jpg" class="displaynone" />
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
		<img src="./assets/imgs/screen/Rodapé.svg" class="Rodap">
		<div class="footer-complement width544">
			<div class="footer-complement-left">
				<div class="logo">
					Cook<span>fy</span>
				</div>
				<div class="footer-complement-text">
					© 2020 Cookfy.
				</div>
			</div>
			<div class="footer-complement-right">
				<div class="footer-complement-social-area">
					<a class="footer-complement-social-area-item backgroundImage" style="background-image:url(./assets/imgs/screen/Fb.svg)"></a>
					<a class="footer-complement-social-area-item backgroundImage" style="background-image:url(./assets/imgs/screen/IG.svg)"></a>
					<a class="footer-complement-social-area-item backgroundImage" style="background-image:url(./assets/imgs/screen/Twitter.svg)"></a>
					<a class="footer-complement-social-area-item backgroundImage" style="background-image:url(./assets/imgs/screen/Linkedin.svg)"></a>
					<a class="footer-complement-social-area-item backgroundImage" style="background-image:url(./assets/imgs/screen/Pinterest.svg)"></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- Fim do rodapé do site -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="./assets/css/script.js"></script>
</body>
</html>