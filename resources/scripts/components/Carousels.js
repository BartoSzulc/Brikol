import Component from "./Component";
import Swiper from "swiper";
import { Autoplay, EffectFade, Pagination } from 'swiper/modules';

Swiper.use([Pagination, Autoplay, EffectFade]);

export default class Carousels extends Component {
    constructor() {
        super();
        this.heroSlider = document.querySelector('.home__hero') !== null;
    }

    init() {
        if (this.heroSlider) {
            document.querySelectorAll('.heroSwiper').forEach(el => {
                new Swiper(el, {
                    
                    slidesPerView: 1,
                    effect: "fade",
                    speed: 2500,
                    loop: true,
                    fadeEffect: {
                        crossFade: true
                    },
                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                      },
                });
            });
        }
    }
}
