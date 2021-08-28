<?php

  session_start();

  include_once "config.php";
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    // vamos a chekear el email de usiario si es valido o no
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      //chequearemos si el email existe en la base de datos o no
      $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
      if(mysqli_num_rows($sql) > 0){//si el email existe
        echo "$email  - Éste email ya existe!";
      }else{
        //revisemos el archivo de si cargó del usuaio o no
        if(isset($_FILES['image'])){//si el archivo esta subido
          $img_name = $_FILES['image']['name'];//obteniendo que el usuario cargo el nombre de la imagen
          // $img_type = $_FILES['image']['type'];//obteniendo el tipo de imagen del ussuario
          $tmp_name = $_FILES['image']['tmp_name'];//es un tempoal nombre usado para guardar/mover el archivo en nuestro folder

          //vamos a explode imagen y tener la ultima extension de jpg a png
          $img_explode = explode('.', $img_name);
          $img_ext = end($img_explode);//aqui vamos a obtenmer la extension de un usuario crgando la imgen

          $extensions = ["png". "jpeg", "jpg"];//aqui alguno de los formatos que se aceptaran para la imagen\
          if(in_array($img_ext, $extensions) === true){//if el usuario cargaa una img_ext is es atrapado por cualquiera array extesions
            $time = time();//esto nos podria retornar current posix_times
                          //necesitamos este tiempo cuando cargamos mla imagen del susuario a nuestro folder para renobrar el archivo con el currewn tiempo
                          //asi que todo img archivo tiene un unico nombre
            //moveremos lo cargadoi por el usuarioa nuestrto foldr
            $new_img_name = $time.$img_name;

            if(move_uploaded_file($tmp_name, "images/".$new_img_name)){//si el usuario cargar una imagen lo muevea nustro folder satisfactoriamenter
              $status = "Activo ahora";//una ves el usuario este logeado su estado sera activo)
              $random_id = rand(time(), 10000000);//carearemos los ids de forma aleatoria

              //vamos a insertar toda la data dentro de la tabla
              $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                  VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
              if($sql2){//si la data fue einsertada
                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                if(mysqli_num_rows($sql3) > 0){
                  $row = mysqli_fetch_assoc($sql3);
                  $_SESSION['unique_id'] = $row['unique_id'];//usando esta session de los usuarios unique_id in otro php archivop
                  echo "success";
                }
              }else{
                echo "Por favor seleccionar una imagen!";
              }
            }

          }else{
            echo "Por favor seleccionar una imagen -jpg - jpeg - png!";
          }
        }else{
          echo "Algo salió mal!";
        }
      }
    }else{
      echo "$email - esto no es una validacion de email";
    }
  }else{
    echo "Todos los inputs son requeridos!";
  }

 ?>
