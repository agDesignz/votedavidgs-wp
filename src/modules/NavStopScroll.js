class NavStopScroll {
  constructor () {
    this.body = document.querySelector('body');
    this.menuIcon = document.querySelector('.navigation__checkbox');
    this.menu = document.querySelector('.menu');
    // this.window = window;
    // this.topPosition;
    this.events();
  }

  events() {
    this.menuIcon.addEventListener('click', () => this.toggleStopScroll());
    this.menu.addEventListener('click', e => this.resetModal(e));
  }

  toggleStopScroll() {
      if (this.menuIcon.checked) {
        this.body.classList.add('stop-scroll');
      } else {
        this.body.classList.remove('stop-scroll');
      }
  }

  resetModal(e) {
    if (e.target.classList.contains('navigation__link')) this.menuIcon.checked = false;
  }
}

export default NavStopScroll;
