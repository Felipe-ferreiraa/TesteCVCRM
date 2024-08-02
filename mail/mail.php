<?php
//Variáveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
// A mensagem
$message = "Line 1\r\nLine 2\r\nLine 3";

// Se as linhas forem maiores que 70 caracteres, deve-se usar wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envia
//mail('felipe.ferreira.da.silva@outlook.com', 'teste', $message);
echo $nome
?>
