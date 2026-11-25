<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Recreativas | Bacalar</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone+Bounce:wght@400;500&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,700&family=Inter:wght@400;500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS del proyecto -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/pending.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
    <!-- =====================================================
        PORTADA
    ====================================================== -->
    <header class="hero-section" id="hero">
        <!-- Imagen de portada -->
        <div class="hero-media-container">
            <img src="../img/hero/hero-bg-actividades-recreativas.webp" alt="Actividades recreativas en Bacalar" class="hero-bg-image">
        </div>
        <!-- Capa oscura -->
        <div class="hero-overlay"></div>
        <!-- Contenido de portada -->
        <div class="hero-content container-bacalar">
            <div class="hero-center-brand">
                <h1 class="section-title title--light text-center" style="text-shadow: 2px 2px #000000;">
                    Actividades Recreativas
                </h1>
            </div>
        </div>
    </header>
    <!-- =====================================================
        MENU DE NAVEGACIÓN
    ====================================================== -->
    <nav class="secondary-nav-section" id="sec-nav" aria-label="Navegación secundaria de secciones de Bacalar">
    <div class="container-bacalar secondary-nav-container">
        <div class="secondary-nav-scroll-wrapper" tabindex="0" role="region" aria-label="Enlaces de navegación con desplazamiento horizontal">
            <ul class="secondary-nav-list" role="menubar">
            <li class="secondary-nav-item" role="none">
                <a href="../index.html" class="nav-link-sec" role="menuitem" aria-current="page" data-spy="galeria">Inicio</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="#naturaleza" class="nav-link-sec" role="menuitem" data-spy="naturaleza">Naturaleza</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="#cultura" class="nav-link-sec" role="menuitem" data-spy="cultura">Historia</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="#monumentos" class="nav-link-sec" role="menuitem" data-spy="monumentos">Monumentos</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="../pages/comunidades.html" class="nav-link-sec" role="menuitem" data-spy="comunidades">Comunidades</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="../pages/cultura-tradiciones.html" class="nav-link-sec" role="menuitem">Cultura y tradiciones</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="#naturaleza" class="nav-link-sec" role="menuitem">Atractivos</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="../pages/consejos-recomendaciones.html" class="nav-link-sec" role="menuitem">Consejos</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="../pages/gastronomia.html" class="nav-link-sec" role="menuitem">Gastronomía</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="../pages/actividades-recreativas.html" class="nav-link-sec active" role="menuitem">Actividades recreativas</a>
            </li>
            <li class="secondary-nav-item" role="none">
                <a href="../pages/compras-souvenirs.html" class="nav-link-sec" role="menuitem" data-spy="experiencias">Compras</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- =====================================================
        CONTENIDO PRINCIPAL
    ====================================================== -->
    <main>
        <section class="experiences-section">
            <div class="section-shell">
                <!-- ENCABEZADO -->
                <div class="section-heading">
                    <div class="section-eyebrow">Descubre Bacalar</div>
                    <h2 class="section-title">
                        Vive la aventura, descubre la magia y déjate
                        enamorar por las aguas de Bacalar.
                    </h2>
                </div>
                <!-- =================================================
                    TARJETAS DE ACTIVIDADES
                ================================================== -->
                <div class="container py-5">
                    <div class="row justify-content-center g-4">

                        <!-- Tarjeta 1 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="tour-card">
                                <div class="tour-image">
                                    <img src="../img/cart_actividades-recreativas/Cart-1.webp" alt="Paseo en lancha por la Laguna de Bacalar">
                                </div>
                                <div class="tour-content">
                                    <h2 class="tour-title">Paseos en lancha</h2>
                                    <p class="tour-description">Recorre la Laguna de los Siete Colores y disfruta sus paisajes.</p>
                                    <button type="button" class="tour-button" data-bs-toggle="modal" data-bs-target="#modalActividad1"> ↗ </button>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 2 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="tour-card">
                                <div class="tour-image">
                                    <img src="../img/cart_actividades-recreativas/Cart-2.webp" alt="Actividad recreativa en Bacalar">
                                </div>
                                <div class="tour-content">
                                    <h2 class="tour-title">Kayak</h2>
                                    <p class="tour-description">Explora las aguas tranquilas de la laguna mientras haces ejercicio.</p>
                                    <button type="button" class="tour-button" data-bs-toggle="modal" data-bs-target="#modalActividad2"> ↗ </button>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 3 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="tour-card">
                                <div class="tour-image">
                                    <img src="../img/cart_actividades-recreativas/Cart-3.webp" alt="Actividad recreativa en Bacalar">
                                </div>
                                <div class="tour-content">
                                    <h2 class="tour-title">Paddleboard</h2>
                                    <p class="tour-description">Disfruta de la laguna mientras mantienes el equilibrio sobre una tabla.</p>
                                    <button type="button" class="tour-button" data-bs-toggle="modal" data-bs-target="#modalActividad3"> ↗ </button>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 4 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="tour-card">
                                <div class="tour-image">
                                    <img src="../img/cart_actividades-recreativas/Cart-4.webp" alt="Actividad recreativa en Bacalar">
                                </div>
                                <div class="tour-content">
                                    <h2 class="tour-title">Ciclismo</h2>
                                    <p class="tour-description">Recorre las calles y alrededores de Bacalar en bicicleta.</p>
                                    <button type="button" class="tour-button" data-bs-toggle="modal" data-bs-target="#modalActividad4"> ↗ </button>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 5 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="tour-card">
                                <div class="tour-image">
                                    <img src="../img/cart_actividades-recreativas/Cart-5.webp" alt="Actividad recreativa en Bacalar">
                                </div>
                                <div class="tour-content">
                                    <h2 class="tour-title">Paseos en velero</h2>
                                    <p class="tour-description">El Balneario Municipal el Aserradero, en las orillas de la laguna de Bacalar.</p>
                                    <button type="button" class="tour-button" data-bs-toggle="modal" data-bs-target="#modalActividad5"> ↗ </button>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 6 -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="tour-card">
                                <div class="tour-image">
                                    <img src="../img/cart_actividades-recreativas/Cart-6.webp"
                                        alt="Actividad recreativa en Bacalar">
                                </div>
                                <div class="tour-content">
                                    <h2 class="tour-title">Jet ski</h2>
                                    <p class="tour-description">Disfruta de la adrenalina y la velocidad sobre el agua mientras vives una aventura.</p>
                                    <button type="button" class="tour-button" data-bs-toggle="modal" data-bs-target="#modalActividad6"> ↗ </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ========================================================================
        FOOTER (Nodo Figma 4:2037 — 1440 × 465 px)
    ======================================================================== -->
    <footer class="site-footer" id="footer" aria-labelledby="footer-brand">
        <div class="section-shell">
        <div class="footer-top">
            <div class="footer-brand-block">
            <p class="footer-brand" id="footer-brand">Bacalar</p>
            <p class="footer-tagline">Pueblo Mágico</p>
            <p class="footer-lema">Siete colores, una historia <span class="script-accent">viva</span>.</p>
            </div>
            <div class="footer-action">
            <p class="footer-cta-text">Tu siguiente historia comienza frente a la laguna.</p>
            <a href="#hero" class="btn-bacalar btn-bacalar--light">
                Descubrir Bacalar
                <span class="btn-icon" aria-hidden="true">→</span>
            </a>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="footer-bottom">
            <ul class="footer-social" aria-label="Redes sociales de Bacalar Tourism">
            <li>
                <a href="#" class="footer-social-link" aria-label="Instagram de Bacalar Tourism — enlace temporal">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="3" width="18" height="18" rx="5"/>
                    <circle cx="12" cy="12" r="4"/>
                    <path d="M17.5 6.5h.01"/>
                </svg>
                </a>
            </li>
            <li>
                <a href="#" class="footer-social-link" aria-label="X de Bacalar Tourism — enlace temporal">
                <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor" aria-hidden="true">
                    <path d="M18.9 2H22l-6.8 7.8L23.2 22h-6.3l-4.9-6.4L6.4 22H3.3l7.3-8.4L2.8 2h6.4l4.4 5.8L18.9 2zm-1.1 18.1h1.7L8.2 3.8H6.4l11.4 16.3z"/>
                </svg>
                </a>
            </li>
            </ul>

            <div class="footer-legal">
            <p>© <span id="footer-year">2026</span> Bacalar Tourism. Proyecto realizado por estudiantes de la Universidad Politécnica de Bacalar.</p>
            <p>Bacalar, Quintana Roo, México.</p>
            </div>
        </div>
        </div>
    </footer>

    <!-- =====================================================
        MODAL TURÍSTICO: PASEOS EN VELERO
    ====================================================== -->
    <!-- MODAL 1 -->
    <div class="modal fade" id="modalActividad1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-turistico-dialog">
            <div class="modal-content modal-turistico modal-fondo-1">
                <div class="modal-turistico-contenido">
                    <div class="modal-informacion">
                        <h2>PASEOS EN LANCHA</h2>
                        <p>Descubre la belleza de la Laguna de Bacalar mientras recorres sus aguas cristalinas y disfrutas de sus paisajes naturales.</p>
                        <div class="modal-datos">
                            <div class="modal-dato">
                                <i class="bi bi-calendar3"></i>
                                <div><h3>Fecha</h3><p>Todo el año</p></div>
                            </div>
                            <div class="modal-dato">
                                <i class="bi bi-geo-alt"></i>
                                <div><h3>Lugar</h3><p>Laguna de Bacalar</p></div>
                            </div>
                            <div class="modal-dato">
                                <i class="bi bi-people"></i>
                                <div><h3>Participantes</h3><p>Familias y grupos</p></div>
                            </div>
                            <div class="modal-dato">
                                <i class="bi bi-stars"></i>
                                <div><h3>Tipo de actividad</h3><p>Recreativa y turística</p></div>
                            </div>
                        </div>
                        <button class="modal-regresar" data-bs-dismiss="modal">
                            <i class="bi bi-arrow-left"></i> Regresar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL 2 -->
    <div class="modal fade" id="modalActividad2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-turistico-dialog">
            <div class="modal-content modal-turistico modal-fondo-2">
                <div class="modal-turistico-contenido">
                    <div class="modal-informacion">
                        <h2>PASEOS EN LANCHA</h2>
                        <p>Vive una experiencia diferente explorando los rincones más hermosos de la laguna y admirando sus diferentes tonalidades de azul.</p>
                        <div class="modal-datos">
                            <div class="modal-dato"><i class="bi bi-calendar3"></i><div><h3>Fecha</h3><p>Todo el año</p></div></div>
                            <div class="modal-dato"><i class="bi bi-geo-alt"></i><div><h3>Lugar</h3><p>Laguna de Bacalar</p></div></div>
                            <div class="modal-dato"><i class="bi bi-people"></i><div><h3>Participantes</h3><p>Familias y grupos</p></div></div>
                            <div class="modal-dato"><i class="bi bi-stars"></i><div><h3>Tipo de actividad</h3><p>Recreativa y turística</p></div></div>
                        </div>
                        <button class="modal-regresar" data-bs-dismiss="modal"><i class="bi bi-arrow-left"></i> Regresar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL 3 -->
    <div class="modal fade" id="modalActividad3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-turistico-dialog">
            <div class="modal-content modal-turistico modal-fondo-3">
                <div class="modal-turistico-contenido">
                    <div class="modal-informacion">
                        <h2>PASEOS EN LANCHA</h2>
                        <p>Conoce los atractivos naturales de Bacalar y disfruta de un recorrido rodeado de tranquilidad y naturaleza.</p>
                        <div class="modal-datos">
                            <div class="modal-dato"><i class="bi bi-calendar3"></i><div><h3>Fecha</h3><p>Todo el año</p></div></div>
                            <div class="modal-dato"><i class="bi bi-geo-alt"></i><div><h3>Lugar</h3><p>Laguna de Bacalar</p></div></div>
                            <div class="modal-dato"><i class="bi bi-people"></i><div><h3>Participantes</h3><p>Familias y grupos</p></div></div>
                            <div class="modal-dato"><i class="bi bi-stars"></i><div><h3>Tipo de actividad</h3><p>Recreativa y turística</p></div></div>
                        </div>
                        <button class="modal-regresar" data-bs-dismiss="modal"><i class="bi bi-arrow-left"></i> Regresar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL 4 -->
    <div class="modal fade" id="modalActividad4" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-turistico-dialog">
            <div class="modal-content modal-turistico modal-fondo-4">
                <div class="modal-turistico-contenido">
                    <div class="modal-informacion">
                        <h2>PASEOS EN LANCHA</h2>
                        <p>Disfruta de una aventura en la laguna y contempla los paisajes que hacen de Bacalar un destino único.</p>
                        <div class="modal-datos">
                            <div class="modal-dato"><i class="bi bi-calendar3"></i><div><h3>Fecha</h3><p>Todo el año</p></div></div>
                            <div class="modal-dato"><i class="bi bi-geo-alt"></i><div><h3>Lugar</h3><p>Laguna de Bacalar</p></div></div>
                            <div class="modal-dato"><i class="bi bi-people"></i><div><h3>Participantes</h3><p>Familias y grupos</p></div></div>
                            <div class="modal-dato"><i class="bi bi-stars"></i><div><h3>Tipo de actividad</h3><p>Recreativa y turística</p></div></div>
                        </div>
                        <button class="modal-regresar" data-bs-dismiss="modal"><i class="bi bi-arrow-left"></i> Regresar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL 5 -->
    <div class="modal fade" id="modalActividad5" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-turistico-dialog">
            <div class="modal-content modal-turistico modal-fondo-5">
                <div class="modal-turistico-contenido">
                    <div class="modal-informacion">
                        <h2>PASEOS EN LANCHA</h2>
                        <p>Explora la laguna, conecta con la naturaleza y disfruta de una experiencia turística inolvidable.</p>
                        <div class="modal-datos">
                            <div class="modal-dato"><i class="bi bi-calendar3"></i><div><h3>Fecha</h3><p>Todo el año</p></div></div>
                            <div class="modal-dato"><i class="bi bi-geo-alt"></i><div><h3>Lugar</h3><p>Laguna de Bacalar</p></div></div>
                            <div class="modal-dato"><i class="bi bi-people"></i><div><h3>Participantes</h3><p>Familias y grupos</p></div></div>
                            <div class="modal-dato"><i class="bi bi-stars"></i><div><h3>Tipo de actividad</h3><p>Recreativa y turística</p></div></div>
                        </div>
                        <button class="modal-regresar" data-bs-dismiss="modal"><i class="bi bi-arrow-left"></i> Regresar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL 6 -->
    <div class="modal fade" id="modalActividad6" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-turistico-dialog">
            <div class="modal-content modal-turistico modal-fondo-6">
                <div class="modal-turistico-contenido">
                    <div class="modal-informacion">
                        <h2>PASEOS EN LANCHA</h2>
                        <p>Vive Bacalar desde el agua y descubre la belleza de sus paisajes naturales en un recorrido especial.</p>
                        <div class="modal-datos">
                            <div class="modal-dato"><i class="bi bi-calendar3"></i><div><h3>Fecha</h3><p>Todo el año</p></div></div>
                            <div class="modal-dato"><i class="bi bi-geo-alt"></i><div><h3>Lugar</h3><p>Laguna de Bacalar</p></div></div>
                            <div class="modal-dato"><i class="bi bi-people"></i><div><h3>Participantes</h3><p>Familias y grupos</p></div></div>
                            <div class="modal-dato"><i class="bi bi-stars"></i><div><h3>Tipo de actividad</h3><p>Recreativa y turística</p></div></div>
                        </div>
                        <button class="modal-regresar" data-bs-dismiss="modal"><i class="bi bi-arrow-left"></i> Regresar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5.3 JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Scripts propios -->
    <script src="../js/main.js"></script>
</body>
</html>