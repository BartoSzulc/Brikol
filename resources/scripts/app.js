// import LazyLoad from "vanilla-lazyload";
import { domReady } from '@roots/sage/client';
import Menu from "./components/Menu";
import Carousels from "./components/Carousels";
import Swiper from 'swiper';
import GLightbox from 'glightbox';
import AOS from 'aos';
import $ from 'jquery';

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
  const lightbox = GLightbox({
  });

  AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  
  });
  let menu = new Menu();
  menu.init();

  let carousels = new Carousels();
  carousels.init();
  
  const productSwipers = carousels.getProductSwipers();
  
// Uncheck all checkboxes
document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = false);

const items = document.querySelectorAll('.item');
const additionalItem = document.querySelector('.item-additional');
const priceInsert = document.querySelector('#priceInsert');

const getSlide = (slideIndex) => Array.from(document.querySelectorAll('.swiper-slide')).find(slide => slide.getAttribute('data-slide') === slideIndex.toString());

const updatePrice = (slide) => {
    if (slide) {
        const price = slide.getAttribute('data-price');
        priceInsert.textContent = price + ' zł';
    } else {
        const defaultSlide = getSlide('0');
        if (defaultSlide) {
            const defaultPrice = defaultSlide.getAttribute('data-price');
            priceInsert.textContent = defaultPrice + ' zł';
        }
    }
};


const slideTo = (slideIndex, isAdditionalItemActive) => {
    const slideIndexStr = isAdditionalItemActive ? 'filtrowymiennik ' + slideIndex : slideIndex.toString();
    const slide = getSlide(slideIndexStr);
    if (slide) {
        const actualIndex = Array.from(slide.parentElement.children).indexOf(slide);
        productSwipers[0].slideTo(actualIndex, 500);
        updatePrice(slide);
    }
};

items.forEach((item, index) => {
    if (index !== 0) {
        item.classList.add('disabled');
    }
});

if (additionalItem) {
    additionalItem.classList.add('disabled');

}

items.forEach((item) => {
    item.querySelector('input').addEventListener('change', function() {
        const slideIndex = parseInt(item.getAttribute('data-slide'));
        if (this.checked) {
            item.classList.add('active');
            item.nextElementSibling?.classList.remove('disabled');
            slideTo(slideIndex, additionalItem?.classList.contains('active'));
            additionalItem?.classList.remove('disabled');
        } else {
            item.classList.remove('active');
            Array.from(item.parentElement.children).slice(slideIndex).forEach((nextItem) => {
                nextItem.classList.remove('active');
                nextItem.classList.add('disabled');
            });
            if (!document.querySelector('.item.active')) {
                productSwipers[0].slideTo(0, 500);
                additionalItem?.classList.add('disabled');
            } else {
                slideTo(slideIndex - 1, additionalItem?.classList.contains('active'));
            }
        }
        if (!document.querySelector('.item.active')) {
            additionalItem?.classList.remove('active');
            updatePrice(null); // update to default price
        }
    });
});

if (additionalItem) {
    
    additionalItem.querySelector('input').addEventListener('change', function() {
        if (this.checked) {
            if (!document.querySelector('.item.active')) {
                additionalItem.classList.remove('active');
                return;
            }
            additionalItem.classList.add('active');
            const lastActiveItem = Array.from(items).filter(item => item.classList.contains('active')).pop();
            const lastActiveSlideIndex = lastActiveItem ? parseInt(lastActiveItem.getAttribute('data-slide')) : 0;
            slideTo(lastActiveSlideIndex, true);
        } else {
            additionalItem.classList.remove('active');
            const lastActiveItemAfterUncheck = Array.from(items).filter(item => item.classList.contains('active')).pop();
            if (lastActiveItemAfterUncheck) {
                const lastActiveSlideIndexAfterUncheck = parseInt(lastActiveItemAfterUncheck.getAttribute('data-slide'));
                slideTo(lastActiveSlideIndexAfterUncheck, false);
            } else {
                productSwipers[0].slideTo(0, 500);
                additionalItem.classList.add('disabled');
                updatePrice(null); // update to default price
            }
        }
    });
    

}

if (items.length > 0) {
    // Set the first item's checkbox to checked
    const firstItemCheckbox = items[0].querySelector('input[type="checkbox"]');
    if (firstItemCheckbox) {
        firstItemCheckbox.checked = true;
        
        // Manually trigger a change event on the first item's checkbox
        // This will cause the event listener you've set up to run
        const event = new Event('change');
        firstItemCheckbox.dispatchEvent(event);
        
        // Since the first item is now active by default, you might want to ensure
        // that the UI reflects this state correctly without waiting for user interaction.
        items[0].classList.add('active');
        if (items.length > 1) {
            items[1].classList.remove('disabled'); // Enable the second item
        }
    }
}
if (items.length > 0) {
    // Set the first item's checkbox to checked
    const firstItemCheckbox = items[0].querySelector('input[type="checkbox"]');
    if (firstItemCheckbox) {
        firstItemCheckbox.checked = true;
        
        // Manually trigger a change event on the first item's checkbox
        // This will cause the event listener you've set up to run
        const event = new Event('change');
        firstItemCheckbox.dispatchEvent(event);
        
        // Since the first item is now active by default, you might want to ensure
        // that the UI reflects this state correctly without waiting for user interaction.
        items[0].classList.add('active');
        if (items.length > 1) {
            items[1].classList.remove('disabled'); // Enable the second item
        }
    }
}
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function (event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1500, function () {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
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
