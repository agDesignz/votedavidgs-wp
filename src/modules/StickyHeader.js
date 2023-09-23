class StickyHeader {
  constructor() {
    this.navRoot = document.querySelector('.header');
    this.navBar = document.querySelector('.header__container');
    this.options = {
      root: null,
      rootMargin: "120px",
      threshold: 1
    }
    this.navObserver = new IntersectionObserver(this.stick.bind(this), this.options);
    this.events();
  }

  events() {
    this.navObserver.observe(this.navRoot);
  }

  stick(entries) {
    const [entry] = entries;
    if (!entry.isIntersecting) {
      this.navBar.classList.add('header__container--fixed');
    } else {
      this.navBar.classList.remove('header__container--fixed');
    }
  }

}

export default StickyHeader;
