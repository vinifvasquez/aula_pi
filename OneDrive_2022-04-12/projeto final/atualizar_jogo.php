<?php   
    require("connect.php");

	$nome_jogo = $_POST['nome_jogo'];
    $nome_novo_jogo = $_POST['nome_novo_jogo'];
   	
	$sql = "UPDATE `jogos` SET `nome_jogo`='$nome_novo_jogo' WHERE `nome_jogo` = '$nome_jogo'";	
    
    $resultado = mysqli_query($conexao, $sql);
    
    echo "Jogo alterado com sucesso";      
?>
<p><a href="form_cadastrar_jogo.html">Voltar</a>