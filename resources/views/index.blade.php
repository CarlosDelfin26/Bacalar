<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bacalar Tourism — Pueblo Mágico | Laguna de los Siete Colores</title>
  <meta name="description" content="Portal oficial de turismo de Bacalar, Quintana Roo. Descubre la majestuosa Laguna de los Siete Colores, cenotes, historia, zonas arqueológicas y vivencias comunitarias.">
  
  <!-- Preconexión a Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Birthstone+Bounce:wght@400;500&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,700&family=Inter:wght@400;500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Hojas de estilos del proyecto -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>

  <!-- ========================================================================
       SECCIÓN 1: HERO (Nodo Figma 4:1820 — 1440 × 900 px)
       ======================================================================== -->
  <header class="hero-section" id="hero" role="banner">
    <h1 class="visually-hidden">Bacalar — Pueblo Mágico | Laguna de los Siete Colores</h1>
    
    <!-- 1. Contenedor de medios de fondo (Imagen de alta fidelidad / Video preparado) -->
    <div class="hero-media-container" aria-hidden="true">
      <!-- Imagen de fondo de alta fidelidad: Toma aérea de la laguna de Bacalar -->
      <img src="{{ asset('img/hero/hero-bg.jpg') }}" 
           alt="Vista aérea de la Laguna de los Siete Colores en Bacalar" 
           class="hero-bg-image">

      <!-- Espacio estructurado para video de fondo sin sonido (se habilitará en etapa posterior) -->
      <video class="hero-bg-video" 
             autoplay 
             muted 
             loop 
             playsinline 
             preload="none">
        <!-- El archivo se conectará en la etapa final mediante este atributo, sin generar una solicitud 404 mientras no exista. -->
        <source data-src="videos/hero/hero-bg.mp4" type="video/mp4">
      </video>

      <!-- Capa de superposición con gradiente oficial de Figma (Nodo 4:1821) -->
      <div class="hero-overlay"></div>
    </div>

    <!-- 2. Contenido del Hero (Estructurado en 3 zonas: superior, central e inferior) -->
    <div class="container-bacalar hero-content">
      
      <!-- Zona Superior: Marcas institucionales y división (Nodos 903:468, 903:476, 902:467, 903:477) -->
      <div class="hero-top-bar">
        <div class="hero-brand-group">
          <!-- Logo UPB (120 × 120 px de referencia en Figma) -->
          <img src="{{ asset('img/branding/logo-upb.png') }}" 
               alt="Universidad Politécnica de Bacalar" 
               class="hero-logo-upb"
               width="110" 
               height="100">

          <!-- Divisor vertical Line 19 (14 × 72 px en Figma) -->
          <img src="{{ asset('img/branding/line-separator.svg') }}" 
               alt="" 
               class="hero-divider" 
               aria-hidden="true"
               width="12" 
               height="60">

          <!-- Logo Pueblo Mágico (111 × 111 px de referencia en Figma) -->
          <img src="{{ asset('img/branding/logo-pueblo-magico.png') }}" 
               alt="Pueblo Mágico Bacalar" 
               class="hero-logo-pm"
               width="100" 
               height="95">
        </div>
      </div>

      <!-- Zona Central: Logotipo e isotipo principal de Bacalar (Nodo 60:18, 721 × 418 px en Figma) -->
      <div class="hero-center-brand">
        <img src="{{ asset('img/branding/logo-bacalar-hero.png') }}" 
             alt="Bacalar Pueblo Mágico" 
             class="hero-main-logo img-fluid"
             width="721" 
             height="418">
      </div>

      <!-- Zona Inferior: Botón CTA centrado (Nodo 4:1833) -->
      <div class="hero-bottom-action">
        <a href="#sec-nav" 
           class="btn-hero-cta" 
           role="button"
           aria-label="Descubrir Bacalar — Ir a la siguiente sección">
          <span>Descubrir Bacalar</span>
          <span class="cta-icon" aria-hidden="true">
            <img src="{{ asset('img/hero/arrow-right.svg') }}" alt="" width="16" height="16">
          </span>
        </a>
      </div>

    </div>

  </header>

  <!-- ========================================================================
       SECCIÓN 2: NAVEGACIÓN SECUNDARIA (Nodo Figma 637:382 — 1440 × 81 px)
       Barra sticky con 11 enlaces y scroll horizontal táctil en pantallas pequeñas
       ======================================================================== -->
  <nav class="secondary-nav-section" id="sec-nav" aria-label="Navegación secundaria de secciones de Bacalar">
    <div class="container-bacalar secondary-nav-container">
      <div class="secondary-nav-scroll-wrapper" tabindex="0" role="region" aria-label="Enlaces de navegación con desplazamiento horizontal">
        <ul class="secondary-nav-list" role="menubar">
          <li class="secondary-nav-item" role="none">
            <a href="#galeria" class="nav-link-sec active" role="menuitem" aria-current="page" data-spy="galeria">Galería</a>
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
            <a href="pages/comunidades.html" class="nav-link-sec" role="menuitem" data-spy="comunidades">Comunidades</a>
          </li>
          <li class="secondary-nav-item" role="none">
            <a href="pages/cultura-tradiciones.html" class="nav-link-sec" role="menuitem">Cultura y tradiciones</a>
          </li>
          <li class="secondary-nav-item" role="none">
            <a href="#naturaleza" class="nav-link-sec" role="menuitem">Atractivos</a>
          </li>
          <li class="secondary-nav-item" role="none">
            <a href="pages/consejos-recomendaciones.html" class="nav-link-sec" role="menuitem">Consejos</a>
          </li>
          <li class="secondary-nav-item" role="none">
            <a href="pages/gastronomia.html" class="nav-link-sec" role="menuitem">Gastronomía</a>
          </li>
          <li class="secondary-nav-item" role="none">
            <a href="pages/actividades-recreativas.html" class="nav-link-sec" role="menuitem">Actividades recreativas</a>
          </li>
          <li class="secondary-nav-item" role="none">
            <a href="pages/compras-souvenirs.html" class="nav-link-sec" role="menuitem" data-spy="experiencias">Compras</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>

    <!-- ======================================================================
         SECCIÓN 3: GALERÍA VISUAL (Nodo Figma 629:382)
         Mosaico editorial de imágenes + tres tarjetas con overlay
         ====================================================================== -->
    <section class="gallery-section" id="galeria" aria-labelledby="galeria-title">
      <div class="section-shell">

        <header class="section-heading">
          <p class="section-eyebrow">Galería visual</p>
          <h2 class="section-title" id="galeria-title">Bacalar en imágenes</h2>
          <p class="section-subtitle">Una mirada a la laguna, los cenotes y los rincones que hacen de Bacalar un Pueblo Mágico.</p>
        </header>

        <!-- Primer mosaico: 570 × 510 / 458 × 300 + 458 × 178 / 236 × 510 -->
        <div class="gallery-mosaic gallery-mosaic--primary">
          <figure class="gallery-figure gallery-figure--main">
            <img src="{{ asset('img/gallery/gallery-laguna-aerea.webp') }}"
                 alt="Vista panorámica de la Laguna de los Siete Colores en Bacalar"
                 width="570" height="510" loading="lazy">
          </figure>

          <div class="gallery-stack">
            <figure class="gallery-figure">
              <img src="{{ asset('img/gallery/gallery-laguna-dos.webp') }}"
                   alt="Aguas turquesa de la laguna de Bacalar"
                   width="458" height="300" loading="lazy">
            </figure>
            <figure class="gallery-figure">
              <img src="{{ asset('img/gallery/gallery-cenote.webp') }}"
                   alt="Cenote de agua dulce rodeado de vegetación en Bacalar"
                   width="458" height="178" loading="lazy">
            </figure>
          </div>

          <figure class="gallery-figure gallery-figure--side">
            <img src="{{ asset('img/gallery/gallery-fuerte.webp') }}"
                 alt="Fuerte de San Felipe junto a la laguna de Bacalar"
                 width="236" height="510" loading="lazy">
          </figure>
        </div>

        <!-- Segundo mosaico: tres tarjetas de 421 × 340 con overlay -->
        <div class="gallery-mosaic gallery-mosaic--secondary">
          <article class="media-card gallery-card">
            <img src="{{ asset('img/gallery/gallery-card-laguna.webp') }}"
                 alt="Muelle de madera sobre la laguna de Bacalar" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Agua dulce</span>
              <h3>Laguna de los Siete Colores</h3>
            </div>
          </article>

          <article class="media-card gallery-card">
            <img src="{{ asset('img/gallery/gallery-card-cenote.webp') }}"
                 alt="Aguas cristalinas de un cenote en Bacalar" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Naturaleza</span>
              <h3>Cenotes y selva</h3>
            </div>
          </article>

          <article class="media-card gallery-card">
            <img src="{{ asset('img/gallery/gallery-card-pueblo.webp') }}"
                 alt="Letras monumentales de Bacalar Pueblo Mágico" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Pueblo Mágico</span>
              <h3>Calles con historia</h3>
            </div>
          </article>
        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECCIÓN 4: NATURALEZA Y CENOTES (Nodo Figma 629:425)
         Composición 738 × 620 + texto a 72 px + tarjetas de cenotes
         ====================================================================== -->
    <section class="nature-section" id="naturaleza" aria-labelledby="naturaleza-title">
      <div class="section-shell">

        <div class="nature-intro">
          <div class="nature-visual" aria-label="Composición fotográfica de la laguna de Bacalar">
            <figure class="nature-main">
              <img src="{{ asset('img/nature/nature-laguna.webp') }}"
                   alt="Vista de la Laguna de los Siete Colores rodeada de manglar"
                   width="548" height="620" loading="lazy">
            </figure>

            <div class="nature-side">
              <figure class="nature-detail">
                <img src="{{ asset('img/nature/nature-detalle.webp') }}"
                     alt="Detalle de las aguas turquesa de Bacalar"
                     width="174" height="280" loading="lazy">
              </figure>
              <div class="nature-teal-card">
                <span class="nature-card-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round">
                    <path d="M2 15c2.5 0 2.5-2 5-2s2.5 2 5 2 2.5-2 5-2 2.5 2 5 2"/>
                    <path d="M2 19c2.5 0 2.5-2 5-2s2.5 2 5 2 2.5-2 5-2 2.5 2 5 2"/>
                    <path d="M12 3v6M9 6l3 3 3-3"/>
                  </svg>
                </span>
                <div>
                  <p class="nature-card-kicker">Siete tonos</p>
                  <p class="nature-card-text">Aguas dulces que cambian de color con la luz del día.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="nature-copy">
            <p class="section-eyebrow eyebrow--light">Naturaleza</p>
            <h2 class="section-title title--light" id="naturaleza-title">La Laguna de los Siete Colores</h2>
            <p class="section-text">La laguna es el corazón de Bacalar. Sus aguas dulces y poco profundas, alimentadas por ríos subterráneos, muestran distintas tonalidades de azul y turquesa a lo largo del día.</p>
            <p class="section-text">En sus orillas crecen manglares y selva; sus aguas albergan estromatolitos, estructuras vivas de gran valor científico. Nadar, navegar y contemplar el paisaje son algunas de las experiencias que definen este destino.</p>
            <a href="#cenotes" class="btn-bacalar btn-bacalar--teal">
              Explorar los cenotes
              <span class="btn-icon" aria-hidden="true">→</span>
            </a>
          </div>
        </div>

        <hr class="section-divider section-divider--dark">

        <div class="subsection-heading">
          <div>
            <p class="section-eyebrow eyebrow--light">Agua dulce</p>
            <h3 class="subsection-title title--light">Cenotes de Bacalar</h3>
          </div>
          <p class="subsection-text">Tres paradas para conectar con el agua y la selva de la región.</p>
        </div>

        <div class="cenote-grid" id="cenotes">
          <article class="media-card cenote-card">
            <img src="{{ asset('img/nature/cenote-azul.webp') }}"
                 alt="Cenote Azul en Bacalar" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Cenote abierto</span>
              <h3>Cenote Azul</h3>
              <p>Aguas cristalinas entre vegetación ribereña, a poca distancia del centro de Bacalar.</p>
            </div>
          </article>

          <article class="media-card cenote-card">
            <img src="{{ asset('img/nature/cenote-esmeralda.webp') }}"
                 alt="Cenote de agua dulce rodeado de vegetación en Bacalar" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Cenote de selva</span>
              <h3>Entre la vegetación</h3>
              <p>Aguas transparentes rodeadas de selva, para nadar y contemplar.</p>
            </div>
          </article>

          <article class="media-card cenote-card">
            <img src="{{ asset('img/nature/cenote-cocalitos.webp') }}"
                 alt="Vista subacuática del agua turquesa de un cenote de Bacalar" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Bajo la superficie</span>
              <h3>Vida bajo el agua</h3>
              <p>Un vistazo a los ecosistemas que habitan los cenotes de la región.</p>
            </div>
          </article>
        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECCIÓN 5: CULTURA E HISTORIA (Nodo Figma 629:489)
         Bloque narrativo 520 + 704, cita y tarjetas de festividades
         ====================================================================== -->
    <section class="culture-section" id="cultura" aria-labelledby="cultura-title">
      <div class="section-shell">

        <header class="section-heading">
          <p class="section-eyebrow">Cultura e historia</p>
          <h2 class="section-title" id="cultura-title">Memoria viva de Bacalar</h2>
        </header>

        <div class="culture-narrative">
          <div class="culture-copy">
            <p class="section-text section-text--dark">Bacalar es uno de los asentamientos más antiguos del sur de Quintana Roo. Su historia entrelaza la herencia maya, la vida colonial y la defensa de la laguna frente a las incursiones de piratas.</p>
            <p class="section-text section-text--dark">El casco del pueblo conserva calles tranquilas, murales y edificios que dialogan con el paisaje. Su nombramiento como Pueblo Mágico reconoce la riqueza natural, cultural y humana de esta región de Quintana Roo.</p>

            <blockquote class="culture-quote">
              <p>“Un pueblo, una laguna y siete tonos de azul.”</p>
              <cite>Bacalar, Pueblo Mágico</cite>
            </blockquote>
          </div>

          <figure class="culture-photo">
            <img src="{{ asset('img/culture/culture-historia.webp') }}"
                 alt="Murales y arquitectura del centro de Bacalar"
                 width="704" height="420" loading="lazy">
          </figure>
        </div>

        <div class="subsection-heading">
          <div>
            <p class="section-eyebrow">Tradiciones</p>
            <h3 class="subsection-title">Festividades y cultura viva</h3>
          </div>
          <p class="subsection-text">Celebraciones, ofrendas y saberes que se comparten de generación en generación.</p>
        </div>

        <div class="festivity-grid">
          <article class="media-card festivity-card">
            <img src="{{ asset('img/culture/festividad-san-joaquin.webp') }}"
                 alt="Procesión religiosa en Bacalar durante una festividad tradicional" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Agosto</span>
              <h3>Fiesta de San Joaquín</h3>
              <p>Feria patronal con procesiones, música y actividades para toda la familia.</p>
            </div>
          </article>

          <article class="media-card festivity-card">
            <img src="{{ asset('img/culture/festividad-dia-muertos.webp') }}"
                 alt="Altar de Día de Muertos con flores y ofrendas" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Noviembre</span>
              <h3>Día de Muertos</h3>
              <p>Altares, ofrendas y memoria: una tradición que reúne a las familias.</p>
            </div>
          </article>

          <article class="media-card festivity-card">
            <img src="{{ asset('img/culture/festividad-cultura-maya.webp') }}"
                 alt="Artesanías y colores de la cultura maya en Quintana Roo" loading="lazy">
            <div class="media-card-overlay"></div>
            <div class="media-card-content">
              <span class="media-card-tag">Raíces</span>
              <h3>Cultura maya</h3>
              <p>Lengua, saberes y oficios que siguen presentes en las comunidades de la región.</p>
            </div>
          </article>
        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECCIÓN 6: TURISMO COMUNITARIO Y EXPERIENCIAS (Nodo Figma 629:551)
         Actividades acuáticas, pueblos y artesanías
         ====================================================================== -->
    <section class="experiences-section" id="experiencias" aria-labelledby="experiencias-title">
      <div class="section-shell">

        <header class="section-heading">
          <p class="section-eyebrow">Turismo comunitario y experiencias</p>
          <h2 class="section-title" id="experiencias-title">Vive Bacalar</h2>
          <p class="section-subtitle">Actividades, comunidades y artesanías para conocer el destino desde dentro.</p>
        </header>

        <!-- Actividades acuáticas: 420 × 500 -->
        <div class="experience-block">
          <div class="subsection-heading">
            <div>
              <p class="section-eyebrow">En el agua</p>
              <h3 class="subsection-title">Actividades acuáticas</h3>
            </div>
            <p class="subsection-text">Tres formas de sentir la laguna a tu propio ritmo.</p>
          </div>

          <div class="aquatic-grid">
            <article class="aquatic-card">
              <div class="aquatic-card-media">
                <img src="{{ asset('img/experiences/exp-kayak.webp') }}"
                     alt="Kayak en las aguas tranquilas de la laguna de Bacalar"
                     width="420" height="320" loading="lazy">
              </div>
              <div class="aquatic-card-body">
                <span class="card-kicker">Aventura suave</span>
                <h4>Kayak</h4>
                <p>Rema al amanecer sobre aguas tranquilas y descubre la laguna desde otra altura.</p>
              </div>
            </article>

            <article class="aquatic-card">
              <div class="aquatic-card-media">
                <img src="{{ asset('img/experiences/exp-lancha.webp') }}"
                     alt="Lancha navegando por la laguna de Bacalar"
                     width="420" height="320" loading="lazy">
              </div>
              <div class="aquatic-card-body">
                <span class="card-kicker">Con guías locales</span>
                <h4>Lancha</h4>
                <p>Recorre los canales y manglares de la laguna mientras conoces sus historias.</p>
              </div>
            </article>

            <article class="aquatic-card">
              <div class="aquatic-card-media">
                <img src="{{ asset('img/experiences/exp-paddleboard.webp') }}"
                     alt="Paddleboard sobre aguas turquesa en Bacalar"
                     width="420" height="320" loading="lazy">
              </div>
              <div class="aquatic-card-body">
                <span class="card-kicker">Equilibrio</span>
                <h4>Paddleboard</h4>
                <p>Una experiencia de calma para disfrutar el agua y la luz de Bacalar.</p>
              </div>
            </article>
          </div>
        </div>

        <!-- Pueblos: 310.5 × 454 -->
        <div class="experience-block" id="comunidades">
          <div class="subsection-heading">
            <div>
              <p class="section-eyebrow">Comunidades</p>
              <h3 class="subsection-title">Pueblos y comunidades</h3>
            </div>
            <p class="subsection-text">La hospitalidad de Bacalar también se descubre tierra adentro.</p>
          </div>

          <div class="pueblos-grid">
            <article class="media-card pueblo-card">
              <img src="{{ asset('img/experiences/pueblo-buenavista.webp') }}"
                   alt="Paisaje rural y selva en la comunidad de Buenavista" loading="lazy">
              <div class="media-card-overlay"></div>
              <div class="media-card-content">
                <span class="media-card-tag">Comunidad</span>
                <h4>Buenavista</h4>
                <p>Una puerta a la vida del campo y la selva del municipio de Bacalar.</p>
              </div>
            </article>

            <article class="media-card pueblo-card">
              <img src="{{ asset('img/experiences/pueblo-maya-balam.webp') }}"
                   alt="Comunidad maya de la región de Bacalar" loading="lazy">
              <div class="media-card-overlay"></div>
              <div class="media-card-content">
                <span class="media-card-tag">Raíces mayas</span>
                <h4>Maya Balam</h4>
                <p>Un espacio de encuentro con la lengua y los saberes de la región.</p>
              </div>
            </article>

            <article class="media-card pueblo-card">
              <img src="{{ asset('img/experiences/pueblo-chacchoben.webp') }}"
                   alt="Zona arqueológica y entorno de Chacchoben" loading="lazy">
              <div class="media-card-overlay"></div>
              <div class="media-card-content">
                <span class="media-card-tag">Historia</span>
                <h4>Chacchoben</h4>
                <p>Localidad cercana a la zona arqueológica que lleva su nombre.</p>
              </div>
            </article>

            <article class="media-card pueblo-card">
              <img src="{{ asset('img/experiences/pueblo-bacalar.webp') }}"
                   alt="Calles y letras monumentales de Bacalar Pueblo Mágico" loading="lazy">
              <div class="media-card-overlay"></div>
              <div class="media-card-content">
                <span class="media-card-tag">Pueblo Mágico</span>
                <h4>Bacalar</h4>
                <p>El corazón del municipio: calles, murales y vida frente a la laguna.</p>
              </div>
            </article>
          </div>
        </div>

        <!-- Artesanías: 312 × 380 con fotografía de 312 × 220 -->
        <div class="experience-block">
          <div class="subsection-heading">
            <div>
              <p class="section-eyebrow">Hecho a mano</p>
              <h3 class="subsection-title">Artesanías</h3>
            </div>
            <p class="subsection-text">Materiales y oficios que cuentan la historia del territorio.</p>
          </div>

          <div class="crafts-grid">
            <article class="craft-card">
              <div class="craft-card-media">
                <img src="{{ asset('img/experiences/artesania-madera.webp') }}"
                     alt="Tallas y juguetes artesanales de madera"
                     width="312" height="220" loading="lazy">
              </div>
              <div class="craft-card-body">
                <span class="card-kicker">Oficio</span>
                <h4>Madera</h4>
                <p>Tallas y objetos utilitarios que conservan la huella de la madera.</p>
              </div>
            </article>

            <article class="craft-card">
              <div class="craft-card-media">
                <img src="{{ asset('img/experiences/artesania-fibras.webp') }}"
                     alt="Cestería y tejidos elaborados con fibras vegetales"
                     width="312" height="220" loading="lazy">
              </div>
              <div class="craft-card-body">
                <span class="card-kicker">Tejido</span>
                <h4>Fibras vegetales</h4>
                <p>Cestería y tejidos elaborados con fibras de la región.</p>
              </div>
            </article>

            <article class="craft-card">
              <div class="craft-card-media">
                <img src="{{ asset('img/experiences/artesania-derivados.webp') }}"
                     alt="Piezas artesanales elaboradas con tintes y materiales naturales"
                     width="312" height="220" loading="lazy">
              </div>
              <div class="craft-card-body">
                <span class="card-kicker">Color</span>
                <h4>Derivados naturales</h4>
                <p>Pigmentos, resinas y materiales obtenidos de plantas y minerales.</p>
              </div>
            </article>

            <article class="craft-card">
              <div class="craft-card-media">
                <img src="{{ asset('img/experiences/artesania-concha.webp') }}"
                     alt="Artesanías elaboradas con concha y caracol"
                     width="312" height="220" loading="lazy">
              </div>
              <div class="craft-card-body">
                <span class="card-kicker">Mar</span>
                <h4>Concha y caracol</h4>
                <p>Piezas artesanales que aprovechan conchas y caracoles del entorno.</p>
              </div>
            </article>
          </div>
        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECCIÓN 7: BANNER COMPRAS Y SOUVENIRS (Nodo Figma 776:387)
         Banner de 1440 × 141 con cápsula glassmorphism de 734 × 120
         ====================================================================== -->
    <section class="shopping-banner" id="compras" aria-labelledby="compras-title">
      <a href="pages/compras-souvenirs.html" class="shopping-capsule" aria-label="Ir a la página de Compras y Souvenirs">
        <span class="shopping-capsule-text">
          <span class="shopping-capsule-kicker">Artesanía local</span>
          <span class="shopping-capsule-title" id="compras-title">Compras y Souvenirs</span>
        </span>
        <span class="shopping-capsule-icon" aria-hidden="true">→</span>
      </a>
    </section>

    <!-- ======================================================================
         SECCIÓN 8: MONUMENTOS HISTÓRICOS (Nodo Figma 637:404)
         Tres tarjetas 420 × 454 que abren los modales de la Sección 5
         ====================================================================== -->
    <section class="monuments-section" id="monumentos" aria-labelledby="monumentos-title">
      <div class="section-shell">

        <header class="section-heading">
          <p class="section-eyebrow">Patrimonio</p>
          <h2 class="section-title" id="monumentos-title">Monumentos históricos</h2>
          <p class="section-subtitle">Tres sitios para entender la historia maya y colonial de Bacalar.</p>
        </header>

        <div class="monuments-grid">
          <article class="monument-card">
            <div class="monument-card-media">
              <img src="{{ asset('img/monuments/monument-ichkabal.webp') }}"
                   alt="Estructuras de la zona arqueológica de Ichkabal"
                   width="420" height="260" loading="lazy">
            </div>
            <div class="monument-card-body">
              <span class="card-kicker">Zona arqueológica</span>
              <h3>Ichkabal</h3>
              <p>Ciudad maya de larga ocupación, rodeada de selva y cuerpos de agua.</p>
              <button type="button" class="btn-card-link" data-bs-toggle="modal" data-bs-target="#modalIchkabal" aria-haspopup="dialog">
                Conocer más <span aria-hidden="true">→</span>
              </button>
            </div>
          </article>

          <article class="monument-card">
            <div class="monument-card-media">
              <img src="{{ asset('img/monuments/monument-chacchoben.webp') }}"
                   alt="Templo maya en la zona arqueológica de Chacchoben"
                   width="420" height="260" loading="lazy">
            </div>
            <div class="monument-card-body">
              <span class="card-kicker">Zona arqueológica</span>
              <h3>Chacchoben</h3>
              <p>Centro ceremonial maya de la región de los lagos de Quintana Roo.</p>
              <button type="button" class="btn-card-link" data-bs-toggle="modal" data-bs-target="#modalChacchoben" aria-haspopup="dialog">
                Conocer más <span aria-hidden="true">→</span>
              </button>
            </div>
          </article>

          <article class="monument-card">
            <div class="monument-card-media">
              <img src="{{ asset('img/monuments/monument-fuerte.webp') }}"
                   alt="Fuerte de San Felipe frente a la laguna de Bacalar"
                   width="420" height="260" loading="lazy">
            </div>
            <div class="monument-card-body">
              <span class="card-kicker">Monumento histórico</span>
              <h3>Fuerte San Felipe</h3>
              <p>Fortaleza del siglo XVIII que protegió a Bacalar de los ataques piratas.</p>
              <button type="button" class="btn-card-link" data-bs-toggle="modal" data-bs-target="#modalFuerte" aria-haspopup="dialog">
                Conocer más <span aria-hidden="true">→</span>
              </button>
            </div>
          </article>
        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECCIÓN 9: GUÍA DE VIAJE Y SUSTENTABILIDAD (Nodo Figma 629:677)
         Banner glassmorphism, texto + CTA y composición de mapa
         ====================================================================== -->
    <section class="guide-section" id="guia" aria-labelledby="guia-title">
      <div class="section-shell">

        <a href="pages/consejos-recomendaciones.html" class="glass-banner guide-banner">
          <span class="glass-banner-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 18l-6 3V6l6-3 6 3 6-3v15l-6 3-6-3z"/>
              <path d="M9 3v15M15 6v15"/>
            </svg>
          </span>
          <span class="glass-banner-text">
            <span class="glass-banner-kicker">Guía de viaje</span>
            <span class="glass-banner-title" id="guia-title">Consejos y recomendaciones</span>
          </span>
        </a>

        <div class="guide-grid">
          <div class="guide-copy">
            <p class="section-eyebrow eyebrow--light">Antes de viajar</p>
            <h3 class="guide-title">Planifica tu visita</h3>
            <p class="section-text">Bacalar se disfruta mejor sin prisa. Organiza tus recorridos, respeta los tiempos de la naturaleza y elige proveedores locales para que tu visita deje un impacto positivo.</p>

            <ul class="guide-tips">
              <li>Visita los cenotes temprano y respeta las indicaciones de los guías.</li>
              <li>Usa protector solar biodegradable y evita tocar los estromatolitos.</li>
              <li>Lleva agua reutilizable y separa tus residuos durante el recorrido.</li>
            </ul>

            <a href="https://www.openstreetmap.org/?mlat=18.6813&amp;mlon=-88.3928#map=13/18.6813/-88.3928"
               class="btn-bacalar btn-bacalar--teal"
               target="_blank"
               rel="noopener noreferrer">
              Abrir mapa
              <span class="btn-icon" aria-hidden="true">↗</span>
            </a>
          </div>

          <div class="guide-map-composition" id="mapa">
            <div class="guide-map">
              <iframe
                title="Mapa de Bacalar, Quintana Roo, en OpenStreetMap"
                src="https://www.openstreetmap.org/export/embed.html?bbox=-88.4700%2C18.6200%2C-88.3100%2C18.7400&amp;layer=mapnik&amp;marker=18.6813%2C-88.3928"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <figure class="guide-photo">
              <img src="{{ asset('img/nature/guide-foto.webp') }}"
                   alt="Vista de la laguna de Bacalar desde un muelle de madera"
                   loading="lazy"
                   decoding="async">
            </figure>
          </div>
        </div>

        <p class="map-note">Mapa interactivo © colaboradores de <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener noreferrer">OpenStreetMap</a>. Visualización temporal, no representa un servicio turístico oficial.</p>

      </div>
    </section>

  </main>

  <!-- ========================================================================
       SECCIÓN 10: FOOTER (Nodo Figma 4:2037 — 1440 × 465 px)
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

  <!-- ========================================================================
       MODALES DE MONUMENTOS (Tarea 05 / reutilizados en Tarea 08)
       1200 × 680 px de referencia · 480 px imagen + 720 px contenido
       ======================================================================== -->

  <!-- Modal: Ichkabal -->
  <div class="modal fade site-modal" id="modalIchkabal" tabindex="-1" aria-labelledby="modalIchkabalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <button type="button" class="site-modal-close" data-bs-dismiss="modal" aria-label="Cerrar ventana de Ichkabal">
          <span aria-hidden="true">×</span>
        </button>
        <div class="site-modal-grid">
          <figure class="site-modal-media">
            <img src="{{ asset('img/monuments/modal-ichkabal.webp') }}"
                 alt="Vista de las estructuras mayas de Ichkabal entre la selva"
                 width="480" height="680" loading="lazy">
            <figcaption class="site-modal-credit">Foto: Wikimedia Commons</figcaption>
          </figure>
          <div class="site-modal-content">
            <p class="section-eyebrow">Zona arqueológica</p>
            <h2 id="modalIchkabalLabel">Ichkabal</h2>

            <div class="modal-block">
              <h3>Historia</h3>
              <p>Antiguo asentamiento maya del sur de Quintana Roo. Las investigaciones del INAH indican que comenzó a desarrollarse hacia el año 200 a.C., durante el Preclásico tardío, y que alcanzó gran importancia en el Clásico. Destaca por sus estructuras monumentales, algunas de más de 40 metros de altura, y por su relación con otros centros mayas como Calakmul y Tikal.</p>
            </div>

            <div class="modal-block">
              <h3>Ubicación</h3>
              <p>Se localiza en el municipio de Bacalar, a unos 40 km de la ciudad de Bacalar y a 75 km de Chetumal, dentro de un paisaje de selva y cuerpos de agua. El acceso actual se realiza por la carretera El Suspiro–Ichkabal.</p>
            </div>

            <div class="modal-block">
              <h3>Información turística</h3>
              <p>Horario: lunes a domingo de 08:00 a 17:00 h, con último acceso a las 16:00 h. La entrada es gratuita para visitantes nacionales y extranjeros. Cuenta con estacionamiento y módulo de información. Se recomienda llevar agua, calzado cómodo y protección solar; no se permite ingresar alimentos ni mascotas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Chacchoben -->
  <div class="modal fade site-modal" id="modalChacchoben" tabindex="-1" aria-labelledby="modalChacchobenLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <button type="button" class="site-modal-close" data-bs-dismiss="modal" aria-label="Cerrar ventana de Chacchoben">
          <span aria-hidden="true">×</span>
        </button>
        <div class="site-modal-grid">
          <figure class="site-modal-media">
            <img src="{{ asset('img/monuments/modal-chacchoben.webp') }}"
                 alt="Templo maya de Chacchoben rodeado de vegetación"
                 width="480" height="680" loading="lazy">
            <figcaption class="site-modal-credit">Foto: Wikimedia Commons</figcaption>
          </figure>
          <div class="site-modal-content">
            <p class="section-eyebrow">Zona arqueológica</p>
            <h2 id="modalChacchobenLabel">Chacchoben</h2>

            <div class="modal-block">
              <h3>Historia</h3>
              <p>La ciudad maya más importante de la región de los lagos de Quintana Roo. Su ocupación inició alrededor del año 300 a.C. y la traza urbana que se conserva se realizó hacia el 250 d.C. Conserva conjuntos cívico-ceremoniales, la Acrópolis y estructuras que combinan los estilos Petén, Río Bec y Chenes.</p>
            </div>

            <div class="modal-block">
              <h3>Ubicación</h3>
              <p>Se ubica a 9 km de la desviación de la Carretera Federal 307 Chetumal–Cancún, sobre la carretera 293, vía corta a Mérida, a unos 5 km al noroeste del poblado de Lázaro Cárdenas, en el municipio de Othón P. Blanco.</p>
            </div>

            <div class="modal-block">
              <h3>Información turística</h3>
              <p>Horario: lunes a domingo de 09:00 a 15:00 h, con último acceso a las 14:30 h. Se cobra cuota de acceso a visitantes nacionales y extranjeros. Se recomienda llevar agua, repelente y calzado cómodo. No se permite ingresar alimentos ni mascotas; el uso de cámara profesional tiene una cuota adicional.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Fuerte San Felipe -->
  <div class="modal fade site-modal" id="modalFuerte" tabindex="-1" aria-labelledby="modalFuerteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <button type="button" class="site-modal-close" data-bs-dismiss="modal" aria-label="Cerrar ventana del Fuerte San Felipe">
          <span aria-hidden="true">×</span>
        </button>
        <div class="site-modal-grid">
          <figure class="site-modal-media">
            <img src="{{ asset('img/monuments/modal-fuerte.webp') }}"
                 alt="Fuerte de San Felipe de Bacalar frente a la laguna"
                 width="480" height="680" loading="lazy">
            <figcaption class="site-modal-credit">Foto: Wikimedia Commons</figcaption>
          </figure>
          <div class="site-modal-content">
            <p class="section-eyebrow">Monumento histórico</p>
            <h2 id="modalFuerteLabel">Fuerte San Felipe</h2>

            <div class="modal-block">
              <h3>Historia</h3>
              <p>Fortaleza colonial construida entre 1725 y 1733 para defender Bacalar de los ataques de piratas y del comercio ilegal. Es uno de los últimos fuertes construidos por el Imperio español en la región y hoy funciona como museo histórico.</p>
            </div>

            <div class="modal-block">
              <h3>Ubicación</h3>
              <p>Se encuentra en el centro de Bacalar, frente a la laguna, a poca distancia del parque principal y del muelle.</p>
            </div>

            <div class="modal-block">
              <h3>Información turística</h3>
              <p>El recorrido permite conocer las murallas, el foso y las salas del museo, con exposiciones sobre la historia colonial y la piratería. Se recomienda llevar agua y calzado cómodo; el acceso puede tener costo y horario variable, por lo que conviene confirmar en taquilla.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5.3 JavaScript Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Scripts propios -->
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
