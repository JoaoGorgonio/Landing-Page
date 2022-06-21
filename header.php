<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href=<?php echo  get_template_directory_uri() ."/assets/css/bootstrap.css" ?>>
    <link rel="stylesheet" href=<?php echo  get_template_directory_uri() ."/style.css" ?>>
    <link rel="stylesheet" href=<?php echo  get_template_directory_uri() ."/assets/css/footer.css" ?>>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/lib/slick-1.8.1/slick/slick.css"?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/lib/slick-1.8.1/slick/slick-theme.css"?>">
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . "/lib/OwlCarousel/dist/assets/owl.carousel.min.css"?>>
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . "/lib/OwlCarousel/dist/assets/owl.theme.default.min.css"?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href=<?php echo get_template_directory_uri() . "/assets/images/favicon.jpg"?>>
    <title><?php echo get_the_title(''); ?></title>
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
		<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
		</symbol>
		<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
		</symbol>
		<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</symbol>
	</svg>
</head>
<body>
	<header id="header">
		<div class="container-lg container-fluid d-flex justify-content-center align-items-center">
			<nav class="row navbar navbar-expand-lg navbar-light bg-white mt-lg-5">
				<div class="geral d-flex justify-content-lg-center justify-content-start align-items-center">
					<div class="ms-4">
						<a class="navbar-brand" href="#"><img id="logo" src=<?php echo get_template_directory_uri() . "/assets/images/logo.png"?>></a>
					</div>
					<div class="dropdown" style="margin-left: auto;">
						<button class="navbar-toggler button-burg" type="button" data-bs-toggle="dropdown" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					    	<li>
					    		<a class="dropdown-item" href="#indicacoes-nav">Indicações</a>
					    	</li>
					    	<li>
					    		<a class="dropdown-item" href="#duvidas-nav">Principais Dúvidas</a>
					    	</li>
					    	<li>
					    		<a class="dropdown-item" href="#limongi-nav">Professor Limongi</a>
					    	</li>
					    	<li>
								<a class="dropdown-item" href="#midia-nav">Saiu na Mídia</a>
							</li>
							<li>
								<a class="dropdown-item" href="#conosco-nav">Fale Conosco</a>
							</li>
					  	</ul>
					</div>
					<div class="collapse navbar-collapse navbar-desk" id="navbarSupportedContent">
						<ul class="navbar-opcoes navbar-nav me-auto mb-2 mb-lg-0 px-5">
							<li class="nav-item px-3">
								<a class="nav-link" aria-current="page" href="#indicacoes-nav">Indicações</a>
							</li>
							<li class="nav-item px-3">
								<a class="nav-link" href="#duvidas-nav">Principais Dúvidas</a>
							</li>
							<li class="nav-item px-3">
								<a class="nav-link" href="#limongi-nav">Professor Limongi</a>
							</li>
							<li class="nav-item px-3">
								<a class="nav-link" href="#midia-nav">Saiu na Mídia</a>
							</li>
						</ul>
					</div>
					<div class="botao-fale me-4">
						<button class="fale-conosco-header btn" type="submit"><a href="#conosco-nav">Fale Conosco</a></button>
					</div>
				</div>
			</nav>
		</div>

		<section class="header-conteudo container col-12">
			<div class="row">
				<div class="content-header col-xxl-5 col-xl-6 col-lg-6 col-md-7 col-12">
					<h1 class="titulo-header"><span id="header-texto1">O que é</span></h1>
					<h1 class="titulo-header mb-4"><span id="header-texto2">a técnica SIM?</span></h1>
					<p id="header-texto3">Consiste na elevação do terço médio facial através da remoção ou transferência do excesso de gordura no rosto, reposicionando assim o músculo orbicular flácido e suavizando vincos e dobras.</p>
				</div>
				<div class="content-tecnica col-lg-6 col-md-5 col-12 d-flex flex-column">
					<div class="content-header-mulher">
						<img id="header-mulher" src=<?php echo get_template_directory_uri() . "/assets/images/header-sim.png"?>>
					</div>
				</div>
			</div>
		</section>
	</header>
