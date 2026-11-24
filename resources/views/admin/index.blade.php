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
        <!-- Botón Hamburguesa (se activa cuando no hay espacio en pantalla) -->
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
        <a href="{{ route('admin.logout') }}" class="admin-logout-btn d-none d-sm-inline-flex">
          <i class="bi bi-box-arrow-right"></i>
          <span>Salir</span>
        </a>
        <!-- Móvil: icono compacto -->
        <a href="{{ route('admin.logout') }}" class="admin-logout-btn d-sm-none px-2" title="Salir">
          <i class="bi bi-box-arrow-right"></i>
        </a>
      </div>

    </div>
  </nav>

  <!-- ========================================================================
       SIDEBAR ANIMADO OFFCANVAS (COLORES SÓLIDOS Y SOMBRAS SUTILES)
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
          <div class="sidebar-icon-box icon-dark-sky">
            <i class="bi bi-grid-fill"></i>
          </div>
          <span>Dashboard</span>
        </a>
      </div>

      <!-- Sección Módulos de Gestión -->
      <div class="sidebar-heading">Módulos de Gestión</div>
      <div class="sidebar-nav-list">
        
        <a href="#tours" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-teal">
            <i class="bi bi-flag-fill"></i>
          </div>
          <span>Tours</span>
        </a>

        <a href="#consejos" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-sky">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <span>Consejos y recomendaciones</span>
        </a>

        <a href="#hoteles" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-purple">
            <i class="bi bi-door-open-fill"></i>
          </div>
          <span>Hoteles</span>
        </a>

        <a href="#artesanias" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-amber">
            <i class="bi bi-palette-fill"></i>
          </div>
          <span>Artesanías</span>
        </a>

        <a href="#galeria" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-cyan">
            <i class="bi bi-images"></i>
          </div>
          <span>Galería de Imágenes</span>
        </a>

        <a href="#actividades" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-sky">
            <i class="bi bi-water"></i>
          </div>
          <span>Actividades Recreativas</span>
        </a>

        <a href="#cultura" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-orange">
            <i class="bi bi-bank2"></i>
          </div>
          <span>Cultura y Tradiciones</span>
        </a>

        <a href="#gastronomia" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-slate">
            <i class="bi bi-cup-hot-fill"></i>
          </div>
          <span>Gastronomía</span>
        </a>

        <a href="#atractivos" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-indigo">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <span>Atractivos turísticos</span>
        </a>

        <a href="#compras" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-rose">
            <i class="bi bi-bag-fill"></i>
          </div>
          <span>Compras y Souvenirs</span>
        </a>

        <a href="#transportacion" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-emerald">
            <i class="bi bi-truck-front-fill"></i>
          </div>
          <span>Transportación</span>
        </a>

        <a href="#papelera" class="sidebar-nav-item" data-bs-dismiss="offcanvas">
          <div class="sidebar-icon-box icon-dark-teal">
            <i class="bi bi-trash3-fill"></i>
          </div>
          <span>Papelera de Reciclaje</span>
        </a>

      </div>

    </div>

    <!-- Pie del Sidebar -->
    <div class="admin-sidebar-footer">
      <a href="{{ route('admin.logout') }}" class="btn-sidebar-logout">
        <i class="bi bi-box-arrow-right"></i>
        <span>Cerrar sesión</span>
      </a>
    </div>

  </aside>

  <!-- ========================================================================
       CONTENIDO PRINCIPAL DEL DASHBOARD (ADAPTABLE A TODO EL BODY)
       ======================================================================== -->
  <main class="admin-main container-fluid px-3 px-sm-4 px-xl-5 py-3 py-md-4">

    <!-- 1. TARJETA DE CABECERA (PANEL DE ADMINISTRACIÓN) -->
    <header class="admin-header-card mb-3 mb-md-4">
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
        <a href="{{ route('admin.logout') }}" class="btn-admin-logout">
          <i class="bi bi-box-arrow-right"></i>
          <span>Cerrar sesión</span>
        </a>
      </div>
    </header>

    <!-- 2. GRID DE CÁPSULAS CON CELDAS COMBINADAS (BENTO GRID) -->
    <section class="admin-metrics-container" aria-label="Métricas del sistema">
      <div class="admin-bento-grid">
        
        <!-- Cápsula 1: Visitas al sitio web (Celda combinada: Span 2 columnas) -->
        <article class="admin-stat-card bento-card-wide-start">
          <div class="stat-header">
            <div class="stat-icon-wrapper color-sky">
              <i class="bi bi-eye"></i>
            </div>
            <span class="stat-badge-weekly">
              <i class="bi bi-calendar4-week"></i>
              Semanal
            </span>
          </div>
          <div>
            <div class="stat-number">19</div>
            <div class="stat-label">Visitas al sitio web</div>
          </div>
          <div class="stat-live-strip">
            <span class="admin-status-dot"></span>
            <span>1 visualizando simultáneamente</span>
          </div>
        </article>

        <!-- Cápsula 2: Tours disponibles (Span 1 columna) -->
        <article class="admin-stat-card bento-card-single">
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
        </article>

        <!-- Cápsula 3: Hoteles registrados (Span 1 columna) -->
        <article class="admin-stat-card bento-card-single">
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
        </article>

        <!-- Cápsula 4: Artesanías (Span 1 columna) -->
        <article class="admin-stat-card bento-card-single">
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
        </article>

        <!-- Cápsula 5: Mensajes recibidos (Span 1 columna) -->
        <article class="admin-stat-card bento-card-single">
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
          </div>
        </article>

        <!-- Cápsula 6: Administrar página principal (Celda combinada: Span 2 columnas) -->
        <article class="admin-stat-card bento-card-wide-end">
          <div class="stat-header">
            <div class="stat-icon-wrapper color-slate">
              <i class="bi bi-layout-text-window-reverse"></i>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="stat-link-icon" title="Ir al sitio público">
              <i class="bi bi-box-arrow-up-right"></i>
            </a>
          </div>
          <div>
            <div class="stat-label" style="font-size: 0.98rem;">Administrar pagina principal.</div>
          </div>
        </article>

      </div>
    </section>

  </main>

  <!-- Bootstrap 5.3 JavaScript Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
