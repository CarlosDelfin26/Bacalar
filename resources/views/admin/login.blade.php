<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceso al Panel de Administración — Bacalar Tourism</title>

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3 CSS & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Estilos del Admin y Pantalla de Acceso -->
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body admin-login-body">

  <main class="admin-login-wrapper">
    <div class="admin-login-card">
      
      <!-- Cabecera de la tarjeta con identidad de marca del prototipo -->
      <div class="admin-login-header">
        <div class="login-brand-icon">
          <i class="bi bi-shield-lock-fill"></i>
        </div>
        <h1 class="admin-login-title">Panel de Administración</h1>
        <p class="admin-login-subtitle">Bacalar Tourism • Acceso Privado</p>
        
        
      </div>

      <!-- Notificación de estado de sesión (por ejemplo tras cerrar sesión) -->
      @if (session('status'))
        <div class="admin-login-alert alert-status" role="alert">
          <i class="bi bi-check-circle-fill"></i>
          <span>{{ session('status') }}</span>
        </div>
      @endif

      <!-- Errores de validación / contraseña incorrecta -->
      @if ($errors->any())
        <div class="admin-login-alert alert-error" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <div>
            @foreach ($errors->all() as $error)
              <p class="mb-0">{{ $error }}</p>
            @endforeach
          </div>
        </div>
      @endif

      <!-- Formulario de autenticación -->
      <form action="{{ route('admin.login.submit') }}" method="POST" class="admin-login-form" novalidate>
        @csrf

        <div class="mb-3">
          <label for="admin-password" class="form-label admin-input-label">
            <i class="bi bi-key-fill me-1 text-primary"></i> Contraseña de acceso
          </label>
          <div class="input-group admin-password-group">
            <input 
              type="password" 
              name="password" 
              id="admin-password" 
              class="form-control admin-password-input @error('password') is-invalid @enderror" 
              placeholder="••••••••" 
              required 
              autofocus
            >
            <button class="btn admin-toggle-pass" type="button" id="btnTogglePassword" aria-label="Mostrar u ocultar contraseña">
              <i class="bi bi-eye" id="toggleIcon"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="btn btn-admin-primary w-100">
          <span>Ingresar al panel</span>
          <i class="bi bi-arrow-right"></i>
        </button>
      </form>

      <!-- Pie de la tarjeta -->
      <div class="admin-login-footer">
        <a href="{{ route('home') }}" class="btn-back-home">
          <i class="bi bi-arrow-left"></i>
          <span>Volver al sitio web</span>
        </a>
      </div>

    </div>
  </main>

  <!-- Script para alternar visibilidad de contraseña -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const btnToggle = document.getElementById('btnTogglePassword');
      const passInput = document.getElementById('admin-password');
      const toggleIcon = document.getElementById('toggleIcon');

      if (btnToggle && passInput && toggleIcon) {
        btnToggle.addEventListener('click', function () {
          const isPassword = passInput.type === 'password';
          passInput.type = isPassword ? 'text' : 'password';
          toggleIcon.className = isPassword ? 'bi bi-eye-slash' : 'bi bi-eye';
        });
      }
    });
  </script>
</body>
</html>

