<?php

    require_once("connection/conexao.php");

    $msg = false;

 if(isset($_POST['Salvar'])):

      $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

      $novo_nome = uniqid().".$extensao";
      $diretorio = "../upload/";
      $temporario = $_FILES['arquivo']['tmp_name'];

      if(move_uploaded_file($temporario, $diretorio.$novo_nome)):

        $mensagem[] = "Upload Feito Com Êxito!";
      
      else:
        $mensagem[] = "Erro, não foi possivel fazer o upload";
      endif;
endif;

?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../styles/stylesexta.css">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="../js/jssext.js"></script>
		<link rel="icon" type="imagem/ico" href="../png/sextaico.png" />



	<title>~ Lá Mafia</title>
	
	</head>
	<body>
<section>

<nav id="menu">
    <ul>
    	 <div class="dropdown1">
        <li><a href="sexta.php"><img src="../png/wolfico.png" width="40" height="40">Início</a></li>
        <div class="dropdown-content1">
  <a href="../index.php"><img src="../png/wolfico.png" width="40" height="40">>Central<</a>
  <a href="upload.php"><img src="../png/wolfico.png" width="40" height="40">>Upload<</a>
  </div>
  </div>


        <div class="dropdown1">
        <li><a href="PROJETOragnarok/builds.php"><img src="../png/wolfico.png" width="40" height="40">Builds</a></li>
          <div class="dropdown-content1">
  <a href="PROJETOragnarok/espadachim.php"><img src="../ragcon/1.png" >Espadachins</a>
  <a href="PROJETOragnarok/mago.php"><img src="../ragcon/2.png">Magos</a>
  <a href="PROJETOragnarok/arqueiro.php"><img src="../ragcon/3.png">Arqueiros</a>
  <a href="PROJETOragnarok/mercador.php"><img src="../ragcon/4.png">Mercadores</a>
  <a href="PROJETOragnarok/gatuno.php"><img src="../ragcon/5.png">Gatunos</a>
  <a href="PROJETOragnarok/novico.php"><img src="../ragcon/6.png">Noviços</a>

  </div>
  </div>

          <div class="dropdown1">
        <li><a href="PROJETOragnarok/instancias.php"><img src="../png/wolfico.png" width="40" height="40">Instâncias</a></li>
                  <div class="dropdown-content1">
  <a href="https://browiki.org/wiki/Mora" target="_blank"><img src="../../ragcon/Imagemdequest.png" width="25" height="25"><b><i>Mora LVL(100)</i></b></a>
  <a href="https://browiki.org/wiki/Glast_Heim" target="_blank"><img src="../../ragcon/Imagemdequest.png" width="25" height="25"><b><i>OGH LVL(130)</i></b></a>
  <a href="https://browiki.org/wiki/F%C3%A1brica_do_Terror" target="_blank"><img src="../../ragcon/Imagemdequest.png" width="25" height="25"><b><i>Celine LVL(140)</i></b></a>
  </div>
  </div>
  		 <div class="dropdown1">
        <li><a href="#"><img src="../png/wolfico.png" width="40" height="40">Zeny</a></li>
         <div class="dropdown-content1">
  <a href="#"><img src="../png/wolfico.png" width="40" height="40">Link 1</a>
  <a href="#"><img src="../png/wolfico.png" width="40" height="40">Link 2</a>
  <a href="#"><img src="../png/wolfico.png" width="40" height="40">Link 3</a>
  </div>
  </div>

         <div class="dropdown1">
        <li><a href="#"><img src="../png/wolfico.png" width="40" height="40">Contato</a></li>
         <div class="dropdown-content1">
  <a href="#"><img src="../png/wolfico.png" width="40" height="40">Link 1</a>
  <a href="#"><img src="../png/wolfico.png" width="40" height="40">Link 2</a>
  <a href="#"><img src="../png/wolfico.png" width="40" height="40">Link 3</a>
  </div>
  </div>

    </ul>
</nav>
</section>
<div  class="centersite">
	<h2 class="glow">Bem-Vindo!</h2><br>
  <div>

      <h1>Upload de Arquivos</h1>
      <?php if($msg != false) echo "<p> $msg </p>"; ?>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        Arquivo: <input type="file" required name="arquivo">
        <input type="submit" name="Salvar">
        </form>
  </div>
  <br>
</div>
	</body>
</html>