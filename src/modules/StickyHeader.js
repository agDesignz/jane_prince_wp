class StickyHeader {
  constructor() {
    this.navRoot = document.querySelector('.navigation');
    this.navBar = document.querySelector('.navigation__container');
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
      this.navBar.classList.add('navigation__container--fixed');
    } else {
      this.navBar.classList.remove('navigation__container--fixed');
    }
  }

}

export default StickyHeader;