<?php
  $server = "127.0.0.1";
  $user = "fatecAcesso";
  $password = "conexaofatec";
  $database = "fatecindica";

  $conn = mysqli_connect($server, $user, $password, $database);
  
  if(!$conn){
    die("Conexão falhou: " . mysqli_connect_error());
  }
  else{
      mysqli_query($conn,"SET NAMES'utf8'");
      mysqli_query($conn,'SET character_set_connect=utf8');
      mysqli_query($conn,'SET character_set_client=utf8');
      mysqli_query($conn,'SET character_set_results=utf8');
      echo 'Conexão realizada com sucesso';
      

    } 
  

?>