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
        <section class="buscar">
        <?php 
        $sql = "SELECT * FROM maquinasconfig";
        
        $res = $conn->query($sql);

        $qtd = $res->num_rows;
        if ($qtd > 0){
            print "<div class='tabelaMaquinas'>";
            print "<table>";
            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->usuario."</td>";
                print "<td>".$row->ramal."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->processador."</td>";
                print "<td>".$row->ram."</td>";
                print "<td>".$row->hd."</td>";
                print "<td>".$row->os."</td>";
                print "</tr>";

            }
            print "</table>";
            print "</div>";
        }else{
            print"<script>alert('Dados não encontrados');
            location.href = 'cadastroMaquina.php';
            </script>";
        }
        ?>
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
   

    <script src='./src/js/main.js'></script>
</body>

</html>