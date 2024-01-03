import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  document.querySelectorAll('.menu-item-has-children').forEach(item => {
    let timeoutId;
    item.addEventListener('mouseover', function() {
      clearTimeout(timeoutId);
      this.classList.add('toggle-menu');
    });

    item.addEventListener('mouseout', function() {
      const element = this;
      timeoutId = setTimeout(function() {
        element.classList.remove('toggle-menu');
      }, 500);
    });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
