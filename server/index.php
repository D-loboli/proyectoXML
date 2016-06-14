<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halo</title>
  </head>
  <body>
    <h1>Titulo Raro</h1>
    <form action="controlador/validar.php" method="post">
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Usuario:"
                      required="required"
                      >
                      <br>
                    <input
                      type="password"
                      name="txtPass"
                      placeholder="Contraseña:"
                      required="required"
                      >
                      <br>
                    <input
                      type="submit"
                      class="btn btn-info"
                      name="btnIniciar"
                      value="Iniciar sesión"
                      >
                  </form>

    <a href="model/registrar">registro</a>

  </body>
</html>
