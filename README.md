# Bacalar Tourism — Guía del proyecto

> **Objetivo de este documento:** explicar cómo está organizado el repositorio, cómo ejecutar el sitio, qué parte desarrolla cada integrante y qué reglas debemos seguir para evitar conflictos al trabajar en equipo.
>
> password para acceder a admin(provisional): 301006

## 1. ¿Qué es Bacalar Tourism?

Bacalar Tourism es un sitio web turístico sobre Bacalar, Quintana Roo. El proyecto busca presentar información y contenido visual sobre sus atractivos naturales, historia, cultura, experiencias comunitarias y recomendaciones para visitantes.

El sitio se desarrolla como proyecto universitario en equipo. El repositorio es compartido, por lo que cada integrante debe respetar las carpetas y archivos asignados a los demás.

## 2. Tecnologías permitidas

La implementación debe utilizar las tecnologías indicadas por el profesor:

- **HTML5:** estructura y contenido de las páginas.
- **Bootstrap 5:** sistema de diseño, componentes y utilidades responsive.
- **CSS3:** estilos propios y ajustes para reproducir el diseño de Figma.
- **JavaScript vanilla:** interacciones que no estén cubiertas por HTML o Bootstrap.

**No introducir** React, Vue, Angular, Tailwind CSS, TypeScript, Astro, ni otros frameworks o sistemas de estilos, salvo que el equipo y el profesor autoricen expresamente un cambio.

> La versión concreta de Bootstrap y la forma de cargarla (CDN o archivos locales) deben mantenerse consistentes en todo el proyecto. Antes de cambiarla, consultar al responsable del repositorio.

## 3. Organización del repositorio

La estructura inicial acordada es:

```text
Bacalar tourism/
│
├── index.html
│
├── css/
│   ├── styles.css
│   ├── components.css
│   └── responsive.css
│
├── js/
│   └── main.js
│
├── img/
│   ├── hero/
│   ├── gallery/
│   ├── nature/
│   ├── culture/
│   ├── experiences/
│   ├── monuments/
│   └── branding/
│
├── videos/
│   └── hero/
│
├── pages/
│   └── (páginas individuales del equipo)
│
├── PROJECT_CONTEXT.md
├── DEVELOPMENT_PLAN.md
└── README.md
```

### ¿Qué contiene cada carpeta?

| Ruta | Propósito |
|---|---|
| `index.html` | Página principal o landing page del proyecto. Su responsable inicial es Delfín. |
| `css/styles.css` | Estilos generales, variables de color, tipografías y reglas base del Index. |
| `css/components.css` | Estilos de componentes reutilizables, como botones, banners, tarjetas y elementos comunes. |
| `css/responsive.css` | Ajustes para escritorio, tablet y móvil. |
| `js/main.js` | Interacciones del Index: navegación, modales y comportamientos propios. |
| `img/hero/` | Imágenes/logos relacionados con el Hero. |
| `img/gallery/` | Imágenes de la galería. |
| `img/nature/` | Recursos de naturaleza, laguna y cenotes. |
| `img/culture/` | Recursos de cultura, historia y festividades. |
| `img/experiences/` | Recursos de experiencias, comunidades y artesanías. |
| `img/monuments/` | Recursos de monumentos y sitios históricos. |
| `img/branding/` | Logos y recursos de identidad visual. |
| `videos/hero/` | Video de fondo que se incorporará al Hero en una etapa posterior. |
| `pages/` | Páginas individuales desarrolladas por los demás integrantes. |

Los archivos y carpetas pueden ampliarse cuando exista una necesidad real, pero se debe evitar reorganizar rutas compartidas sin avisar al equipo.

## 4. ¿Qué es el Index?

El archivo `index.html` es la página principal del sitio. Presenta el destino y permite navegar hacia las secciones del propio Index y hacia las páginas individuales del equipo.

El diseño de referencia está en Figma:

[Diseño de Bacalar Tourism en Figma](https://www.figma.com/design/lH92BhqNpKbbusu6Ft07B1/Home-Bacalar?node-id=0-1)

El frame de referencia para el Index es **`Bacalar Tourism Homepage(Delfin)`**, en `Page 1`, con dimensiones de diseño de 1440 × 9772 px.

### Secciones del Index

El orden de referencia es:

1. **Hero:** portada principal, identidad del destino y botón para explorar.
2. **Navegación secundaria:** enlaces a secciones y apartados.
3. **Galería visual:** mosaicos de imágenes de Bacalar.
4. **Naturaleza y cenote:** contenido sobre la laguna y los cenotes.
5. **Cultura e historia:** contenido narrativo y festividades.
6. **Turismo comunitario y experiencias:** actividades, pueblos y artesanías.
7. **Banner de Compras y Souvenirs:** elemento destacado de navegación.
8. **Monumentos históricos:** tarjetas de sitios históricos y sus ventanas modales.
9. **Guía de viaje y sustentabilidad:** recomendaciones y contenido relacionado con el mapa.
10. **Footer:** cierre del sitio, marca y enlaces.

El orden, las proporciones, la jerarquía visual y el estilo deben basarse en Figma. No se deben inventar secciones nuevas ni cambiar el contenido por iniciativa propia.

## 5. Responsables y límites de trabajo

El repositorio es compartido. Para evitar sobrescribir trabajo ajeno:

- **Delfín:** responsable del Index (`index.html`) y de coordinar la estructura común del repositorio.
- **Resto del equipo:** responsables de sus páginas individuales dentro de `pages/` y de los recursos o estilos propios que acuerden.
- **Todos:** deben avisar antes de cambiar archivos compartidos o dependencias globales.

### Regla fundamental

Si estás trabajando en una página individual, modifica únicamente los archivos que te corresponden. No edites `index.html`, `css/styles.css`, `css/components.css`, `css/responsive.css` o `js/main.js` sin coordinarlo previamente con Delfín.

Si necesitas un estilo o comportamiento compartido, comunícalo primero para acordar dónde implementarlo y evitar duplicaciones o conflictos.

## 6. Reglas visuales y de contenido

### Fidelidad al diseño

- Utilizar Figma como referencia visual principal.
- Mantener las secciones, alineaciones, espacios, tamaños relativos, colores y jerarquía tipográfica.
- No rediseñar secciones sin aprobación.
- Si una medida no se adapta bien a pantallas pequeñas, conservar la intención visual y resolverla mediante responsive.

### Imágenes y video

En la primera etapa del Index:

- No es necesario descargar ni insertar las imágenes finales.
- Se deben preparar contenedores vacíos con las proporciones y dimensiones visuales previstas.
- Los espacios de imágenes deben conservar la composición del diseño.
- Para imágenes de monumentos que todavía no estén disponibles, usar un fondo azul con el texto **“Fotografía próximamente”**.
- El Hero debe quedar preparado para recibir un video de fondo sin sonido en el futuro. Por ahora no se necesita incorporar el archivo de video.
- Guardar posteriormente los recursos en la subcarpeta correspondiente de `img/` y el video en `videos/hero/`.

No usar imágenes aleatorias o enlaces externos temporales como sustitutos sin autorización.

### Navegación temporal

- En móvil, la navegación secundaria será una barra horizontal con desplazamiento táctil.
- El enlace **Compras y Souvenirs** quedará temporalmente como `#`.
- Los enlaces **Consejos**, **Gastronomía** y **Actividades recreativas** se conservarán separados y temporalmente como `#`.
- Los enlaces a páginas de compañeros se conectarán cuando las páginas estén listas y se conozcan sus rutas definitivas.
- No inventar rutas ni eliminar enlaces acordados.

## 7. Diseño adaptable (responsive)

El sitio debe funcionar en:

- **Escritorio:** conservar la composición amplia de Figma.
- **Tablet:** reorganizar columnas y mosaicos cuando el espacio lo requiera.
- **Móvil:** apilar contenido cuando sea necesario, mantener textos legibles y evitar desbordamientos horizontales no intencionales.

Reglas particulares del Index:

- La navegación secundaria móvil debe desplazarse horizontalmente con el tacto.
- Las composiciones de dos columnas (por ejemplo, laguna y mapa) deben poder apilarse.
- Las galerías deben reorganizar sus mosaicos sin perder el orden visual.
- Las tarjetas deben adaptarse al ancho disponible.
- Los modales deben caber en la pantalla móvil y permitir desplazamiento interno si su contenido lo necesita.
- No reducir todo el diseño de escritorio de manera proporcional: reorganizar los componentes para que sean utilizables.

## 8. Cómo abrir el proyecto

Este proyecto cuenta con backend en Laravel y frontend responsivo.

- **Página pública:** `http://localhost:8000/`
- **Panel de Administración:** `http://localhost:8000/admin`
- password para acceder a admin(provisional): 301006

## 9. Convenciones de código

Para mantener el proyecto legible:

- Usa nombres descriptivos para archivos, clases, IDs y funciones.
- Mantén la indentación consistente.
- Escribe clases CSS en minúsculas y con guiones, por ejemplo: `hero-section`, `gallery-card`.
- Evita nombres genéricos como `.box1`, `.texto2` o `.azul`.
- Usa etiquetas semánticas de HTML5 cuando correspondan: `header`, `nav`, `main`, `section`, `article` y `footer`.
- Mantén el CSS separado del HTML, excepto estilos puntuales realmente necesarios.
- Evita repetir reglas CSS; reutiliza componentes cuando tenga sentido.
- Usa rutas relativas para recursos del repositorio.
- Añade comentarios breves cuando una sección o interacción no sea evidente.
- No agregues dependencias sin consultarlo con el responsable del repositorio.

## 10. Trabajo con Git

Antes de empezar:

```bash
git status
git pull
```

Crea una rama para tu trabajo, usando un nombre descriptivo:

```bash
git switch -c feature/nombre-de-tu-pagina
```

Guarda cambios con mensajes claros:

```bash
git add .
git commit -m "Agrega estructura de pagina de naturaleza"
```

Antes de integrar tu trabajo, revisa los cambios y coordina con el equipo. No hagas `git push --force` ni sobrescribas cambios de otros integrantes.

Si todos trabajan directamente sobre la rama principal por indicación del responsable, aun así deben revisar `git status`, actualizarse antes de editar y avisar antes de tocar archivos compartidos.

## 11. Antes de entregar una modificación

Comprueba lo siguiente:

- [ ] La página abre sin errores visibles.
- [ ] Los enlaces llevan a un destino válido o están marcados como temporales.
- [ ] Las imágenes y demás recursos usan rutas correctas.
- [ ] El contenido no se desborda en escritorio, tablet o móvil.
- [ ] No se modificaron archivos asignados a otro integrante.
- [ ] No se agregaron tecnologías o dependencias no autorizadas.
- [ ] Los cambios están guardados y tienen un commit descriptivo.

## 12. Comunicación del equipo

Antes de modificar archivos globales, cambiar rutas, renombrar carpetas o incorporar una dependencia, comunicarlo al responsable del repositorio.

Cuando termines una parte, informa:

1. Qué archivos modificaste.
2. Qué funcionalidad o sección agregaste.
3. Si falta conectar algún recurso o enlace.
4. Si detectaste algún problema que otro integrante deba conocer.

**La prioridad es que el sitio funcione como un solo proyecto integrado, no como páginas independientes con estilos o rutas incompatibles.**
