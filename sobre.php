<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="##2e4053">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body data-spy="scroll" data-target="#primary-menu">
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>

    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand logo">
                        <h2>SOBRE</h2>
                    </a>
                </div>
                <nav class="collapse navbar-collapse" id="primary-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="faleconosco.php">FALE CONOSCO</a></li>
                            <li><a href="login.php">LOGIN</a></li>
                        </ul>
                    </nav>
            </div>
        </div>
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute logo-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>Sistema de Irrigação</h2>
                    <p>Projeto pessoal de irrigação automatizada para aprendizado e resolução de um problema familiar, usando PHP, JavaScript, JAVA, C++ e MySQL.</p>
                   <a href="https://drive.google.com/open?id=1Vx8kYPCS5qCr1-6K050pVNb7uhBmNmfs" target="_blank" class="button white">Download APP <i class="material-icons left">file_download </i></a>
                </div>
                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src="images/screen-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-5.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-6.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
        <h4>Linguagens utilizadas</h4>
        <p>PHP, JavaScript e MySQL - WEB <br>
        JAVA - APP Android (webview) <br>
        C++ - Programação do NodeMCU <br>
        </p>
    <br>
        <h4> O que o sistema faz? </h4> 
        <p> O sistema faz a leitura de 3 sensores (temperatura ambiente, umidade relativa do ar e umidade do solo) a cada 1 minuto (esse valor pode ser modificado), depois salva os dados das leituras no banco de dados, se o valor de umidade do solo estiver abaixo do valor limiar (esse valor pode ser modificado) ele irá ativar o sistema de irrigação automaticamente, depois disso ele salva os dados das leituras no banco de dados, podendo ser visualizado na aba de controle de sensores, onde podemos ver os dados dos sensores e ativar o sistema de irrigação manualmente. </p> <p> Nessa mesma página podemos ver o gráfico com todas as leituras e se for necessário, imprimir o mesmo. </p> <p> Podemos consultar todas as leituras, por <b>dia/mês/ano</b> ou por <b>mês/ano</b> e gerar o relatório do dia. </p>
    <br>
        <h4>NodeMCU</h4>
        <p>NodeMCU é uma plataforma open source de Internet das Coisas. Podendo ser usada linguagem de script Lua e C++ (Arduino IDE). 

            O NodeMCU utiliza o microcontrolador ESP8266 com Wi-Fi

            CPU: 32bit RISC Tensilica Xtensa LX106 rodando à 80/160 MHz.<br>
            RAM: 64 kB.<br>
            FLASH: QSPI Externo – de 512 kB até 4 MB.<br>
            WiFi: IEEE 802.11 – b/g/n.<br></p>
            <br>
            <a href="https://nodemcu.readthedocs.io/en/master/" target="_blank" class="button blue">Documentação NodeMCU</a>
        </div>
    </section>

    <section class="sky-bg section-padding" id="feature-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>CARACTERÍSTICAS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-xs-12 col-sm-4">
                            <div class="box">
                                <div class="box-icon">
                                    <img src="images/service-icon-1.png" alt="">
                                </div>
                                <h4>Usabilidade</h4>
                                <p>Design intuitivo e com interface de fácil uso por qualquer pessoa.</p>
                            </div>
                        </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <div class="box-icon">
                                <img src="images/portfolio-icon-6.png" alt="">
                            </div>
                            <h4>Na WEB e no Celular</h4>
                            <p>Esteja conectado com sua plantação de qualquer lugar do mundo, pela WEB ou pelo APP.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                            <div class="box">
                                <div class="box-icon">
                                    <img src="images/service-icon-3.png" alt="">
                                </div>
                                <h4>Controle</h4>
                                <p>Atualização da leitura dos sensores a cada minuto, controle de irrigação automatizado com possibilidade de ativação manual.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="box">
                                    <div class="box-icon">
                                        <img src="images/portfolio-icon-2.png" alt="">
                                    </div>
                                    <h4>Impressão</h4>
                                    <p>Impressão de relatórios diários e gráfico das leituras dos sensores.</p>
                                </div>
                            </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/portfolio-icon-5.png" alt="">
                        </div>
                        <h4>Configuração</h4>
                        <p>Fácil instalação e configuração.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <div class="box-icon">
                                <img src="images/portfolio-icon-3.png" alt="">
                            </div>
                            <h4>Fale Conosco</h4>
                            <p>Entre em contato conosco sobre qualquer dúvida ou sugestão de modo fácil e rápido.</p>
                        </div>
                    </div>
        </div>
    </section>
    <footer class="footer-area relative gray-bg" id="contact-page">
        <div class="footer-middle">
            <div class="container">
                <div class="row text-center">
                    <div class="social-menu text-center">
                            <p>Desenvolvido por Lucas Martins - LukinMar</p>
                    </div>
                     <ul class="social-menu text-center">                  
                            <li><a href="https://www.facebook.com/lukinmar " target="_blank" ><i class="ti-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/lukinmar" target="_blank" ><i class="ti-instagram"></i></a></li>
                            <li><a href="https://github.com/LukinMar" target="_blank" ><i class="ti-github"></i></a></li>
                     </ul>
                    </div>
            </div>
        </div>
        <div class="footer-bottom gray-bg">
            <div class="container gray-bg">
                <div class="row">
                                  
                </div>
                </div>
            </div>
    </footer>



<script>

        $(window).on("load", function () {
            $('.preloader').fadeOut(500);
        })(jQuery);

</script>

    <!--Vendor-JS-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php
?>