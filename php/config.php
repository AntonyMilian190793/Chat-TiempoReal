<?php
  $conn = mysqli_connect("localhost", "root", "", "chat");

  if(!$conn){
    echo "Conexión éxitosa" . mysqli_connect_error();
  }

 ?>
