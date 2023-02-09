<?php 

switch ($_REQUEST["acao"]) {
  case 'cadastrar':
    $usuario = $_POST['usuario'];
    $ramal = $_POST['ramal'];
    $processador = $_POST['processador'];
    $ram = $_POST['ram'];
    $hd = $_POST['hd'];
    $os = $_POST['os'];
    $email = $_POST['email'];

    $sql = "INSERT INTO maquinasconfig(usuario, ramal, processador, ram, hd, os, email) VALUES 
    ('{$usuario}', '{$ramal}', '{$processador}', '{$ram}', '{$hd}', '{$os}', '{$email}')";

   
    $res = $conn->query($sql);
    if($res==true){
      print "<script>location.href='index.php'</script>";
    }
    break;
  case 'editar':
    # code...
    break;
  case 'excluir':
    # code...
    break;
}
