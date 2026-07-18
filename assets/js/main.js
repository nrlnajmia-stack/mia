document.addEventListener('DOMContentLoaded', function () {
  const navToggle = document.querySelector('#nav-toggle');
  const navMenu = document.querySelector('#nav-menu');

  if (navToggle && navMenu) {
    navToggle.addEventListener('click', function () {
      navMenu.classList.toggle('hidden');
      navToggle.setAttribute('aria-expanded', navMenu.classList.contains('hidden') ? 'false' : 'true');
    });
  }

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (event) {
      if (this.hash) {
        event.preventDefault();
        const target = document.querySelector(this.hash);
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          history.pushState(null, '', this.hash);
          if (!navMenu.classList.contains('hidden')) {
            navMenu.classList.add('hidden');
          }
        }
      }
    });
  });
});
