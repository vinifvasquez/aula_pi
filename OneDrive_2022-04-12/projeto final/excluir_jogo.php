<?php   
    require("connect.php");

	$codigo_jogo = $_POST['codigo_jogo'];
	
	$sql = "DELETE FROM `jogos` WHERE codigo_jogo = $codigo_jogo";	
    
    $resultado = mysqli_query($conexao, $sql);
    
    echo "Jogo excluido com sucesso";      
?>
<p><a href="form_cadastrar_jogo.html">Voltar</a>