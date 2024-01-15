// import LazyLoad from "vanilla-lazyload";
import { domReady } from '@roots/sage/client';
import Menu from "./components/Menu";
import Carousels from "./components/Carousels";
import Swiper from 'swiper';
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

  const productSwipers = carousels.getProductSwipers();

  document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.item');
    const additionalItem = document.querySelector('.item-additional');
    
    items.forEach((item, index) => {
      if (index !== 0) {
          item.classList.add('disabled');
        }
    });
    additionalItem.classList.add('disabled');
    items.forEach((item) => {
      item.querySelector('input').addEventListener('change', function() {
          const slideIndex = parseInt(item.getAttribute('data-slide'));
          if (this.checked) {
              item.classList.add('active');
              if (item.nextElementSibling) {
                  item.nextElementSibling.classList.remove('disabled');
              }
              productSwipers[0].slideTo(slideIndex, 500);
              additionalItem.classList.remove('disabled'); // Usuwamy 'disabled' z additionalItem
          } else {
              item.classList.remove('active');
              const nextItems = Array.from(item.parentElement.children).slice(slideIndex);
              nextItems.forEach((nextItem) => {
                  nextItem.classList.remove('active');
                  nextItem.classList.add('disabled');
              });
              if (!document.querySelector('.item.active')) {
                  productSwipers[0].slideTo(0, 500);
                  additionalItem.classList.add('disabled'); // Dodajemy 'disabled' do additionalItem
              } else {
                  productSwipers[0].slideTo(slideIndex - 1, 500);
              }
          }
      });
    });
    additionalItem.querySelector('input').addEventListener('change', function() {
        if (this.checked) {
            additionalItem.classList.add('active');
            const lastActiveItem = Array.from(items).filter(item => item.classList.contains('active')).pop();
            const lastActiveSlideIndex = lastActiveItem ? parseInt(lastActiveItem.getAttribute('data-slide')) : 0;
            const newSlideIndex = 'filtrowymiennik ' + (lastActiveSlideIndex);
            const newSlide = Array.from(document.querySelectorAll('.swiper-slide')).find(slide => slide.getAttribute('data-slide') === newSlideIndex);
            if (newSlide) {
                const newSlideActualIndex = Array.from(newSlide.parentElement.children).indexOf(newSlide);
                productSwipers[0].slideTo(newSlideActualIndex, 500);
            }
            console.log(newSlideIndex);
            if (lastActiveItem) {
                console.log('Last active item:', lastActiveItem);
            }
        } else {
            additionalItem.classList.remove('active');
            const lastActiveItemAfterUncheck = Array.from(items).filter(item => item.classList.contains('active')).pop();
            if (lastActiveItemAfterUncheck) {
                const lastActiveSlideIndexAfterUncheck = parseInt(lastActiveItemAfterUncheck.getAttribute('data-slide'));
                productSwipers[0].slideTo(lastActiveSlideIndexAfterUncheck, 500);
            } else {
                productSwipers[0].slideTo(0, 500);
                additionalItem.classList.add('disabled'); // Dodajemy 'disabled' do additionalItem
            }
        }
    });
  });
// application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
