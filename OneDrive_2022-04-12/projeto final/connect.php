<?php
$conexao=mysqli_connect("localhost","root","");
if(mysqli_connect_errno())
{
    echo "Falha ao conectar: ".mysqli_connect_error(); die();
}
mysqli_select_db($conexao,"loja");
?>