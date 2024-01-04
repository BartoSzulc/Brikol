import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  const isMobile = window.innerWidth < 1024;

  document.querySelectorAll('.menu-item-has-children').forEach(item => {
    let timeoutId;
    let clickCount = 0;

    item.addEventListener('mouseover', function() {
      clearTimeout(timeoutId);
      if (isMobile) {
        this.classList.add('toggle-menu');
      }
    });

    item.addEventListener('mouseout', function() {
      const element = this;
      timeoutId = setTimeout(function() {
        if (isMobile) {
          element.classList.remove('toggle-menu');
        }
      }, 500);
    });

    item.addEventListener('click', function(event) {
      if (isMobile) {
        event.preventDefault();
        clickCount++;
        if (clickCount === 1) {
          this.classList.add('toggle-menu');
        } else if (clickCount === 2) {
          const anchor = this.querySelector('a');
          if (anchor) {
            window.location.href = anchor.href;
          }
        }
      }
    });
  });
  
  document.querySelectorAll('.js-button').forEach(button => {
    button.addEventListener('click', () => {
      const menu = document.querySelector('.mobile-menu');
      menu.classList.toggle('active');
      document.body.classList.toggle('overflow-hidden');
    });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);