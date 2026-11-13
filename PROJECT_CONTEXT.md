# PROJECT_CONTEXT — Bacalar Tourism

## 1. Identificación

- **Proyecto:** Bacalar Tourism
- **Tipo:** sitio web turístico universitario
- **Destino:** Bacalar, Quintana Roo, México
- **Responsable del Index:** Delfín
- **Repositorio:** repositorio Git compartido por el equipo
- **Diseño de referencia:** archivo Figma `Home-Bacalar`
- **Frame principal:** `Bacalar Tourism Homepage(Delfin)` (`4:1819`)
- **Dimensiones del frame:** 1440 × 9772 px

## 2. Objetivo

Implementar una página principal que presente Bacalar y permita explorar sus atractivos naturales, historia, cultura, experiencias comunitarias y recomendaciones de viaje. El resultado debe conservar la identidad visual y la estructura del diseño aprobado en Figma.

## 3. Stack obligatorio

- HTML5
- Bootstrap 5
- CSS3
- JavaScript vanilla

No usar React, Vue, Angular, Tailwind, Astro, TypeScript ni herramientas equivalentes, salvo autorización expresa del equipo y del profesor.

## 4. Fuentes de verdad

1. El frame `Bacalar Tourism Homepage(Delfin)` en Figma es la referencia visual principal del Index.
2. Este documento define el contexto y las restricciones del proyecto.
3. `DEVELOPMENT_PLAN.md` define las etapas y el alcance de implementación.
4. `README.md` explica al equipo cómo trabajar con el repositorio.

Si existe una contradicción, no inventar una solución silenciosamente: señalarla y pedir decisión al responsable del Index.

## 5. Alcance del Index

Implementar estas diez secciones, en este orden:

1. Hero.
2. Navegación secundaria.
3. Galería visual.
4. Naturaleza y cenote.
5. Cultura e historia.
6. Turismo comunitario y experiencias.
7. Banner Compras y Souvenirs.
8. Monumentos históricos.
9. Guía de viaje y sustentabilidad.
10. Footer.

El Index también incluirá enlaces temporales a páginas de compañeros, que se conectarán cuando sus rutas estén definidas.

## 6. Decisiones aprobadas

- El diseño de Figma es definitivo como referencia para la primera implementación.
- El Hero tendrá un contenedor preparado para un video de fondo sin sonido; el video se agregará después.
- En la primera versión, los espacios de imágenes estarán vacíos, pero conservarán sus proporciones y composición.
- Se creará `img/` con subcarpetas por sección para incorporar recursos posteriormente.
- La navegación móvil será una barra horizontal con desplazamiento táctil.
- Compras y Souvenirs tendrá temporalmente `href="#"`.
- Las imágenes faltantes de monumentos se representarán con fondo azul y el texto “Fotografía próximamente”.
- Consejos, Gastronomía y Actividades recreativas permanecerán como tres enlaces distintos con `href="#"` temporal.
- Los enlaces a páginas de compañeros quedarán temporales hasta conocer las rutas finales.
- El Index debe adaptarse a escritorio, tablet y móvil.

## 7. Identidad visual de referencia

### Colores identificados

- Azul oscuro: `#0b2545`
- Azul de navegación: `#20416b`
- Turquesa: `#48c9b0`
- Azul cielo: `#2a9dce`
- Fondo claro: `#f4fafc`
- Texto secundario: `#5f7487`

### Tipografías identificadas

- Cormorant Garamond
- Inter
- Nunito
- Birthstone Bounce (marca y elementos del footer)

Verificar pesos y tamaños exactos en Figma al implementar. No sustituir tipografías sin justificarlo.

## 8. Estructura inicial del repositorio

```text
Bacalar tourism/
├── index.html
├── css/
│   ├── styles.css
│   ├── components.css
│   └── responsive.css
├── js/
│   └── main.js
├── img/
│   ├── hero/
│   ├── gallery/
│   ├── nature/
│   ├── culture/
│   ├── experiences/
│   ├── monuments/
│   └── branding/
├── videos/
│   └── hero/
├── pages/
├── PROJECT_CONTEXT.md
├── DEVELOPMENT_PLAN.md
└── README.md
```

## 9. Límites de edición para agentes

Durante la primera etapa:

- Trabajar únicamente en el Index y los archivos globales expresamente incluidos en la tarea.
- No crear, editar, borrar ni renombrar páginas de compañeros dentro de `pages/`.
- No modificar archivos ajenos ni reestructurar el repositorio.
- No descargar imágenes ni videos.
- No agregar dependencias nuevas.
- No implementar secciones que no estén en el alcance aprobado.
- No cambiar el diseño de Figma por preferencias propias.
- No conectar rutas que aún no hayan sido confirmadas.

Antes de modificar un archivo global compartido, informar qué se cambiará y por qué.

## 10. Criterio de calidad

El resultado debe ser fiel a Figma en escritorio y usable en tablet y móvil. Las imágenes y el video pueden faltar en esta etapa, pero sus contenedores deben conservar proporciones, tamaños relativos y composición. El código debe ser legible, organizado y compatible con el stack indicado.
