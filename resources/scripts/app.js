// import LazyLoad from "vanilla-lazyload";
import { domReady } from '@roots/sage/client';
import Menu from "./components/Menu";
import Carousels from "./components/Carousels";
// import AOS from 'aos';

/**
 * app.main
 */

// window.setTimeout(function () {  AOS.init({
//     offset: 0,
//     duration: 600,
//     easing: 'ease-in-sine',
//     anchorPlacement: 'top-bottom'
//   });
// }, 500);

const main = async (err) => {


  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // let lazyLoad = new LazyLoad({
  //   elements_selector: "[data-lazy]",
  //   load_delay: 300,
  // });

  let menu = new Menu();
  menu.init();

  let carousels = new Carousels();
  carousels.init();






  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
