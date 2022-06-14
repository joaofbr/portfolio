<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibsle" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=Ubuntu:wght@300;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">
    <title>Home - PowerFit</title>
</head>

<style>
    ::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

 ::-webkit-scrollbar-track {
    background-color: rgb(12, 12, 12);
    box-shadow: inset 0 0 5px rgb(22, 22, 22);
}

 ::-webkit-scrollbar-thumb {
    background: rgb(255, 143, 9);
    background: linear-gradient(0deg, rgb(255, 91, 15) 0%, rgb(252, 101, 0) 43%, rgb(255, 38, 0) 81%, rgb(240, 28, 0) 99%);
    border-radius: 100px;
}
</style>

<body style="margin-top: 20px;">
    <!--NAV BAR-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-top navbar-top1" id="menu">
        <div class="container-fluid">
            <div class="container">
                <a style="font-size: 2.5rem;" href="#" class="navbar-brand">PowerFit</a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barraNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="barraNav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../php/index_login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--FIM NAVBAR -->

    <!--BANNER-->
    <div id="banner">
        <div id="video">
            <video id="background" src="../video/malhando2.mp4" autoplay="true" muted="true" loop="true"></video>
        </div>
        <div id="conteudo">
            <h1 data-aos="fade-up" data-aos-duration="1000" id="content">Bem vindo ao SGT - PowerFit</h1>
                <h4 data-aos="fade-up" data-aos-duration="1000" id="content2"style="margin-top: 15px;">O seu site de gerenciamento de treinos</h4>
                <br>
                <form id="form">
                    <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12" id="botaoColuna">
                        <button type="submit" id="botaoBanner"> Cadastre-se</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <!--FIM BANNER-->

    <!--PLANOS-->
    <div class="container" id="planos" style="margin-top: 715px;">
    <div style="margin-bottom: 20px;" id="conheca" style=" text-align: center;" data-aos="fade-up"
            data-aos-duration="500">
            <h1 id="conhecaH2">CONHECA NOSSOS PLANOS:</h1>
        </div>
        <div class="flexbox">
            <div id="fotos" class="row">
                <div class="col-sm-6 animate" id="anuncio" data-aos="fade-up" data-aos-duration="1000">
                    <div id="foto"><a href="..//php/index_login.php"><img class="img-responsive img-rounded" src="https://i.ibb.co/xshT854/Mensal-Livre-1.png"></a></div>
                    <ul id="beneficios">
                        <li id="beneficiosLi">Acesso a todos os equipamentos da academia;</li>
                        <li id="beneficiosLi">Área para aeróbicos;</li>
                        <li id="beneficiosLi">Natação;</li>
                        <li id="beneficiosLi">Crossfit;</li>
                        <li id="beneficiosLi">Pilates;</li>
                        <li id="beneficiosLi">Acesso ao Wi-Fi.</li>
                    </ul>
                </div>
                <div class="col-sm-6 animate" id="anuncio" data-aos="fade-up" data-aos-duration="1000">
                    <div id="foto"><a href="..//php/index_login.php"><img class="img-responsive img-rounded" src="https://i.ibb.co/XtMDZR1/Mensal-Livre-2.png"></a></div>
                    <ul id="beneficios">
                        <li id="beneficiosLi">Acesso a todos os equipamentos da academia;</li>
                        <li id="beneficiosLi">Área para aeróbicos;</li>
                        <li id="beneficiosLi">Natação;</li>
                        <li id="beneficiosLi">Crossfit;</li>
                        <li id="beneficiosLi">Pilates;</li>
                        <li id="beneficiosLi">Acesso ao Wi-Fi;</li>
                        <li id="beneficiosLi">10% mais barato.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--FIM PLANOS-->

    <!--ENCONTRA AQUI-->
    <div class="container-fluid" id="encontra">
        <h2 id="h1encontra" style="text-align: center;" data-aos="fade" data-aos-duration="1500">O QUE VOCÊ ENCONTRA NA
            POWERFIT</h2>
        <br>
        <h3 id="h3encontra" style="text-align: center;" data-aos="fade-up" data-aos-duration="1000">DICAS SOBRE:</h3>
        <div class="row">
            <div class="flex">
                <div class="col-sm-4" data-aos="slide-up" data-aos-duration="1000">
                    <p class="text-center"><img id="dicas" class="img-responsive img-rounded"
                            src="https://i.ibb.co/TmjghT7/SA-DE-12.png"></p>
                    <div id="legenda">
                        <p class="text-center"><a id="btsaiba" class="btn btn-info btn-lg" role="button"
                                href="../php/index_login.php">Saiba mais &raquo;</a></p>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="slide-up" data-aos-duration="1000">
                    <p class="text-center"><img id="dicas" class="img-responsive img-rounded"
                            src="https://i.ibb.co/gj26vyV/SA-DE-13.png"></p>
                    <div id="legenda">
                        <p class="text-center"><a id="btsaiba" class="btn btn-info btn-lg" role="button"
                                href="../php/index_login.php">Saiba mais &raquo;</a></p>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="slide-up" data-aos-duration="1000">
                    <p class="text-center"><img id="dicas" class="img-responsive img-rounded"
                            src="https://i.ibb.co/xfRFZxK/SA-DE-11.png"></p>
                    <div id="legenda">
                        <p class="text-center"><a id="btsaiba" class="btn btn-info btn-lg" role="button"
                                href="../php/index_login.php">Saiba mais &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIM ENCONTRA AQUI-->

    <!--EQUIPE-->
    <div class="container" id="containerEquipe">
        <div class="row" id="linhaEquipe">
            <div id="segundaColuna" class="col-sm-4" data-aos="fade-up" data-aos-duration="500">
                <h2 id="h2Equipe">NOSSA EQUIPE:</h2>
                <p id="social">João Pedro F. B. Ramos</p>
                <a id="instagram" href="https://www.instagram.com/fbr_joao/"><img id="insta"
                        src="https://i.ibb.co/jzp24XL/3228551-app-b-w-instagram-logo-media-icon.png"></a>
                <a id="facebook" href=""><img id="face"
                        src="https://i.ibb.co/3rQyBvQ/3228552-app-b-w-facebook-logo-media-icon.png"></a>

                <p id="social">Alef Matheus T. Garcia</p>
                <a id="instagram" href="https://www.instagram.com/alefmatheuus/"><img id="insta"
                        src="https://i.ibb.co/jzp24XL/3228551-app-b-w-instagram-logo-media-icon.png"></a>
                <a id="facebook" href=""><img id="face"
                        src="https://i.ibb.co/3rQyBvQ/3228552-app-b-w-facebook-logo-media-icon.png"></a>

                <p id="social">Caique de Magalhães Rozatto</p>
                <a id="instagram" href="https://www.instagram.com/caiquerozatto/"><img id="insta"
                        src="https://i.ibb.co/jzp24XL/3228551-app-b-w-instagram-logo-media-icon.png"></a>
                <a id="facebook" href=""><img id="face"
                        src="https://i.ibb.co/3rQyBvQ/3228552-app-b-w-facebook-logo-media-icon.png"></a>

                <p id="social">Thiago Azevedo Araújo</p>
                <a id="instagram" href="https://www.instagram.com/vulgo1th/"><img id="insta"
                        src="https://i.ibb.co/jzp24XL/3228551-app-b-w-instagram-logo-media-icon.png"></a>
                <a id="facebook" href=""><img id="face"
                        src="https://i.ibb.co/3rQyBvQ/3228552-app-b-w-facebook-logo-media-icon.png"></a>
            </div>
            <div id="segundaColuna" class="col-sm-4" data-aos="fade-up" data-aos-duration="500">
                <h2 id="h2Equipe">PARCERIAS:</h2>
                <li>PowerFit</li>
                <li>Proquality</li>
                <li>Smartfit</li>
                <li>BigGang</li>
                <li>WorkAcademy</li>
                <li>AnabolMusc</li>
            </div>
        </div>
    </div>
    <!--FIM EQUIPE-->
</body>

<footer style="z-index: 1;">
    <!--SOBRE AGT-->
    <div id="principal">
        <div id="subPrincipal" class="container">
            <h2 id="h2Foot">Sobre o PowerFit:</h2>
            <p id="textFooter">O PowerFit - SGT é um sistema que te permite controlar seu dia a dia na academia, sua saúde, bem estar e muito mais!</p>
            <p><a id="assine" href="../php/cadastrar_usuario.php">Assine já e mantenha-se saudável!</a></p>
        </div>
        <br>
        <div class="container"></div>
        <div id="subPrincipal" class="container">
            <h2 id="h2Foot">Funcionalidades:</h2>
            <li id="liFoot">Análise e cáculo de IMC;</li>
            <li id="liFoot">Gráficos de desempenho;</li>
            <li id="liFoot">Controle de alimentação e treinos;</li>
            <li id="liFoot">Gerenciamento de altura e peso.</li>
        </div>
    </div>
    <!--FIM SOBRE-->
    <nav style="position: absolute; width: 100%;" class="navbar navbar-default navbar-static-top sem-margem">
        <p style="margin-left: 20px;" class="navbar-text">&copy; 2021 Copyright - PowerFit</p>
    </nav>
</footer>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/additional-methods.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/localization/messages_pt_BR.min.js"></script>
<script src="../plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    // deixar navbar transparente no topo da pagina
    (function () {
        var menu = document.getElementById('menu');
        window.addEventListener('scroll', function () {
            if (window.scrollY == 0) menu.classList.add('navbar-top');
            else menu.classList.remove('navbar-top');
        });
    })();
    (function () {
        var menu = document.getElementById('menu');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 0) menu.classList.add('navbar-top1');
        });
    })();

    // ir para cadastro
    window.onload = function () {
        document.getElementById("form").addEventListener("submit", login, false);
    }

    function login(event) {
        event.preventDefault();

        console.log("go to cadastro", event)

        window.location.href = "../php/index_cadastro.php"
    }
</script>

<style type="text/css">
    .navbar-top {
        background-color: rgba(255, 255, 255, 0);
    }

    .navbar-top1 {
        transition: 0.5s;
    }
</style>

</html>