<?php

include_once("CONEXAO.php");

$nome = filter_input (INPUT_POST, 'p_nome', FILTER_SANITIZE_STRING);
$tel = filter_input (INPUT_POST, 'p_tel', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input (INPUT_POST, 'p_ema', FILTER_SANITIZE_EMAIL);
$idade = filter_input (INPUT_POST, 'p_ida', FILTER_SANITIZE_NUMBER_INT);
$genero = filter_input (INPUT_POST, 'p_gen', FILTER_SANITIZE_STRING);
$denuncia = filter_input (INPUT_POST, 'dnc', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (p_nome, p_tel, p_ema, p_ida, p_gen, dnc, created) VALUES ('$nome', '$tel', '$email', '$idade', '$genero', '$denuncia', NOW())";
$resultado_usuario = mysqli_query ($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
	header("Location: OBG.html");
} else {
	header("Location: OBG.html");
}
?>