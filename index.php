<?php $checkout = ''; // TODO checkout cielo, through rents ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rent$ Payments - Educational</title>

        <meta name="description" content="Curso presencial em Brasília de Jogos Digitais para o Ensino médio">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">

        <link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/colors/color1.css">
        <!-- <link rel="stylesheet" href="assets/css/colors/color2.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/colors/color3.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/colors/color4.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/colors/color5.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/colors/color6.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/colors/color7.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/colors/color8.css"> -->


        <!-- Header Scripts -->

        <!--[if lt IE 9]>
            <script src="assets/js/vendor/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- Loader start -->
        <div id="loader">
            <div class="loader-content">
                <div class="preloader-wrapper small active">
                    <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p class="loading-title">Carregando...</p>
            </div>
        </div>
        <!-- Loader end -->


        <!-- important for youtube video background -->
        <div id="youtubeVideobg"></div>

        <!-- Header Menu start -->
        <header class="main-header">
            <!-- desktop menu -->
            <div class="header-big-screen hidden-sm hidden-xs black">
                <div class="container">
                    <div class="header-inner clearfix">
                        <a href="#home" data-section="#home" class="logo menu-smooth-scroll">
                            <img src="img/EduBrand.png" alt="logo">
                        </a>
                        <nav class="menu">
                            <ul>
                                <li><a href="#why" data-section="#why" class="menu-smooth-scroll">Curso</a></li>
                                <li><a href="#features" data-section="#features" class="menu-smooth-scroll">Diferenciais</a></li>
                                <!-- <li><a href="#screenshot" data-section="#screenshot" class="menu-smooth-scroll">Screens</a></li> -->
                                <li><a href="#packages" data-section="#packages" class="menu-smooth-scroll">Preços</a></li>
                                <!-- <li><a href="#payment-method" data-section="#payment-method" class="menu-smooth-scroll">Pagamento</a></li> -->
                                <!-- <li><a href="#download" data-section="#download" class="menu-smooth-scroll">Download</a></li> -->
                                <li><a href="#team" data-section="#team" class="menu-smooth-scroll">Professor</a></li>
                                <!-- <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll">Blog</a></li> -->
                                <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll">Encontre</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="header-mobile-screen visible-sm visible-xs full-height">
                <div class="header-inner full-height">
                    <div class="logo-area clearfix">
                        <a href="#home" data-section="#home" class="logo pull-left menu-smooth-scroll">
                            <img src="img/logo.png" alt="logo">
                        </a>
                        <div class="bar-area pull-right">
                            <a href="#" class="open-menu"><i class="fa fa-bars"></i></a>
                            <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <nav class="menu animated">
                        <ul>
                            <li class="current"><a href="#why" data-section="#why" class="menu-smooth-scroll">Why</a></li>
                            <li><a href="#features" data-section="#features" class="menu-smooth-scroll">Features</a></li>
                            <li><a href="#screenshot" data-section="#screenshot" class="menu-smooth-scroll">Screens</a></li>
                            <li><a href="#packages" data-section="#packages" class="menu-smooth-scroll">Packages</a></li>
                            <li><a href="#download" data-section="#download" class="menu-smooth-scroll">Download</a></li>
                            <li><a href="#team" data-section="#team" class="menu-smooth-scroll">Team</a></li>
                            <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll">Blog</a></li>
                            <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header Menu end -->



        <!-- Main section start -->
        <main role="main" class="main">
            <!-- Banner Section start -->
            <section id="home" class="scroll-section banner">
                <div class="overlay overlay-one"></div>
                <div class="overlay-content text-center">
                    <div class="banner-content animated fadeOut">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="heading">Desenvolvimento de Jogos 2D para dispositivos móveis</h2>
                                    <h2 class="white-text">21 - 31/07/2015</h2>
                                    <h3 class="sub-heading" id="banner-slider-controller">Aprenda a programar desenvolvendo jogos para as maiores plataformas móveis do mundo
                                      <br>
                                      <i class="ion-social-apple"></i> <i class="ion-social-android"></i> <i class="ion-social-windows"></i>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-feature">
                        <div class="banner-feature-list">
                            <i class="fa fa-globe"></i>
                            <h3 class="title">Introdução ao Mundo 2D</h3>
                        </div>
                        <div class="banner-feature-list">
                            <i class="fa fa-code"></i>
                            <h3 class="title">Introdução a Programação</h3>
                        </div>
                        <div class="banner-feature-list">
                            <div class="unreal-brand"></div>
                            <h3 class="title">Introdução à Unreal</h3>
                        </div>
                        <div class="banner-feature-list">
                            <i class="ion-iphone"></i>
                            <h3 class="title">Deploy no Dispositivo</h3>
                        </div>
                        <div class="banner-feature-list">
                            <i class="fa fa-cloud-upload"></i>
                            <h3 class="title">Publicação</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Section end -->

            <!-- Why this app start -->
            <section id="why" class="scroll-section section-space why-this-app section-bg-02 hidden-overflow">
                <div class="container">

                    <div class="row">
                        <div class="why-section-col col-lg-6 col-md-6 col-sm-6 hidden-xs">
                            <div class="why-slider" id="whySlider">
                                <div class="thumb-area">
                                    <img src="img/flipbook.gif" alt="">
                                </div>
                                <div class="thumb-area">
                                  <img src="img/CodeSample.png" class="no-left-space" alt="">
                                </div>
                                <div class="thumb-area">
                                    <img src="img/iphone-01-EDITED.png" class="rotate" alt="">
                                    <img src="img/android-01-EDITED.png" class="rotate" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="why-section-col col-lg-5 col-md-5 col-sm-6 col-xs-12">
                            <header><h2 class="section-title title-2">O esperar do curso?</h2></header>
                            <ul class="app-reasion-lists" id="why-feature-lists">
                                <li>
                                    <a href="#">
                                        <span class="btn left-area waves-light waves-effect"><i class="fa fa-globe"></i></span>
                                        <span class="right-area">Aula expositiva e prática das técnicas mais usadas no mundo 2D, como nos Desenhos animados da Disney.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="btn left-area waves-light waves-effect"><i class="fa fa-code"></i></span>
                                        <span class="right-area">Lógica e boas práticas de programação. Estruturas de repetição, de condições e funções, além de animações.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="btn left-area waves-light waves-effect"><i class="ion-iphone"></i></span>
                                        <span class="right-area">Exemplo de jogo que será feito durante o curso na parte prática de uso da Unreal Engine Environment (UE4).</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="why-section-col col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
                    </div>

                </div>
            </section>
            <!-- Why this app end -->


            <!-- Amazing Feature Section start -->
            <section id="features" class="scroll-section section-space section-bg-01 amazing-feature amazing-feature-01 hidden-overflow">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">Incríveis Diferenciais</h2>
                                <p>Nós acreditamos que um curso só é bom quando dá garantias e não deixa o ex-aluno sem amparo na hora que as dificuldades aperam. Acreditamos no potencial de cada um de nossos alunos e gostamos de ouvir o como pensam e o que pensam, suas idemas e sonhos/ambições.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row feature-lists-box">
                        <div class="feature-lists feature-lists-style-one">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="fa fa-mortar-board"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Monitorias</h3>
                                        <p class="pera">
                                          Monitorias <strong class="teal-text">gratuitas</strong> sobre os tópicos como abordados durante o curso.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Consultorias</h3>
                                        <p class="pera">
                                          Análise e consultoria a ex-alunos (projetos e trabalhos),
                                          <strong class="teal-text">podendo ser GRÁTIS</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="fa fa-bullhorn"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Indicação</h3>
                                        <p class="pera">Nossos alunos são o espelho do nosso trabalho. Por isso os indicamos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="fa fa-cube"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Projeto de Código Aberto</h3>
                                        <p class="pera">Apoiamos e construímos com os alunos Frameworks de código aberto (Ciência + TI).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="fa fa-cubes"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Projetos Internos</h3>
                                        <p class="pera">Oportunidade em Projetos com a Rent$, <strong class="teal-text"> contratação remunerada de ex-alunos</strong>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-list">
                                    <div class="icon-area wow rotateIn animated">
                                        <i class="fa fa-ticket"></i>
                                    </div>
                                    <div class="f-content-area">
                                        <h3 class="title">Promoção para ex-alunos</h3>
                                        <p class="pera">Desconto para ex-alunos nos próximos cursos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Amazing Feature Section end -->


            <!-- Pricing Table Section start -->
            <section id="packages" class="scroll-section pricing-table section-space hidden-overflow">
                <div class="overlay-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="section-head">
                                    <h2 class="section-title title-1">Preços por Estilo</h2>
                                    <p>Nós disponibilizamos preços que se flexibilizam em função do estilo/tipo do aluno, escolha o que mais se enquadra para você.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pricing-table-item-wrap">
                            <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="amber accent-4 single-pricing-table pricing-table-style-one basic wow fadeInUpSmall" data-wow-offset="200">
                                    <div class="pricing-container">
                                        <div class="p-t-header white-text">
                                            <h3 class="pricing-title">Ouro</h3>
                                            <div class="best-tag color-brand z-depth-1">Melhor</div>
                                        </div>
                                        <div class="p-t-body">
                                            <p class="justify"></p>
                                            <ul>
                                                <li> <i class="fa fa-check"></i> Material Didático</li>
                                                <li> <i class="fa fa-check"></i> Monitoria</li>
                                                <li> <i class="fa fa-check"></i> Consultoria</li>
                                                <li> <i class="fa fa-check"></i> Indicação</li>
                                                <li> <i class="fa fa-check"></i> Certificado</li>
                                                <li> <i class="fa fa-check"></i> Carga: 24H em 8 encontros de 3H</li>
                                                <li> <i class="fa fa-check"></i> Plataform Virtual de Auxílio</li>
                                                <li> <i class="fa fa-check"></i> Plataform Virtual de Acompanhamento de Rendimento</li>
                                                <li> <i class="fa fa-check"></i> 10h de aulas extras virtual</li>
                                            </ul>
                                        </div>
                                        <div class="p-t-footer clearfix white-text">
                                            <div class="row">
                                              <div class="price"><span class="currency">R$</span><span>1.500,00</span></div>
                                            </div>
                                            <div class="button">
                                                <a href='#payment_modal' class="modal-trigger btn th-btn th-btn-medium th-btn-parent white deep-purple-text">Assinar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="blue-grey lighten-3 black-text single-pricing-table pricing-table-style-one best wow fadeInUpSmall" data-wow-offset="200" data-wow-delay=".2s">
                                    <div class="pricing-container">
                                        <div class="p-t-header white-text">
                                            <h3 class="pricing-title">Prata</h3>
                                        </div>
                                        <div class="p-t-body">
                                            <p class="justify"></p>
                                            <ul>
                                                <li> <i class="fa fa-check"></i> Material Didático</li>
                                                <li> <i class="fa fa-check"></i> Monitoria</li>
                                                <li> <i class="fa fa-check"></i> Certificado</li>
                                                <li> <i class="fa fa-check"></i> Carga: 24H em 8 encontros de 3H</li>
                                                <li> <i class="fa fa-check"></i> Plataform Virtual de Acompanhamento de Rendimento</li>
                                                <li> <i class="fa fa-check"></i> 5h de aulas extras virtual</li>
                                            </ul>
                                        </div>
                                        <div class="p-t-footer clearfix white-text">
                                            <div class="row">
                                              <div class="price"><span class="currency">R$</span><span>1.000,00</span></div>
                                            </div>
                                            <div class="button">
                                                <a href='#payment_modal' class="modal-trigger btn th-btn th-btn-medium th-btn-parent white deep-purple-text">Assinar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="cooper black-text single-pricing-table pricing-table-style-one pro wow fadeInUpSmall" data-wow-offset="200" data-wow-delay=".4s">
                                    <div class="pricing-container">
                                        <div class="p-t-header white-text">
                                            <h3 class="pricing-title">Bronze</h3>
                                        </div>
                                        <div class="p-t-body">
                                          <ul>
                                              <li> <i class="fa fa-check"></i> Material Didático</li>
                                              <li> <i class="fa fa-check"></i> Monitoria</li>
                                              <li> <i class="fa fa-check"></i> Certificado</li>
                                              <li> <i class="fa fa-check"></i> Carga: 24H em 8 encontros de 3H</li>
                                          </ul>
                                        </div>
                                        <div class="p-t-footer clearfix white-text">
                                            <div class="row">
                                              <div class="price"><span class="currency">R$</span><span>750,00</span></div>
                                            </div>
                                            <div class="button">
                                                <a href='#payment_modal' class="modal-trigger btn th-btn th-btn-medium th-btn-parent white deep-purple-text">Assinar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pricing Table Section end -->


            <!-- Special Payment conditions -->
            <!--
            <section id="payment-method" class="special-offer section-space-top hidden-overflow section-bg-01">
                <div class="container">
                    <div class="offer-content-wrapper clearfix">
                        <div class="offer-left-area hidden-xs">
                            <div class="offer-image-area">
                                <img src="img/iphone-payments-conditions.png" alt="offer image">
                            </div>
                        </div>
                        <div class="offer-right-area">
                            <div class="offer-content">
                                <div class="offer-abs-bg wow bounceInDown" data-wow-delay=".3s"><i class="fa fa-gift big-font"></i></div>
                                <h2>Condições<span>Especiais</span></h2>
                                <h3>Ganhe <span>3% de desconto</span> no <span>boleto</span></h3>
                                <h3>Ganhe <span>1% de desconto</span> no <span>cartão de débito</span></h3>
                                <h3>Parcele em <span>12x sem juros</span> no <span>cartão de crédito</span></h3>
                                <p>Valores válidos somente mediante compra direta do nosso sistema Web de pagamento.</p>
                                <a href="#" class="btn th-btn th-btn-medium th-btn-default bg-brand">comprar agora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            -->
            <!-- Special Payment conditions -->


            <!-- Team Member Section start -->
            <section id="team" class="scroll-section team-member section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-head">
                                <h2 class="section-title title-1">Professor</h2>
                                <p>
                                  <strong>Pós-Graduação:</strong> Engenharia de Software - Universidade Municipal de São Carlos |
                                  <strong>WEB:</strong> 3 anos |
                                  <strong>MobileApps:</strong> 4 anos |
                                  <strong>Jogos:</strong> 2 anos
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row team-members-wrap">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                            <div class="single-team-wrap team-theme-01 text-center wow fadeInUpSmall">
                                <div class="single-team">
                                    <div class="team-member-img">
                                        <img src="img/Trab-Logo-ZP.png" alt="Team member pic">
                                    </div>
                                    <div class="team-member-info">
                                        <div class="info-area-top">
                                            <ul class="social team-social">
                                                <li><a href="https://play.google.com/store/apps/details?id=br.com.zeropaper.app" target="_blank" class="btn color-brand bg-white"><i class="fa fa-android"></i></a></li>
                                                <li><a href="https://itunes.apple.com/br/app/zeropaper/id892377391?mt=8" target="_blank" class="btn color-brand bg-white"><i class="fa fa-apple"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="info-area-bottom">
                                            <h3 class="t-m-name">ZeroPaper</h3>
                                            <h5 class="t-m-designation">Ruby On Rails & PhoneGap</h5>
                                            <h5 class="t-m-designation">WEB & Mobile</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                            <div class="single-team-wrap team-theme-01 text-center wow fadeInUpSmall" data-wow-delay=".2s">
                                <div class="single-team">
                                    <div class="team-member-img">
                                        <img src="img/Trab-Logo-PGS.png" alt="Team member pic">
                                    </div>
                                    <div class="team-member-info">
                                        <div class="info-area-top">
                                            <ul class="social team-social">
                                                <li></li>
                                            </ul>
                                        </div>
                                        <div class="info-area-bottom">
                                            <h3 class="t-m-name">PGS</h3>
                                            <h5 class="t-m-designation">Ruby On Rails - WEB</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                            <div class="single-team-wrap team-theme-01 text-center wow fadeInUpSmall" data-wow-delay=".4s">
                                <div class="single-team">
                                    <div class="team-member-img">
                                        <img src="img/Trab-Logo-BB.png" alt="Team member pic">
                                    </div>
                                    <div class="team-member-info">
                                        <div class="info-area-top">
                                            <ul class="social team-social">
                                                <li><a target="_blank" href="https://play.google.com/store/apps/details?id=br.com.bb.oewallet" class="btn color-brand bg-white"><i class="fa fa-android"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="info-area-bottom">
                                            <h3 class="t-m-name">OuroCard-e</h3>
                                            <h5 class="t-m-designation">Android - Mobile - BB</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team Member Section end -->


            <!-- Map And Contact Section start -->
            <section class="map-section">
                <div class="map-header-area overlay-brand">
                    <h2>Encontre-nos no Google Map</h2>
                </div>

                <!-- Map Area start -->
                <div class="map">
                    <div id="map"></div>
                </div>
                <!-- Map Area end -->
            </section>
            <!-- Map And Contact Section end -->


            <!-- Contact Area start -->
            <section id="contact" class="contact scroll-section">
                <div class="container">
                    <a href="#packages" data-section="#packages" class="btn contact-location-toggle-btn wow bounce" data-wow-duration="1.5s">
                      <i class="ion-paper-airplane"></i>
                    </a>
                </div>
            </section>
            <!-- Contact Area end -->
        </main>
        <!-- Main section end -->



        <!-- Footer area start -->
        <footer class="main-footer">
            <div class="top">
                <div class="container">
                    <div class="footer-logo">
                        <img src="img/EduBrand.png" alt="logo">
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <p>&copy; 2015 Rent$ Educational. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <!-- Footer area end -->

        <!-- PaymentModal -->
        <div id="payment_modal" class="modal modal-fixed-footer">
          <div class="modal-content">
            <h4 class="center">Assinatura do Plano: <span id="selected_plan">Ouro</span></h4>
            <hr>

            <!-- Form which send it to local action where the Rent$ comunication happens -->
            <div class="row">
              <form class="col s12" action="index.html" method="post">
                <!-- Student -->
                <div class="row">
                  <div class="col s12 m12">
                     <div class="card">
                       <div class="card-content blue-grey-text">
                         <div class="row">
                           <div class="input-field col s12">
                             <input id="full_name" name="full_name" type="text" class="validate">
                             <label for="full_name">Nome Completo</label>
                           </div>
                         </div>

                         <div class="row">
                           <div class="input-field col s12">
                             <input id="email" name="email" type="email" class="validate">
                             <label for="email">E-mail</label>
                           </div>
                         </div>

                         <div class="row">
                           <div class="input-field col s12">
                             <input id="legal_id" name="legal_id" type="text" class="validate">
                             <label for="legal_id">CPF</label>
                           </div>
                         </div>

                         <div class="row">
                           <div class="input-field col s12">
                             <h6 id="brand_card_title">Bandeira do Cartão:</h6><hr>
                             <div class="row">
                               <div class="col l2 s2">
                                 <!-- <label> -->
                                   <input type="radio" name="brand_card" id="visa" value="visa" />
                                   <img src="img/brand_cards/visa.png" />
                                 <!-- </label> -->
                               </div>

                               <div class="col l2 s2">
                                 <!-- <label> -->
                                   <input type="radio" name="brand_card" id="mastercard" value="mastercard" />
                                   <img src="img/brand_cards/mastercard.png" />
                                 <!-- </label> -->
                               </div>

                               <div class="col l2 s2">
                                 <!-- <label> -->
                                   <input type="radio" name="brand_card" id="amex" value="amex" />
                                   <img src="img/brand_cards/amex.png" />
                                 <!-- </label> -->
                               </div>

                               <div class="col l2 s2">
                                 <!-- <label> -->
                                   <input type="radio" name="brand_card" id="elo" value="elo" />
                                   <img src="img/brand_cards/elo.png" />
                                 <!-- </label> -->
                               </div>

                               <div class="col l2 s2">
                                 <!-- <label> -->
                                   <input type="radio" name="brand_card" id="discover" value="discover" />
                                   <img src="img/brand_cards/discover.png" />
                                 <!-- </label> -->
                               </div>

                               <div class="col l2 s2">
                                 <!-- <label> -->
                                   <input type="radio" name="brand_card" id="aura" value="aura" />
                                   <img src="img/brand_cards/aura.png" />
                                 <!-- </label> -->
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
          </div>
        </div>
        <!-- /PaymentModal -->

        <script>window.jQuery || document.write('<script type="text/javascript" src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
        <script type="text/javascript" src="assets/js/vendor/detectmobilebrowser.js"></script>
        <script type="text/javascript" src="assets/js/vendor/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/waypoints.js"></script>

        <script type="text/javascript" src="assets/js/vendor/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/js/vendor/matchMedia.js"></script>
        <script type="text/javascript" src="assets/js/vendor/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/jquery.stellar.js"></script>
        <script type="text/javascript" src="assets/js/vendor/jquery.fitvids.js"></script>
        <script type="text/javascript" src="assets/js/vendor/jquery.tubular.1.0.js"></script>
        <script type="text/javascript" src="assets/owl-carousel/owl.carousel.min.js"></script>

        <script type="text/javascript" src="assets/js/vendor/tweetie.js"></script>
        <script type="text/javascript" src="assets/js/vendor/jquery.timeago.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="assets/js/vendor/jquery.ajaxchimp.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/gmaps.js"></script>
        <script type="text/javascript" src="assets/js/vendor/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/isotope.pkgd.min.js"></script>
        <!-- jwPlayer -->
        <script type="text/javascript" src="assets/jwplayer/jwplayer.js"></script>

        <script type="text/javascript" src="assets/js/common.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript" src="assets/js/settings.js"></script>
        <script>
            $('#youtubeVideobg').tubular({videoId: 'hFjOiAkN8ew'});
        </script>
        <script type="text/javascript">
          $("a[href^=#]").click(function(e) { e.preventDefault(); var dest = $(this).attr('href'); console.log(dest); $('html,body').animate({ scrollTop: $(dest).offset().top }, 'slow'); });
        </script>
    </body>
</html>
