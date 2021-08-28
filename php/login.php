<?php

  session_start();

  include_once "config.php";
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if(!empty($email) && !empty($password)){
    //vamos a chequear qque el usuario digite su usuario y contraseña y si esta en la bade de datos
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");

    if(mysqli_num_rows($sql) > 0){//si los usuarios sus credenciales son atrapadas
      $row = mysqli_fetch_assoc($sql);
      $status = "Activo ahora";
      //actualizamos el estatus del usuario si esta activo ahora
      $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
      if($sql2){
        $_SESSION['unique_id'] = $row['unique_id'];//usando esta session de los usuarios unique_id in otro php archivop
        echo "success";
      }
    }else{
      echo "Email o Contraseña incorrecta!";
    }
  }else{
    echo "Todos los campos son requeridos!";
  }

 ?>
