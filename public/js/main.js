/**
 * ==========================================================================
 * BACALAR TOURISM — MAIN.JS
 * Lógica e interactividad del Index
 * ==========================================================================
 */

document.addEventListener('DOMContentLoaded', () => {
  initHeroCTA();
  initSecondaryNav();
  initSmoothScroll();
  initScrollSpy();
  initModals();
  initFooterYear();
  console.log('[Bacalar Tourism] Index y navegación secundaria inicializados.');
});

/**
 * Inicializa el comportamiento de desplazamiento suave para el botón CTA del Hero.
 */
function initHeroCTA() {
  const ctaBtn = document.querySelector('.btn-hero-cta');
  if (!ctaBtn) return;

  ctaBtn.addEventListener('click', (event) => {
    const targetId = ctaBtn.getAttribute('href');
    if (targetId && targetId.startsWith('#') && targetId.length > 1) {
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        event.preventDefault();
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    }
  });
}

/**
 * Inicializa la interactividad de la barra de navegación secundaria:
 * - Control de estado activo al hacer click.
 * - Desplazamiento horizontal táctil suave para centrar el elemento activo en dispositivos móviles/tablets.
 * - Prevención de salto abrupto para enlaces temporales '#'.
 */
function initSecondaryNav() {
  const navLinks = document.querySelectorAll('.nav-link-sec');
  const scrollWrapper = document.querySelector('.secondary-nav-scroll-wrapper');
  if (!navLinks.length) return;

  navLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
      const href = link.getAttribute('href');

      // Si el enlace es temporal (#), prevenimos el salto de página.
      // No lo marcamos como activo: su sección todavía no está conectada.
      if (!href || href === '#') {
        event.preventDefault();
        return;
      }

      if (href.startsWith('#') && href.length > 1) {
        const targetElement = document.querySelector(href);
        if (targetElement) {
          event.preventDefault();
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }

      // Actualizar estado activo en la interfaz.
      navLinks.forEach((l) => {
        l.classList.remove('active');
        l.removeAttribute('aria-current');
      });
      link.classList.add('active');
      link.setAttribute('aria-current', 'page');

      // En tablets y móviles, centrar suavemente el enlace activo dentro del contenedor con scroll.
      if (scrollWrapper && window.innerWidth < 1200) {
        const linkRect = link.getBoundingClientRect();
        const wrapperRect = scrollWrapper.getBoundingClientRect();
        const offset = (linkRect.left - wrapperRect.left) - (wrapperRect.width / 2) + (linkRect.width / 2);

        scrollWrapper.scrollBy({
          left: offset,
          behavior: 'smooth'
        });
      }
    });
  });
}

/**
 * Desplazamiento suave para todos los enlaces internos del sitio.
 * Los enlaces con href="#" se mantienen como temporales y no navegan.
 */
function initSmoothScroll() {
  const internalLinks = document.querySelectorAll('a[href^="#"]');

  internalLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
      const href = link.getAttribute('href');
      if (!href || href === '#') {
        event.preventDefault();
        return;
      }

      // Los enlaces de la navegación secundaria y el CTA del Hero ya tienen su propio manejador.
      if (link.classList.contains('nav-link-sec') || link.classList.contains('btn-hero-cta')) return;

      const target = document.querySelector(href);
      if (!target) return;

      event.preventDefault();
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    });
  });
}

/**
 * Resalta el enlace de la navegación secundaria correspondiente a la sección visible.
 * Solo se actualizan los enlaces con atributo data-spy para evitar duplicados.
 */
function initScrollSpy() {
  const allLinks = Array.from(document.querySelectorAll('.nav-link-sec'));
  const links = allLinks.filter((link) => link.dataset.spy);
  if (!links.length) return;

  const sections = links
    .map((link) => document.getElementById(link.dataset.spy))
    .filter((section) => section !== null);

  if (!sections.length) return;

  const nav = document.querySelector('.secondary-nav-section');
  let ticking = false;

  const updateActiveLink = () => {
    const navHeight = nav ? nav.offsetHeight : 0;
    const offset = navHeight + 48;
    let currentId = sections[0].id;

    sections.forEach((section) => {
      const rect = section.getBoundingClientRect();
      if (rect.top <= offset) {
        currentId = section.id;
      }
    });

    allLinks.forEach((link) => {
      const isActive = Boolean(link.dataset.spy) && link.dataset.spy === currentId;
      link.classList.toggle('active', isActive);
      if (isActive) {
        link.setAttribute('aria-current', 'page');
      } else {
        link.removeAttribute('aria-current');
      }
    });

    ticking = false;
  };

  const onScroll = () => {
    if (!ticking) {
      window.requestAnimationFrame(updateActiveLink);
      ticking = true;
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll);
  updateActiveLink();
}

/**
 * Refuerza el comportamiento de los modales de monumentos:
 * - Reinicia el scroll interno al abrir.
 * - Mantiene el foco en el botón de cierre al mostrarse.
 */
function initModals() {
  const modals = document.querySelectorAll('.site-modal');
  if (!modals.length) return;

  modals.forEach((modal) => {
    const content = modal.querySelector('.site-modal-content');
    const closeButton = modal.querySelector('.site-modal-close');

    modal.addEventListener('show.bs.modal', () => {
      if (content) content.scrollTop = 0;
    });

    modal.addEventListener('shown.bs.modal', () => {
      if (closeButton) closeButton.focus({ preventScroll: true });
    });
  });
}

/**
 * Actualiza el año del copyright del footer sin fijarlo manualmente.
 */
function initFooterYear() {
  const yearElement = document.getElementById('footer-year');
  if (yearElement) {
    yearElement.textContent = String(new Date().getFullYear());
  }
}
