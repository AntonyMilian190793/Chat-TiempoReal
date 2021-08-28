<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
  <body>

    <div class="wrapper">
    <section class="form signup">
      <header>App Chat Tiempo Real</header>
      <form action="#" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombres</label>
            <input type="text" name="fname" placeholder="Nombres" required>
          </div>
          <div class="field input">
            <label>Apellidos</label>
            <input type="text" name="lname" placeholder="Apellidos" required>
          </div>
        </div>
          <div class="field input">
            <label>E-mail</label>
            <input type="text" name="email" placeholder="Ingresar tu e-mail" required>
          </div>
          <div class="field input">
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="Nueva contraseña" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>Imagen</label>
            <input type="file" name="image" required>
          </div>
          <div class="field button">
            <input type="submit" value="Continuar en el chat">
          </div>
      </form>
      <div class="link">Inscrito? <a href="login.php">Iniciar Sesión</a> </div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
  </body>
</html>
