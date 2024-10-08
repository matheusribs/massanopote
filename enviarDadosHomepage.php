<?php

include_once "conexaoBanco.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$query_setore = "INSERT INTO tbLeads (nome, email, telefone) 
VALUES ('$nome','$email', '$telefone')";

if ($conn->query($query_setore) === TRUE) {
    //header('Location: http://127.0.0.1/impecx/index.html');
  } else {
    //echo "Error: " . $query_colaborador . "<br>" . $conn->error;
  }  


  $conn->close();



?>
