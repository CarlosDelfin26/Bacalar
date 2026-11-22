<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Panel de Administración — Bacalar Tourism</title>

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Estilos del Admin Panel -->
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">

  <!-- ========================================================================
       BARRA DE NAVEGACIÓN SUPERIOR
       ======================================================================== -->
  <nav class="admin-navbar sticky-top">
    <div class="container-fluid px-lg-4 d-flex align-items-center justify-content-between">
      
      <!-- Lado Izquierdo: Botón Hamburguesa + Logo -->
      <div class="d-flex align-items-center gap-3">
        <!-- Botón Hamburguesa (se activa en pantallas menores a 1400px o móviles) -->
        <button class="admin-hamburger-btn d-xxl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#adminSidebar" aria-controls="adminSidebar" aria-label="Abrir menú de navegación">
          <i class="bi bi-list"></i>
        </button>

        <a href="{{ route('admin.index') }}" class="admin-brand">
          <i class="bi bi-compass"></i>
          <span>Admin</span>
        </a>
      </div>

      <!-- Centro: Enlaces de escritorio (visibles únicamente en pantallas ultra-anchas >= 1400px sin deformarse) -->
      <div class="admin-nav-links d-none d-xxl-flex">
        <a href="{{ route('admin.index') }}" class="admin-nav-item active">
          <i class="bi bi-grid-fill"></i>
          <span>Dashboard</span>
        </a>
        <a href="#consejos" class="admin-nav-item">
          <i class="bi bi-envelope"></i>
          <span>Consejos</span>
        </a>
        <a href="#artesanias" class="admin-nav-item">
          <i class="bi bi-brush"></i>
          <span>Artesanías</span>
        </a>
        <a href="#galeria" class="admin-nav-item">
          <i class="bi bi-images"></i>
          <span>Galería</span>
        </a>
        <a href="#tours" class="admin-nav-item">
          <i class="bi bi-flag"></i>
          <span>Tours</span>
        </a>
        <a href="#hoteles" class="admin-nav-item">
          <i class="bi bi-building"></i>
          <span>Hoteles</span>
        </a>
        <a href="#actividades" class="admin-nav-item">
          <i class="bi bi-water"></i>
          <span>Actividades Recreativas</span>
        </a>
        <a href="#cultura" class="admin-nav-item">
          <i class="bi bi-bank"></i>
          <span>Cultura y Tradiciones</span>
        </a>
        <a href="#gastronomia" class="admin-nav-item">
          <i class="bi bi-cup-hot"></i>
          <span>Gastronomía</span>
        </a>
        <a href="#atractivos" class="admin-nav-item">
          <i class="bi bi-geo-alt"></i>
          <span>Atractivos turísticos</span>
        </a>
        <a href="#compras" class="admin-nav-item">
          <i class="bi bi-bag-check"></i>
          <span>Compras y Souvenirs</span>
        </a>
      </div>

      <!-- Lado Derecho: Botón Salir -->
      <div class="d-flex align-items-center gap-2">
        <!-- Escritorio: botón completo -->
        <a href="{{ route('home') }}" class="admin-logout-btn d-none d-sm-inline-flex">
          <i class="bi bi-box-arrow-right"></i>
          <span>Salir</span>
        </a>
        <!-- Móvil ultra compacto: icono de salida -->
        <a href="{{ route('home') }}" class="admin-logout-btn d-sm-none px-2" title="Salir">
          <i class="bi bi-box-arrow-right"></i>
        </a>
      </div>

    </div>
  </nav>

  <!-- ========================================================================
       SIDEBAR ANIMADO OFFCANVAS (DRAWER LATERAL RESPONSIVO)
       ======================================================================== -->
  <aside class="offcanvas offcanvas-start admin-sidebar-offcanvas" tabindex="-1" id="adminSidebar" aria-labelledby="adminSidebarLabel">
    
    <!-- Cabecera del Sidebar -->
    <div class="admin-sidebar-header">
      <a href="{{ route('admin.index') }}" class="admin-sidebar-brand" id="adminSidebarLabel">
        <i class="bi bi-compass"></i>
        <span>Admin Bacalar</span>
      </a>
      <button type="button" class="sidebar-close-btn" data-bs-dismiss="offcanvas" aria-label="Cerrar menú">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>

    <!-- Cuerpo del Sidebar -->
    <div class="admin-sidebar-body">
      
      <!-- Tarjeta de sesión de usuario -->
      <div class="sidebar-user-card">
        <div class="sidebar-avatar">
          AD
        </div>
        <div>
          <div class="fw-bold text-white small">Administrador</div>
          <div class="d-flex align-items-center gap-1 small text-success" style="font-size: 0.75rem;">
            <span class="admin-status-dot"></span>
            <span>Sistema en línea</span>
          </div>
        </div>
      </div>

      <!-- Sección Principal -->
      <div class="sidebar-heading">Principal</div>
      <div class="sidebar-nav-list mb-3">
        <a href="{{ route('admin.index') }}" class="sidebar-nav-item active">
          <div class="sidebar-icon-box color-sky">
            <i class="bi bi-grid-fill"></i>
          </div>
          <span>Dashboard</span>
        </a>
      </div>

      <!-- Sección Módulos de Gestión -->
      <div class="sidebar-heading">Módulos de Gestión</div>
      <div class="sidebar-nav-list">
        
        <a href="#tours" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-teal">
            <i class="bi bi-flag"></i>
          </div>
          <span>Tours</span>
        </a>

        <a href="#consejos" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-sky">
            <i class="bi bi-envelope"></i>
          </div>
          <span>Consejos y recomendaciones</span>
        </a>

        <a href="#hoteles" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-purple">
            <i class="bi bi-door-open"></i>
          </div>
          <span>Hoteles</span>
        </a>

        <a href="#artesanias" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-amber">
            <i class="bi bi-palette"></i>
          </div>
          <span>Artesanías</span>
        </a>

        <a href="#galeria" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-cyan">
            <i class="bi bi-images"></i>
          </div>
          <span>Galería de Imágenes</span>
        </a>

        <a href="#actividades" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-sky">
            <i class="bi bi-water"></i>
          </div>
          <span>Actividades Recreativas</span>
        </a>

        <a href="#cultura" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-orange">
            <i class="bi bi-bank"></i>
          </div>
          <span>Cultura y Tradiciones</span>
        </a>

        <a href="#gastronomia" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-slate">
            <i class="bi bi-cup-hot"></i>
          </div>
          <span>Gastronomía</span>
        </a>

        <a href="#atractivos" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-indigo">
            <i class="bi bi-geo-alt"></i>
          </div>
          <span>Atractivos turísticos</span>
        </a>

        <a href="#compras" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-rose">
            <i class="bi bi-bag-check"></i>
          </div>
          <span>Compras y Souvenirs</span>
        </a>

        <a href="#transportacion" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-emerald">
            <i class="bi bi-truck"></i>
          </div>
          <span>Transportación</span>
        </a>

        <a href="#papelera" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box color-teal">
            <i class="bi bi-trash3"></i>
          </div>
          <span>Papelera de Reciclaje</span>
        </a>

      </div>

    </div>

    <!-- Pie del Sidebar -->
    <div class="admin-sidebar-footer">
      <a href="{{ route('home') }}" class="btn-sidebar-logout">
        <i class="bi bi-box-arrow-right"></i>
        <span>Cerrar sesión</span>
      </a>
    </div>

  </aside>

  <!-- ========================================================================
       CONTENIDO PRINCIPAL DEL DASHBOARD
       ======================================================================== -->
  <main class="container-fluid px-3 px-sm-4 px-lg-5 py-4" style="max-width: 1440px;">

    <!-- 1. TARJETA DE CABECERA (PANEL DE ADMINISTRACIÓN) -->
    <header class="admin-header-card">
      <div>
        <h1 class="admin-header-title">
          <span>Panel de Administración</span>
          <span class="admin-status-badge">
            <span class="admin-status-dot"></span>
            Sistema en línea
          </span>
        </h1>
        <p class="admin-header-sub">Sesión iniciada</p>
      </div>

      <div>
        <a href="{{ route('home') }}" class="btn-admin-logout">
          <i class="bi bi-box-arrow-right"></i>
          <span>Cerrar sesión</span>
        </a>
      </div>
    </header>

    <!-- 2. TARJETAS DE MÉTRICAS (GRID PRINCIPAL) -->
    <section class="row g-3 mb-4" aria-label="Métricas del sistema">
      
      <!-- Card Izquierda: Visitas al sitio web (Ancho 5 columnas en desktop) -->
      <div class="col-12 col-lg-5">
        <div class="admin-stat-card">
          <div>
            <div class="stat-header">
              <div class="stat-icon-wrapper color-sky">
                <i class="bi bi-eye"></i>
              </div>
              <span class="stat-badge-weekly">
                <i class="bi bi-calendar4-week"></i>
                Semanal
              </span>
            </div>
            <div class="stat-number">19</div>
            <div class="stat-label">Visitas al sitio web</div>
          </div>
          <div class="stat-live-strip">
            <span class="admin-status-dot"></span>
            <span>1 visualizando simultáneamente</span>
          </div>
        </div>
      </div>

      <!-- Columna Derecha: 5 métricas compactas (Ancho 7 columnas en desktop) -->
      <div class="col-12 col-lg-7">
        <div class="row g-3">
          
          <!-- Tours disponibles -->
          <div class="col-12 col-sm-6">
            <div class="admin-stat-card">
              <div class="stat-header">
                <div class="stat-icon-wrapper color-teal">
                  <i class="bi bi-flag"></i>
                </div>
                <a href="#tours" class="stat-link-icon" title="Ver tours">
                  <i class="bi bi-box-arrow-up-right"></i>
                </a>
              </div>
              <div>
                <div class="stat-number">31</div>
                <div class="stat-label">Tours disponibles</div>
                <p class="stat-subtext">Aventuras y náuticos</p>
              </div>
            </div>
          </div>

          <!-- Hoteles registrados -->
          <div class="col-12 col-sm-6">
            <div class="admin-stat-card">
              <div class="stat-header">
                <div class="stat-icon-wrapper color-purple">
                  <i class="bi bi-door-open"></i>
                </div>
                <a href="#hoteles" class="stat-link-icon" title="Ver hoteles">
                  <i class="bi bi-box-arrow-up-right"></i>
                </a>
              </div>
              <div>
                <div class="stat-number">6</div>
                <div class="stat-label">Hoteles registrados</div>
                <p class="stat-subtext">En el sistema</p>
              </div>
            </div>
          </div>

          <!-- Artesanías -->
          <div class="col-12 col-sm-4">
            <div class="admin-stat-card">
              <div class="stat-header">
                <div class="stat-icon-wrapper color-amber">
                  <i class="bi bi-palette"></i>
                </div>
                <a href="#artesanias" class="stat-link-icon" title="Ver artesanías">
                  <i class="bi bi-box-arrow-up-right"></i>
                </a>
              </div>
              <div>
                <div class="stat-number">10</div>
                <div class="stat-label">Artesanías</div>
                <p class="stat-subtext">Unidades en exposición.</p>
              </div>
            </div>
          </div>

          <!-- Mensajes recibidos -->
          <div class="col-12 col-sm-4">
            <div class="admin-stat-card">
              <div class="stat-header">
                <div class="stat-icon-wrapper color-rose">
                  <i class="bi bi-envelope"></i>
                </div>
                <a href="#mensajes" class="stat-link-icon" title="Ver mensajes">
                  <i class="bi bi-box-arrow-up-right"></i>
                </a>
              </div>
              <div>
                <div class="stat-number">10</div>
                <div class="stat-label">Mensajes recibidos</div>
                <p class="stat-subtext">Bandeja de contacto</p>
              </div>
            </div>
          </div>

          <!-- Administrar página principal -->
          <div class="col-12 col-sm-4">
            <div class="admin-stat-card">
              <div class="stat-header">
                <div class="stat-icon-wrapper color-slate">
                  <i class="bi bi-layout-text-window-reverse"></i>
                </div>
                <a href="{{ route('home') }}" target="_blank" class="stat-link-icon" title="Ir al sitio público">
                  <i class="bi bi-box-arrow-up-right"></i>
                </a>
              </div>
              <div class="mt-3">
                <div class="stat-label" style="font-size: 0.92rem;">Administrar pagina principal.</div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!-- 3. MÓDULOS DE ACCIÓN Y GESTIÓN (GRID 3 COLUMNAS) -->
    <section class="row g-3" aria-label="Módulos de gestión">
      
      <!-- 1. Gestión de Tours -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#gestion-tours" class="admin-action-card">
          <div class="action-icon-box color-teal">
            <i class="bi bi-flag"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Gestión de Tours</h2>
            <p class="action-desc">Administra cards y modales de subpáginas (náuticos, ruinas, etc.).</p>
          </div>
        </a>
      </div>

      <!-- 2. Consejos y recomendaciones -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#consejos" class="admin-action-card">
          <div class="action-icon-box color-sky">
            <i class="bi bi-envelope"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Consejos y recomendaciones.</h2>
            <p class="action-desc">Administración de tips y recomendaciones para viajeros.</p>
          </div>
        </a>
      </div>

      <!-- 3. Gestión de Hoteles -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#gestion-hoteles" class="admin-action-card">
          <div class="action-icon-box color-purple">
            <i class="bi bi-door-open"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Gestión de Hoteles</h2>
            <p class="action-desc">Administra tarifas, imágenes, puntuaciones y amenidades.</p>
          </div>
        </a>
      </div>

      <!-- 4. Artesanías -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#artesanias" class="admin-action-card">
          <div class="action-icon-box color-amber">
            <i class="bi bi-palette"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Artesanías</h2>
            <p class="action-desc">Gestiona catálogo de artesanías.</p>
          </div>
        </a>
      </div>

      <!-- 5. Galería de Imágenes -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#galeria" class="admin-action-card">
          <div class="action-icon-box color-cyan">
            <i class="bi bi-images"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Galería de Imágenes</h2>
            <p class="action-desc">Sube y organiza material fotográfico de alta resolución.</p>
          </div>
        </a>
      </div>

      <!-- 6. Transportación -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#transportacion" class="admin-action-card">
          <div class="action-icon-box color-emerald">
            <i class="bi bi-truck"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Transportación</h2>
            <p class="action-desc">Control de transportes disponibles.</p>
          </div>
        </a>
      </div>

      <!-- 7. Papelera de Reciclaje -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#papelera" class="admin-action-card">
          <div class="action-icon-box color-teal">
            <i class="bi bi-trash3"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Papelera de Reciclaje</h2>
            <p class="action-desc">Restauración y purga segura de elementos eliminados.</p>
          </div>
        </a>
      </div>

      <!-- 8. Cultura y tradiciones -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#cultura" class="admin-action-card">
          <div class="action-icon-box color-orange">
            <i class="bi bi-bank"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Cultura y tradiciones</h2>
            <p class="action-desc">Restauración y purga segura de elementos eliminados.</p>
          </div>
        </a>
      </div>

      <!-- 9. Gastronomía -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#gastronomia" class="admin-action-card">
          <div class="action-icon-box color-slate">
            <i class="bi bi-cup-hot"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Gastronomía</h2>
            <p class="action-desc">Restauración y purga segura de elementos eliminados.</p>
          </div>
        </a>
      </div>

      <!-- 10. Atractivos turísticos -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="#atractivos" class="admin-action-card">
          <div class="action-icon-box color-indigo">
            <i class="bi bi-geo-alt"></i>
          </div>
          <div class="action-content">
            <h2 class="action-title">Atractivos turísticos</h2>
            <p class="action-desc">Restauración y purga segura de elementos eliminados.</p>
          </div>
        </a>
      </div>

    </section>

  </main>

  <!-- Bootstrap 5.3 JavaScript Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
