<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: index.php?erro=1");
}
require_once 'bd.php'; //Include da Classe de Conexão com o Banco

$id_usuario = $_SESSION["id_usuario"];
$seguir_id_usuario = $_POST["seguir_id_usuario"];
//Intanciando o objeto de conexão com banco
$ini_conn = new bd();
$conexao = $ini_conn->conecta_mysql();
//INSTRUÇÕES SQL
//INSERT
$sql = "delete from usuarios_seguidores where id_usuario = $id_usuario and seguindo_id_usuario = $seguir_id_usuario";

mysqli_query($conexao, $sql);
?>

