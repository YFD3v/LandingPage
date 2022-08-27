<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LandingPage</title>
        <link rel="icon" href="<?php echo INCLUDE_PATH; ?>images/favicon-16x16.png">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>css/style.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>fontawesome-free-6.1.2-web/css/all.css">
        <meta name="keywords" content="landing page, empresa, site, website">
        <meta name="author" content="Yan Ferreira">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum_scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>">
<?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'especialidades':
            echo '<target target="especialidades" />';
            break;
        
        case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;
    }

?>
    <div class="sucesso">Formulário enviado com sucesso!</div>
    <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH; ?>images/Rolling-1s-200px.gif" alt="">
    </div><!--overlayLoading-->

    <header>
        <div class="center">
            <div class="logo">
                <a href="<?php echo INCLUDE_PATH; ?>"><h2>Logomarca</h2></a>
            </div><!--logo-->
            <nav class="desktop">
                <div class="items-desktop">
                    <a href="<?php echo INCLUDE_PATH; ?>">Home</a>
                    <a href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a>
                    <a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a>
                    <a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a>
                </div>
            </nav><!--desktop-->
            <nav class="mobile">
                <div class="items-mobile">
                    <h2><i class="fa-solid fa-bars"></i></h2>
                    <ul>
                        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                        <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </div>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div>
    </header>

    <div class="container-principal">
    
    <?php

    if (file_exists('pages/'.$url.'.php')) {
        include('pages/'.$url.'.php');
    }else{
        //Podemos fazer o que quiser, pois a pagina não existe.
        if ($url != 'especialidades' && $url !='depoimentos') {
            $page404 = true;
            include('pages/404.php');
        }else{
            include('pages/home.php');
        }
        
    }

    ?>

</div>

    <footer <?php if(isset($page404) && $page404 = true) echo 'class="fixed-footer1"'?> class="footer1">
        <div class="center">
            <div class="social-media">
                <h2>Conecte-se conosco:</h2>
                <div class="group-icons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div><!--social-media-->
            <div class="links">
                <h2>Links Utéis:</h2>
                <a href="https://www.youtube.com"> Facebook</a>
                <a href="https://www.youtube.com"> Instagram</a>
                <a href="https://www.youtube.com"> Twitter</a>
            </div>
        </div><!--center-->
    </footer>
    <footer <?php if(isset($page404) && $page404 = true) echo'class="fixed footer2"' ?> class="footer2">
        <p>Todos os direitos reservados</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/menuResp.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/menuScroll.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/constant.js"></script>
    <!--Para deixar mais otimizado eu faço uma verificação 
    para que só carregue o slide quando estiver na home-->
    <?php
        if($url == 'home' || $url == ''){
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>
    <?php
    if ($url=='contato') {
        
    ?>
    <?php } ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/especialidades.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/formulario.js"></script>
</body>
</html>