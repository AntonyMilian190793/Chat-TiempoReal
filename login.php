<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>

  <body>

    <div class="wrapper">
    <section class="form login">
      <header>App Chat Tiempo Real</header>
      <form action="#">
        <div class="error-txt"></div>
        <div class="name-details">
        </div>
          <div class="field input">
            <label>E-mail</label>
            <input type="text" name="email" placeholder="Ingresar tu e-mail">
          </div>
          <div class="field input">
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="Ingresar contraseña">
            <i class="fas fa-eye"></i>
          </div>

          <div class="field button">
            <input type="submit" value="Continuar en el chat">
          </div>
      </form>
      <div class="link">Aún no inscrito? <a href="index.php">Registrase</a> </div>
    </section>
  </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

  </body>
</html>
