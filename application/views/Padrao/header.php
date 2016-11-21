<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>NeedleTime</title>
        <!-- Css temporário -->
        <link <?= 'href="'.base_url("static/css/tst/rating.css").'"';?> rel="stylesheet">
        <link <?= 'href="'.base_url("static/css/tst/estilo.css").'"';?>  rel="stylesheet">
        <link <?= 'href="'.base_url("static/css/tst/mobile-first.css").'"';?> rel="stylesheet">
        <!-- Js temporario -->
        <script <?= 'src="'.base_url("static/js/jquery.js").'"';?>></script>
        <script <?= 'src="'.base_url("static/js/valida.js").'"';?>></script>
        
        <?php // require_once("links.html"); ?>
    </head>
    <body>
        <header class="back-black">
            <a href="/site/html/inicio.php" title="home"><img id="logo" <?= 'src="'.base_url("static/img/logo.png").'"';?>></a>
            <div class="align-center padding">
                <form class="formLogin" id="formLogin" action="resultadoBusca.php" method="get">
                    <input type="text" name="buscarEstudio" id="buscarEstudio" class="buscarEstudio">
                    <input type="submit" name="search" class="btBuscar back-white" value="Buscar">
                </form>
            </div>
            
            <nav class="menuUsuario">
                <ul>
                    <li><a href="/site/html/inicio.php" title="home">Home</a></li>
                    <li><a href="/site/html/cadastro.php" title="cadastre-se"> Cadastro </a></li>
                    <li><a href="/site/html/login.php" title="entrar"> Login </a></li>
                    <li> <a href="/site/html/perfil.php" title="perfil"> Perfil </a></li>
                    <li> <a href="/site/html/mensagem.php" title="mensagem"> Mensagem </a> </li>
                </ul>    
            </nav> 
            
            <!--<figure > 
                <img id="logo" src="../estatico/img/logo.png">
            </figure> -->
            <!-- <nav class="menuTopo">
                <ul>
                    <li><a href="/site/html/inicio.php" title="home">Home</a></li>
                    <li><a href="/site/html/cadastro.php" title="cadastre-se"> Cadastrar-se </a></li>
                    <li><a href="/site/html/login.php" title="entrar"> Entrar </a></li>
                </ul>
            </nav> -->
        </header>
         