<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio Bacalar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  <body>

    
   
    <!--Slider-->
<div class="position-relative overflow-hidden d-flex align-items-center" style="max-height: 82vh;">

  <!-- CARRUSEL  -->
  <div id="carouselExampleSlidesOnly" class="carousel slide w-100" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Captura desde 2026-11-17 12-37-55.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <!-- TÍTULO CON FUENTE CORMORANT GARAMOND -->
  <div class="position-absolute top-50 start-50 translate-middle text-center w-100 px-3">
    <h1 class="display-1 text-white fw-normal" style="font-family: 'Cormorant Garamond', serif;">Comunidades</h1>
  </div>
</div>
 <!--Slider-->

<!-- BARRA DE NAVEGACIÓN  -->
<nav class="navbar navbar-expand-lg navbar-dark py-3" style="background-color: #1e3d6b;">
  <div class="container-fluid justify-content-center">
    
    <!-- Botón para menú en celulares -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBacalar" aria-controls="navbarBacalar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Enlaces centrados en una sola línea -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarBacalar">
      <ul class="navbar-nav gap-lg-1 gap-xl-2 text-center align-items-center">
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="#galeria">Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="#naturaleza">Naturaleza</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="../index.html#cultura">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="#monumentos">Monumentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="color: #45c4b0; border-bottom: 2px solid #45c4b0; font-size: 0.72rem; letter-spacing: 0.4px;" href="pages/comunidades.html">Comunidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="pages/cultura-tradiciones.html">Cultura y tradiciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="../index.html#naturaleza">Atractivos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="pages/consejos-recomendaciones.html">Consejos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="gastronomia.html">Gastronomía</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" href="pages/actividades-recreativas.html">Actividades recreativas</a>
        </li>
        <li class="nav-item">
          <!-- Enlace activo con texto turquesa y línea inferior igual que en la imagen -->
          <a class="nav-link active text-uppercase fw-semibold text-nowrap px-2 py-2" style="font-size: 0.72rem; letter-spacing: 0.4px;" aria-current="page" href="pages/compras-souvenirs.html">Compras</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

   
<!-- TÍTULO CON FUENTE CORMORANT GARAMOND -->
  <!-- SUBTÍTULO DEBAJO DE LA BARRA DE NAVEGACIÓN -->
<div class="container text-center my-5">
  <h2 class="display-6 fw-normal" style="font-family: 'Cormorant Garamond', serif; color: #0B2545;">
    Comunidades
  </h2>
</div>
  
  <!-- CONTENEDOR DE LAS 8 TARJETAS -->
<div class="container-fluid px-5">
  <div class="d-flex flex-wrap gap-5 justify-content-center">

    <!-- TARJETA 1 -->
    <div class="card border-0 rounded-4 overflow-hidden text-white shadow" 
         style="width: 18rem; height: 26rem; background-color: #0d254c; cursor: pointer;"
         data-bs-toggle="modal" data-bs-target="#modalLugar"
         onclick="cargarDatos(this)"
         data-imagen="../img/compras_souvenirs/imagen1.1.jpg"
         data-titulo="Bacalar"
         data-resumen="Ciudad principal y Pueblo Mágico por su Laguna de Siete Colores ."
         data-descripcion="Ideales para decorar tu refrigerador, pizarrón metálico o cualquier superficie magnética, estos imanes cuentan con un acabado resistente y un imán de excelente sujeción que mantiene tus notas y fotografías siempre en su lugar. Al ser piezas 100% artesanales"
         data-tipo="Hogar y Decoración"
         data-ubicacion="feria manos emprendedoras"
         data-recomendado="Artesanias, Historia y Cultura">
      <div class="position-relative h-50">
        <img src="../img/compras_souvenirs/imagen1.1.jpg" class="card-img-top object-fit-cover w-100 h-100" alt="Bacalar">
        <span class="position-absolute top-0 start-0 m-3 fw-semibold text-uppercase small" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"></span>
      </div>
      <div class="card-body p-4 h-50 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="card-title m-0 fs-3 text-uppercase" style="font-family: Georgia, serif; letter-spacing: 1px;">Bacalar</h5>
          <span class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: rgba(255,255,255,0.4); background-color: rgba(255,255,255,0.08);">↗</span>
        </div>
        <p class="card-text small text-white-50 mb-0">Ciudad principal y Pueblo Mágico por su Laguna de Siete Colores .</p>
      </div>
    </div>

    <!-- TARJETA 2 -->
    <div class="card border-0 rounded-4 overflow-hidden text-white shadow" 
         style="width: 18rem; height: 26rem; background-color: #0d254c; cursor: pointer;"
         data-bs-toggle="modal" data-bs-target="#modalLugar"
         onclick="cargarDatos(this)"
         data-imagen="../img/compras_souvenirs/imagen1.2.jpg"
         data-titulo="Maya Balam"
         data-resumen="Es célebre por sus coloridos tejidos hechos a mano y huipiles tradicionales."
         data-descripcion="Lleva tus esenciales con estilo, tradición y autenticidad con nuestro bolso artesanal. Cada pieza es confeccionada y detallada cuidadosamente a mano por artesanos expertos, logrando una combinación perfecta entre diseño funcional, resistencia y un acabado lleno de color e identidad."
         data-tipo="Moda y Accesorios"
         data-ubicacion="Artesanias el milagro"
         data-recomendado="Artesanias , tradiciones">
      <div class="position-relative h-50">
        <img src="../img/compras_souvenirs/imagen1.2.jpg" class="card-img-top object-fit-cover w-100 h-100" alt="Maya Balam">
        <span class="position-absolute top-0 start-0 m-3 fw-semibold text-uppercase small" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"></span>
      </div>
      <div class="card-body p-4 h-50 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="card-title m-0 fs-3 text-uppercase" style="font-family: Georgia, serif; letter-spacing: 1px;">Maya Balam</h5>
          <span class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: rgba(255,255,255,0.4); background-color: rgba(255,255,255,0.08);">↗</span>
        </div>
        <p class="card-text small text-white-50 mb-0">Es célebre por sus coloridos tejidos hechos a mano y huipiles tradicionales..</p>
      </div>
    </div>

    <!-- TARJETA 3 -->
    <div class="card border-0 rounded-4 overflow-hidden text-white shadow" 
         style="width: 18rem; height: 26rem; background-color: #0d254c; cursor: pointer;"
         data-bs-toggle="modal" data-bs-target="#modalLugar"
         onclick="cargarDatos(this)"
         data-imagen="../img/compras_souvenirs/imagen1.3.jpg"
         data-titulo="limones"
         data-resumen="Hilos que cuentan historias. La hamaca que te invita a descubrir el taller de los artesanos."
         data-descripcion="Disfruta del máximo descanso con la suavidad y frescura de nuestra hamaca artesanal. Tejida completamente a mano por maestros artesanos utilizando técnicas tradicionales, esta pieza combina resistencia, comodidad y un diseño lleno de color que transformará cualquier rincón de tu hogar o jardín en un oasis de relajación."
         data-tipo="Hogar y Decoración"
         data-ubicacion="Mercado artesanal de bacalar"
         data-recomendado="Artesanias, Historia y Cultura">
      <div class="position-relative h-50">
        <img src="../img/compras_souvenirs/imagen1.3.jpg" class="card-img-top object-fit-cover w-100 h-100" alt="Limones">
        <span class="position-absolute top-0 start-0 m-3 fw-semibold text-uppercase small" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"></span>
      </div>
      <div class="card-body p-4 h-50 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="card-title m-0 fs-3 text-uppercase" style="font-family: Georgia, serif; letter-spacing: 1px;">Limones</h5>
          <span class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: rgba(255,255,255,0.4); background-color: rgba(255,255,255,0.08);">↗</span>
        </div>
        <p class="card-text small text-white-50 mb-0">Punto de conexión e intercambio comercial del norte </p>
      </div>
    </div>

    <!-- TARJETA 4 -->
    <div class="card border-0 rounded-4 overflow-hidden text-white shadow" 
         style="width: 18rem; height: 26rem; background-color: #0d254c; cursor: pointer;"
         data-bs-toggle="modal" data-bs-target="#modalLugar"
         onclick="cargarDatos(this)"
         data-imagen="../img/compras_souvenirs/imagen1.4.jpg"
         data-titulo="Salamanca"
         data-resumen="Un pedacito de historia en tus manos. Te dará ganas de ir corriendo al taller artesanal."
         data-descripcion="Lleva un toque de arte y tradición a donde quiera que vayas con nuestros llaveros artesanales. Cada pieza está elaborada cuidadosamente a mano, combinando colores vibrantes, texturas únicas y materiales resistentes que convierten un accesorio cotidiano en un detalle lleno de identidad"
         data-tipo="Recuerdos "
         data-ubicacion="Feria manos emprendedoras"
         data-recomendado="Artesanias, Historia y Cultura">
      <div class="position-relative h-50">
        <img src="../img/compras_souvenirs/imagen1.4.jpg" class="card-img-top object-fit-cover w-100 h-100" alt="Salamanca">
        <span class="position-absolute top-0 start-0 m-3 fw-semibold text-uppercase small" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"></span>
      </div>
      <div class="card-body p-4 h-50 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="card-title m-0 fs-3 text-uppercase" style="font-family: Georgia, serif; letter-spacing: 1px;">Salamanca</h5>
          <span class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: rgba(255,255,255,0.4); background-color: rgba(255,255,255,0.08);">↗</span>
        </div>
        <p class="card-text small text-white-50 mb-0">Colonia agrícola de familias menonitas, famosa por su gran producción de granos y la venta de quesos artesanales..</p>
      </div>
    </div>

      <!-- TARJETA 5 -->
    <div class="card border-0 rounded-4 overflow-hidden text-white shadow" 
         style="width: 18rem; height: 26rem; background-color: #0d254c; cursor: pointer;"
         data-bs-toggle="modal" data-bs-target="#modalLugar"
         onclick="cargarDatos(this)"
         data-imagen="../img/compras_souvenirs/imagen1.5.jpg"
         data-titulo="Los Divorviados"
         data-resumen="Madera, arte y manos locales. La escultura que te hará querer visitar el taller artesanal hoy mismo."
         data-descripcion="Pueblo rural del interior de la selva que llama la atención por su nombre debido a una vieja separación ejidal."
         data-tipo="Hogar y Decoración"
         data-ubicacion="Mercadito de artesanias"
         data-recomendado="Artesanias, Historia y Cultura">
      <div class="position-relative h-50">
        <img src="../img/compras_souvenirs/imagen1.5.jpg" class="card-img-top object-fit-cover w-100 h-100" alt="Los Divorciados">
        <span class="position-absolute top-0 start-0 m-3 fw-semibold text-uppercase small" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"></span>
      </div>
      <div class="card-body p-4 h-50 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="card-title m-0 fs-3 text-uppercase" style="font-family: Georgia, serif; letter-spacing: 1px;">Los Divorciados</h5>
          <span class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: rgba(255,255,255,0.4); background-color: rgba(255,255,255,0.08);">↗</span>
        </div>
        <p class="card-text small text-white-50 mb-0">Pueblo rural del interior de la selva que llama la atención por su nombre debido a una vieja separación ejidal.</p>
      </div>
    </div>

    <!-- TARJETA 6 -->
    <div class="card border-0 rounded-4 overflow-hidden text-white shadow" 
         style="width: 18rem; height: 26rem; background-color: #0d254c; cursor: pointer;"
         data-bs-toggle="modal" data-bs-target="#modalLugar"
         onclick="cargarDatos(this)"
         data-imagen="../img/compras_souvenirs/imagen1.6.jpg"
         data-titulo="Reforma"
         data-resumen="Fresco, ligero y con estilo único. Elaborado 100% a mano con fibras naturales para protegerte del sol con elegancia y tradición en cada detalle."
         data-descripcion="Protege tu piel del sol con elegancia, frescura y auténtica tradición con nuestro sombrero artesanal. Cada pieza es tejida y hormada pacientemente a mano por maestros artesanos, logrando un accesorio ligero, transpirable y resistente que eleva cualquier atuendo al instante."
         data-tipo="Moda y Accesorios"
         data-ubicacion="Feria manos emprendedoras"
         data-recomendado="artesanias, Historia y Cultura">
      <div class="position-relative h-50">
        <img src="../img/compras_souvenirs/imagen1.6.jpg" class="card-img-top object-fit-cover w-100 h-100" alt="Reforma">
        <span class="position-absolute top-0 start-0 m-3 fw-semibold text-uppercase small" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"></span>
      </div>
      <div class="card-body p-4 h-50 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="card-title m-0 fs-3 text-uppercase" style="font-family: Georgia, serif; letter-spacing: 1px;">Reforma</h5>
          <span class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: rgba(255,255,255,0.4); background-color: rgba(255,255,255,0.08);">↗</span>
        </div>
        <p class="card-text small text-white-50 mb-0">Comunidad del interior grande y poblada, famosa por sus tradicionales ferias ejidales y sus grandes fiestas populares.</p>
      </div>
    </div>

    <!-- TARJETA 7 -->
    <div class="card border-0 rounded-4 overflow-hidden text-white shadow" 
         style="width: 18rem; height: 26rem; background-color: #0d254c; cursor: pointer;"
         data-bs-toggle="modal" data-bs-target="#modalLugar"
         onclick="cargarDatos(this)"
         data-imagen="../img/compras_souvenirs/imagen1.7.jpg"
         data-titulo="Chacchoben"
         data-resumen="El destino cultural más visitado gracias a sus imponentes pirámides mayas rodeadas de selva alta."
         data-descripcion="Comunidad del interior grande y poblada, famosa por sus tradicionales ferias ejidales y sus grandes fiestas populares"
         data-tipo="Moda y Accesorios"
         data-ubicacion="Artesanias el milagro"
         data-recomendado="Artesanias, Historia y Cultura">
      <div class="position-relative h-50">
        <img src="../img/compras_souvenirs/imagen1.7.jpg" class="card-img-top object-fit-cover w-100 h-100" alt="Chacchoben">
        <span class="position-absolute top-0 start-0 m-3 fw-semibold text-uppercase small" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"></span>
      </div>
      <div class="card-body p-4 h-50 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="card-title m-0 fs-3 text-uppercase" style="font-family: Georgia, serif; letter-spacing: 1px;">Chacchoben</h5>
          <span class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: rgba(255,255,255,0.4); background-color: rgba(255,255,255,0.08);">↗</span>
        </div>
        <p class="card-text small text-white-50 mb-0">El destino cultural más visitado gracias a sus imponentes pirámides mayas rodeadas de selva alta.</p>
      </div>
    </div>

    <!-- TARJETA 8 -->
    <div class="card border-0 rounded-4 overflow-hidden text-white shadow" 
         style="width: 18rem; height: 26rem; background-color: #0d254c; cursor: pointer;"
         data-bs-toggle="modal" data-bs-target="#modalLugar"
         onclick="cargarDatos(this)"
         data-imagen="../img/compras_souvenirs/imagen1.8.jpg"
         data-titulo="Buenavista"
         data-resumen="Famosa por sus balnearios rústicos y muelles tranquilos con un acceso privilegiado al norte de la laguna."
         data-descripcion="Viste con identidad, frescura y tradición con nuestra línea de ropa artesanal. Cada prenda es confeccionada y detallada cuidadosamente a mano por artesanos expertos, fusionando técnicas ancestrales de bordado y tejido con cortes cómodos y atemporales que resaltan tu estilo propio."
         data-tipo="Moda y Accesorios"
         data-ubicacion="Mercado artesanal de bacalar"
         data-recomendado="Artesanias, Historia y Cultura">
      <div class="position-relative h-50">
        <img src="../img/compras_souvenirs/imagen1.8.jpg" class="card-img-top object-fit-cover w-100 h-100" alt="Bacalar">
        <span class="position-absolute top-0 start-0 m-3 fw-semibold text-uppercase small" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"></span>
      </div>
      <div class="card-body p-4 h-50 d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h5 class="card-title m-0 fs-3 text-uppercase" style="font-family: Georgia, serif; letter-spacing: 1px;">Buenavista</h5>
          <span class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-color: rgba(255,255,255,0.4); background-color: rgba(255,255,255,0.08);">↗</span>
        </div>
        <p class="card-text small text-white-50 mb-0">Famosa por sus balnearios rústicos y muelles tranquilos con un acceso privilegiado al norte de la laguna.</p>
       </div>
      </div>
     </div>
    </div>
     
    <!-- PIE DE PÁGINA (FOOTER) IDÉNTICO A LA IMAGEN -->
<div style="width: 100%; height: 120px; display: block; clear: both;"></div>

<footer class="text-white pt-5 pb-4" style="background-color: #0b223d; width: 100%; display: block; position: relative;">

<footer class="text-white pt-5 pb-4" style="background-color: #0b223d;">
  <div class="container py-3">
    
    <!-- Parte superior: Mensaje izquierdo y 3 columnas derechas -->
    <div class="row gy-4 justify-content-between align-items-start pb-5">
      
      <!-- Columna izquierda -->
      <div class="col-lg-5">
        <p class="text-uppercase fw-bold small mb-3" style="letter-spacing: 1.5px; font-size: 0.78rem;">BACALAR</p>
        <h2 class="display-6 fw-normal mb-4" style="font-family: Georgia, 'Times New Roman', serif; line-height: 1.2;">
          Déjate llevar por los<br>colores de la laguna.
        </h2>
        <a href="../index.html" class="btn rounded-pill px-4 py-2 text-white text-uppercase fw-semibold d-inline-flex align-items-center gap-3" style="border: 1px solid rgba(255, 255, 255, 0.35); font-size: 0.72rem; letter-spacing: 1px;">
          DESCUBRIR BACALAR <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <!-- Columnas de enlaces a la derecha -->
      <div class="col-lg-6">
        <div class="row gy-4">
          
          <!-- Columna 1: EXPLORA -->
          <div class="col-4">
            <h6 class="text-uppercase fw-semibold mb-3" style="color: #5ba4cf; font-size: 0.68rem; letter-spacing: 1.2px;">EXPLORA</h6>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-0" style="font-size: 0.75rem; letter-spacing: 0.8px;">
              <li><a href="../index.html" class="text-white text-decoration-none text-uppercase">DESCUBRE</a></li>
              <li><a href="actividades-recreativas.html" class="text-white text-decoration-none text-uppercase">EXPERIENCIAS</a></li>
              <li><a href="consejos-recomendaciones.html" class="text-white text-decoration-none text-uppercase">PLANIFICA</a></li>
            </ul>
          </div>

          <!-- Columna 2: INSPÍRATE -->
          <div class="col-4">
            <h6 class="text-uppercase fw-semibold mb-3" style="color: #5ba4cf; font-size: 0.68rem; letter-spacing: 1.2px;">INSPÍRATE</h6>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-0" style="font-size: 0.75rem; letter-spacing: 0.8px;">
              <li><a href="../index.html#cultura" class="text-white text-decoration-none text-uppercase">HISTORIA</a></li>
              <li><a href="cultura-tradiciones.html" class="text-white text-decoration-none text-uppercase">CULTURA</a></li>
              <li><a href="../index.html#galeria" class="text-white text-decoration-none text-uppercase">GALERÍA</a></li>
            </ul>
          </div>

          <!-- Columna 3: CONECTA -->
          <div class="col-4">
            <h6 class="text-uppercase fw-semibold mb-3" style="color: #5ba4cf; font-size: 0.68rem; letter-spacing: 1.2px;">CONECTA</h6>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-0" style="font-size: 0.75rem; letter-spacing: 0.8px;">
              <li><a href="#" class="text-white text-decoration-none text-uppercase">CONTACTO</a></li>
              <li>
                <a href="#" class="text-white text-decoration-none text-uppercase d-inline-flex align-items-center gap-2">
                  <i class="bi bi-instagram"></i> INSPIRACIÓN
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>

    </div>

    <!-- Línea divisoria sutil -->
    <hr style="border-color: rgba(255, 255, 255, 0.15); opacity: 1;">

    <!-- Parte inferior: Texto gigante BACALAR de fondo y etiquetas laterales -->
    <div class="position-relative text-center pt-4 pb-2">
      <div class="user-select-none text-uppercase" style="font-family: Georgia, 'Times New Roman', serif; font-size: clamp(3.5rem, 9vw, 6.5rem); letter-spacing: 0.18em; color: rgba(255, 255, 255, 0.06); line-height: 1;">
        BACALAR
      </div>
      
      <div class="d-flex justify-content-between align-items-center mt-2" style="font-size: 0.65rem; letter-spacing: 1.2px; color: rgba(255, 255, 255, 0.55);">
        <span>DESTINO · NATURALEZA · CULTURA</span>
        <span>QUINTANA ROO · MÉXICO</span>
      </div>
    </div>

  </div>
</footer>

         
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
     
    
    <!-- 1. VENTANA MODAL (Sin "fade" para apertura instantánea) -->
<div class="modal" id="modalLugar" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 rounded-4 overflow-hidden shadow-lg">
      <div class="row g-0">
        
        <!-- Lado Izquierdo: Imagen -->
        <div class="col-md-5 position-relative text-white modal-body-img">
          <img id="m-img" src="" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="" decoding="async">
          <div class="position-relative h-100 d-flex flex-column justify-content-end p-4 degradado-img">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h3 id="m-titulo" class="m-0 fs-2 text-uppercase titulo-modal"></h3>
              <button type="button" data-bs-dismiss="modal" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center btn-cerrar-modal">
                ↙
              </button>
            </div>
            <p id="m-resumen" class="small text-white-75 mb-0"></p>
          </div>
        </div>

        <!-- Lado Derecho: Información -->
        <div class="col-md-7 bg-white p-4 p-md-5 d-flex flex-column justify-content-between text-secondary">
          <p id="m-descripcion" class="mb-4 descripcion-modal"></p>

          <div>
            <!-- Tipo -->
            <div class="d-flex align-items-center py-3 fila-detalle">
              <div class="rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0 icono-circulo">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/>
                </svg>
              </div>
              <div class="row w-100 align-items-center m-0">
                <div class="col-5 small text-muted ps-0">Tipo:</div>
                <div id="m-tipo" class="col-7 fw-semibold text-dark small pe-0"></div>
              </div>
            </div>

            <!-- Ubicación -->
            <div class="d-flex align-items-center py-3 fila-detalle">
              <div class="rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0 icono-circulo">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                </svg>
              </div>
              <div class="row w-100 align-items-center m-0">
                <div class="col-5 small text-muted ps-0">Ubicación:</div>
                <div id="m-ubicacion" class="col-7 fw-semibold text-dark small pe-0"></div>
              </div>
            </div>

            <!-- Recomendado para -->
            <div class="d-flex align-items-center py-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0 icono-circulo">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                </svg>
              </div>
              <div class="row w-100 align-items-center m-0">
                <div class="col-5 small text-muted ps-0">Recomendado para:</div>
                <div id="m-recomendado" class="col-7 fw-semibold text-dark small pe-0"></div>
              </div>
            </div>
          </div>

          <!-- Estado Activo -->
          <div class="mt-4 pt-1 ps-5 ms-2">
            <span class="fw-bold small estado-activo">
              <span id="m-estado"></span>
            </span>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- 2. BOOTSTRAP JS 5.3.8 COMPLETO -->


<!-- 3. SCRIPT OPTIMIZADO EN MEMORIA -->
<script>
  const elImg = document.getElementById('m-img');
  const elTitulo = document.getElementById('m-titulo');
  const elResumen = document.getElementById('m-resumen');
  const elDescripcion = document.getElementById('m-descripcion');
  const elTipo = document.getElementById('m-tipo');
  const elUbicacion = document.getElementById('m-ubicacion');
  const elRecomendado = document.getElementById('m-recomendado');
  const elEstado = document.getElementById('m-estado');

  function cargarDatos(card) {
    const datos = card.dataset;
    elImg.src = datos.imagen;
    elTitulo.textContent = datos.titulo;
    elResumen.textContent = datos.resumen;
    elDescripcion.textContent = datos.descripcion;
    elTipo.textContent = datos.tipo;
    elUbicacion.textContent = datos.ubicacion;
    elRecomendado.textContent = datos.recomendado;
    elEstado.textContent = datos.estado;
  }


  
</script>





  

</body>
</html>

  </body>
   
</html>