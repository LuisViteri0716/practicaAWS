<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login y Registro</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="estilos.css">
</head>
<body class="bg-light">
  <!-- Contenedor principal con centrado vertical y horizontal -->
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!-- Tarjeta Bootstrap -->
    <div class="card shadow-lg p-4 w-100" style="max-width: 400px;">
      <!-- Encabezado con pestañas -->
      <ul class="nav nav-tabs mb-3" id="formTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Iniciar Sesión</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Registrarse</button>
        </li>
      </ul>

      <!-- Contenido de las pestañas -->
      <div class="tab-content" id="formTabsContent">
        <!-- Formulario de inicio de sesión -->
        <div class="tab-pane fade show active" id="login" role="tabpanel">
          <form id="loginForm">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="loginEmail" required>
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="loginPassword" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
          </form>
        </div>

        <!-- Formulario de registro -->
        <div class="tab-pane fade" id="register" role="tabpanel">
          <form id="registerForm" action="controller/register_user.php" method="POST">
            <div class="mb-3">
              <label for="registerUsername" class="form-label">Nombre de Usuario</label>
              <input type="text" class="form-control" id="registerUsername" name= "nombre_usuario" required>
            </div>
            <div class="mb-3">
              <label  for="registerEmail" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="registerEmail" name= "correo" required>
            </div>
            <div class="mb-3">
              <label for="registerPassword" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="registerPassword" name="contrasena" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS y dependencias -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Script personalizado -->
  <script src="script.js"></script>
</body>
</html>
