
export const mobileMenuToggle = () => {
  const desktopBreakpoint = 820;

  const headerMenu = document.querySelector('.js-header');
  const menuBtn = document.querySelector('.js-menu-toggle');
  const navMenuContainer = document.querySelector('.js-menu-container');

  
  menuBtn.addEventListener('click', () => {
    headerMenu.classList.toggle('is-menu-open');
    navMenuContainer.classList.toggle('is-open');
    document.body.classList.toggle('is-menu-open');
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth >= desktopBreakpoint) {
      headerMenu.classList.remove('is-menu-open');
      navMenuContainer.classList.remove('is-open');
      document.body.classList.remove('is-menu-open');
    } 
  });

}