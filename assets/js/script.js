//Criando dados dos slides para interação
var count_slide = 0;
var max_slide = 1;
var min_slide = 0;
var slide_data = [
	{
		title:'Sanduíche de tomate com salada de ovos',
		added:'Adicionado Ontem',
		difficulty:'Fácil',
		avarage:'2',
		img:'./assets/imgs/page/Sandwich.jpg'
	},
	{
		title:'Iogurte de fruta crocante',
		added:'Adicionado a 2 dias',
		difficulty:'Difícil',
		avarage:'4',
		img:'./assets/imgs/page/Iogurte.jpg'
	},
];
var count_vertical_slide = 0;
var vertical_slide_data = [
	{img:'./assets/imgs/page/Cozinha.jpg'},
	{img:'./assets/imgs/page/Patisserie.jpg'},
	{img:'./assets/imgs/page/Drink.jpg'}
];
window.onload = function(){
	//Setando dados iniciais
	setAllDataUser();
	setInteractionOnRequisitedImages();
	setSlide(0);
	setverticalSlide(1);
	//Pegando elementos para configuração e adiação de eventos inicial
	var menu_topo = document.getElementsByClassName('header-topo-menu')[0];
	var menu_mobile_topo = document.getElementsByClassName('header-topo-menu')[1];
	var close_menu_button = document.getElementsByClassName('sidebar-close-button')[0];
	var close_modal = document.getElementById('close-modal');
	var left_button_slide = document.getElementsByClassName('slide-controls-button')[0];
	var right_button_slide = document.getElementsByClassName('slide-controls-button')[1];
	var nav_container = document.getElementsByClassName('nav-container')[0];
	var cozinha_button_horslide = document.getElementsByClassName('vertical-slide-panel-button')[0];
	var patis_button_horslide = document.getElementsByClassName('vertical-slide-panel-button')[1];
	var drinks_button_horslide = document.getElementsByClassName('vertical-slide-panel-button')[2]; 

	menu_topo.addEventListener('click', showMenu);
	menu_mobile_topo.addEventListener('click', showMenu);
	close_menu_button.addEventListener('click', closeMenu);
	close_modal.addEventListener('click', closeModal);
	//Função que verifica posição do clique quando menu esta aberto e fecha 
	nav_container.addEventListener('click', function(evt){
		var sidebar = document.getElementsByClassName('sidebar')[0].getBoundingClientRect();
		if(evt.pageX < sidebar.left){
			closeMenu();
		}
	});

	//Setando funções para modificação de slides
	left_button_slide.addEventListener('click', changeLeftSlide);
	right_button_slide.addEventListener('click', changeRightSlide);

	//Setando funções para modificação de slides horizontais
	cozinha_button_horslide.addEventListener('click', function(){
		removeAllActivateverticalButtons();
		activeverticalButton(0,cozinha_button_horslide);
		setverticalSlide(0);
	});
	patis_button_horslide.addEventListener('click', function(){
		removeAllActivateverticalButtons();
		activeverticalButton(1,patis_button_horslide);
		setverticalSlide(1);
	});
	drinks_button_horslide.addEventListener('click', function(){
		removeAllActivateverticalButtons();
		activeverticalButton(2,drinks_button_horslide);
		setverticalSlide(2);
	});
}
//Seta as classe para identificação do botão ativo
function activeverticalButton(btn_c, btn){
	btn.classList.add('vertical-slide-activate');
	btn.getElementsByClassName('vertical-slide-panel-button-text')[0].classList.add('vertical-slide-text-activate');
	if(btn_c == 0){
		btn.getElementsByClassName('vertical-slide-panel-button-img')[0].getElementsByTagName('img')[0].setAttribute('src', './assets/imgs/screen/Cozinha_active.svg');
	}else if(btn_c == 1){
		btn.getElementsByClassName('vertical-slide-panel-button-img')[0].getElementsByTagName('img')[0].setAttribute('src', './assets/imgs/screen/Patisserie_active.svg');
	}else if(btn_c == 2){
		btn.getElementsByClassName('vertical-slide-panel-button-img')[0].getElementsByTagName('img')[0].setAttribute('src', './assets/imgs/screen/Drinks_active.svg');
	}
}
//Remove todas as classes de botão ativo
function removeAllActivateverticalButtons(){
	var hor_buttons = document.getElementsByClassName('vertical-slide-panel-button');
	for (var count_hb = 0; count_hb < hor_buttons.length; count_hb++){
		hor_buttons[count_hb].classList.remove('vertical-slide-activate');
		hor_buttons[count_hb].getElementsByClassName('vertical-slide-panel-button-text')[0].classList.remove('vertical-slide-text-activate');
		if(count_hb == 0){
			hor_buttons[count_hb].getElementsByClassName('vertical-slide-panel-button-img')[0].getElementsByTagName('img')[0].setAttribute('src', './assets/imgs/screen/Cozinha.svg');
		}else if(count_hb == 1){
			hor_buttons[count_hb].getElementsByClassName('vertical-slide-panel-button-img')[0].getElementsByTagName('img')[0].setAttribute('src', './assets/imgs/screen/Patisserie.svg');
		}else if(count_hb == 2){
			hor_buttons[count_hb].getElementsByClassName('vertical-slide-panel-button-img')[0].getElementsByTagName('img')[0].setAttribute('src', './assets/imgs/screen/Drinks.svg');
		}
	}
}
//Modifica a posição do slide se o contador do slide for menor que o mínimo ele seta o contador do como o último tornando o slide infinito
function changeLeftSlide(){
	count_slide -= 1;
	if(count_slide < min_slide){
		count_slide = 1;
	}
	setSlide();
}
//Função reversa a changeLeftSlide
function changeRightSlide(){
	count_slide += 1;
	if(count_slide > max_slide){
		count_slide = 0;
	}

	setSlide();
}
//Modifica os dados do slide
function setSlide(){
	var cs = count_slide;
	var img_slide = document.getElementById('imageslide');
	var slide_painel_dateadded = document.getElementById('slide-painel-dateadded');
	var slide_painel_title = document.getElementById('slide-painel-title');
	var slide_painel_difficulty = document.getElementById('slide-painel-difficulty');
	var stars_field = document.getElementById('slide-painel-avarage');
	var stars = stars_field.getElementsByClassName('slide-painel-rating-stars-star');

	img_slide.setAttribute('src', slide_data[cs].img);
	slide_painel_dateadded.innerHTML = slide_data[cs].added;
	slide_painel_title.innerHTML = slide_data[cs].title;
	slide_painel_difficulty.innerHTML = slide_data[cs].difficulty;
	for(var count_starts = 0; count_starts < 5; count_starts++){
		stars[count_starts].classList.add('opacity01');
	}
	for(var count_starts = 0; count_starts < slide_data[cs].avarage; count_starts++){
		stars[count_starts].classList.remove('opacity01');
	}
}
//Modifica os dados do slide vertical
function setverticalSlide(chs){
	var vertical_slide_image = document.getElementById('vertical-slide-image');
	vertical_slide_image.setAttribute('src', vertical_slide_data[chs].img);
}
//Seta as classes para fechar o modal das imagens
function closeModal(){
	var modal = document.getElementsByClassName('modal-image')[0];
	modal.classList.remove('show-modal');
}
//Seta as classes para abrir o modal das imagens
function showModal(){
	var modal = document.getElementsByClassName('modal-image')[0];
	modal.classList.add('show-modal');
}
//Seta as interações nas imagens necessárias 
function setInteractionOnRequisitedImages(){
	var image_topo_container = document.getElementsByClassName('container-topo-container-imgs-header-container')[0];
	var image_slide = document.getElementsByClassName('container-body-container-slide-photo')[0];
	var image_vertical_slide = document.getElementsByClassName('vertical-slide-img-container')[0];

	image_topo_container.addEventListener('click', function(){
		modalImage(image_topo_container);
	});
	image_slide.addEventListener('click', function(){
		modalImage(image_slide);
	});
	image_vertical_slide.addEventListener('click', function(){
		modalImage(image_vertical_slide);
	});
}
//Seta a imagem do modal
function setModal(ele){
	var modal_img = document.getElementById('modal-container-img');
	modal_img.setAttribute('src', ele.getElementsByTagName('img')[0].getAttribute('src'));
}
function modalImage (ele){
	setModal(ele);
	showModal();
}
//Seta todos os dados do usuário
function setAllDataUser(){
	var data_user = getUserData();
	var name_topo = document.getElementById('topo-name');
	var avatar_topo = document.getElementById('topo-avatar');
	var name_container_topo = document.getElementById('name-container-topo');
	var sidebar_menu_name = document.getElementById('sidebar-menu-name');
	var sidebar_menu_email = document.getElementById('sidebar-menu-email');
	var sidebar_menu_tel = document.getElementById('sidebar-menu-tel');
	var sidebar_menu_avatar = document.getElementById('sidebar-menu-avatar');

	var first_name = data_user.name.first;
	var last_name = data_user.name.last;
	var email = data_user.email;
	var tel = data_user.phone;

	//Modificação dos avatares
	if(data_user.gender == 'male'){
		avatar_topo.setAttribute('src', "./assets/imgs/screen/Avatar_masculino.svg");
		sidebar_menu_avatar.setAttribute('src', "./assets/imgs/screen/Avatar_masculino.svg");
	}else {
		avatar_topo.setAttribute('src', "./assets/imgs/screen/Avatar_feminino.svg");
		sidebar_menu_avatar.setAttribute('src', "./assets/imgs/screen/Avatar_feminino.svg");
	}

	//Concatenação do primeiro e último nome;
	var full_name = first_name+' '+last_name;

	name_topo.innerHTML = first_name;
	name_container_topo.innerHTML = full_name;
	sidebar_menu_name.innerHTML = full_name;
	sidebar_menu_email.innerHTML = email;
	sidebar_menu_tel.innerHTML = tel;
}
//obtém os dados de um usário aleátio conforme solicitado e retorna esses dados
function getUserData(){
	var user;
	$.ajax({
	  url: 'https://randomuser.me/api/',
	  dataType: 'json',
	  async:false
	}).done(function(data){
		user = data.results[0];
	});
	return user;
}
//Seta as classes para mostrar o menu
function showMenu(){
	var nav_container = document.getElementsByClassName('nav-container')[0];
	nav_container.classList.add('show-menu');
}
//Seta as classes para fechar o menu
function closeMenu(){
	var nav_container = document.getElementsByClassName('nav-container')[0];
	nav_container.classList.remove('show-menu');
}