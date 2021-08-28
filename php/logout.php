<?php

  session_start();

  if(isset($_SESSION['unique_id'])){//if usuario esta logeado entonces lo moestraremos la pagina de logeo
    include_once "config.php";
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if(isset($logout_id)){//si cerro sesion id
      $status = "Offline now";
      //una vez qye se haya cerrado sesion se actualizara el estadi de fira de linea y el gfromuadiose actualizara
      //entonces pasatrmos a actualizar el estatus de activo a si no esta activo el deslogeo fue satisfactorio
      $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$logout_id}");

      if($sql){
        session_unset();
        session_destroy();
        header("location: ../login.php");
      }
    }else{
      header("location: ../users.php");
    }
  }else{
    header("location: ../login.php");
  }
 ?>
