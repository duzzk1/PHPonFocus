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
    <main>
        <section class="cadastro">
            <form action="?page=salvar" method="post">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="input__Pessoa">
                    <h3>Pessoa</h2>
                        <label for="usuario">Usuário</label>
                        <input type="text" id="usuario" name="usuario" autocomplete="off">
                        <label for="ramal">Ramal</label>
                        <input type="number" id="ramal" min="100" max="999" name="ramal" autocomplete="off">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autocomplete="off">
                </div>
                <div class="input__Maquina">
                    <h3>Máquina</h2>
                        <!-- PROCESSADOR -->
                        <label for="processador">Processador</label>
                        <select name="processador" id="processador">
                            <option value="Celeron® J1800">Celeron® J1800</option>
                            <option value="Celeron® J3060">Celeron® J3060</option>
                            <option value="Atom® D525">Atom® D525</option>
                            <option value="Core™ i3">Core™ i3</option>
                            <option value="Core™ i5">Core™ i5</option>
                            <option value="Core™ i7">Core™ i7</option>
                        </select>
                        <!-- RAM -->
                        <label for="ram">RAM</label>
                        <select name="ram" id="ram">
                            <option value="1GB">1GB</option>
                            <option value="2GB">2GB</option>
                            <option value="4GB">4GB</option>
                            <option value="6GB">6GB</option>
                            <option value="8GB">8GB</option>
                            <option value="16GB">16GB</option>
                        </select>
                        <!-- HD/SSD -->
                        <label for="hd">HD/SSD</label>
                        <select name="hd" id="hd">
                            <option value="80GB">80GB</option>
                            <option value="320GB">320GB</option>
                            <option value="500GB">500GB</option>
                            <option value="1TB">1TB</option>
                            <option value="SSD 240GB">SSD 240GB</option>
                            <option value="SSD 480GB">SSD 480GB</option>
                        </select>
                        <!-- OS -->
                        <label for="os">Sistema operacional</label>
                        <select name="os" id="os">
                            <option value="Windows 7">Windows 7</option>
                            <option value="Windows 8">Windows 8</option>
                            <option value="Windows 10">Windows 10</option>
                            <option value="Windows 11">Windows 11</option>
                            <option value="Linux">Linux</option>
                        </select>
                        <!-- ENVIAR -->
                        <button type="submit" name="enviar">Enviar</button>
                </div>
            </form>
           

            <div class="fundo">
            <svg class="bola" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="#1DD646" />
            </svg>
            <svg class="bola1" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="#1DD646" />
            </svg>
            </div>
        </section>
    </main>
    <footer>

    </footer>

    <script src='./src/js/main.js'></script>
</body>

</html>