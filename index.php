<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inicio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./src/css/main.css'>

</head>

<body>
    <header class="header">
        <nav class="menu">
            <a href="index.php"><img src="./src/image/logoServi.png" alt=""></img></a>
            <ul>
                <li class="item active"><a href="index.php">Inicio</a></li>
                <li class="item"><a href="?page=buscar">Buscar</a></li>
                <li class="item"><a href="?page=cadastrar">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    <?php
    // INCLUDES
    include("config.php");
    // SWITCH
    switch (@$_REQUEST["page"]) {
        case "buscar":
            include("buscarMaquina.php");
           
            break;
        case "cadastrar":
            include("cadastroMaquina.php");
            break;
        case "salvar":
            include("salvar-usuario.php");
            break;
            default: 
            print ("<main><section class='inicio'><div class='imgInicio'><img src='./src/image/Illustration.svg' alt=''></div>
                <div class='descInicio'>
                    <h1><span class='fancy'>Relação de máquinas</span></h1>
                    <h3>Seja bem-vindo</h3>
                    <p>Esse é meu primeiro projeto com <strong>PHP</strong> e <strong>CRUD</strong></p>
                </div>
                <div class='fundo'>
                    <svg class='bola' width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <circle cx='50' cy='50' r='50' fill='#1DD646' />
                    </svg>
                    <svg class='bola1' width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <circle cx='50' cy='50' r='50' fill='#1DD646' />
                    </svg>
                </div>
            </section>
        </main>");
    }
    ?>
    <!--  -->


    <script src='./src/js/main.js'></script>
</body>

</html>