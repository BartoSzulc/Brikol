<section class="home__testimonials bg-color7 pb-half lg:pb-full">
    <div class="container">
        <div class="w-full">
            <div class="text-h2">
                <h2>Opinie o nas</h2>
            </div>
            <div class="text-desc my-half-mobile lg:my-half text-color6">
                <p>Lorem ipsum dolor sit amet consectetur. Egestas sem sapien consectetur risus amet sagittis fringilla donec suscipit.</p>
            </div>
        </div>
        <div class="swiper testimonialsSwiper">
            <div class="swiper-wrapper">
    
               @include('partials.swiper-testimonial-slide')
               @include('partials.swiper-testimonial-slide')
               @include('partials.swiper-testimonial-slide')

            </div>
            <div class="grid grid-cols-12 gap-5 mt-half-mobile lg:mt-half">
                <div class="xl:col-start-4 xl:col-span-6 col-span-full lg:col-span-8 lg:col-start-3">
                    <div class="testimonialsSwiper__nav flex items-center justify-center lg:justify-between w-full  lg:space-x-5">

                        <div class="testimonialsSwiper__nav--prev ">
                            @include('partials.swiper-arrow-left')
                        </div>
                        <div class="testimonialsSwiper__nav--middle hidden lg:block">
                            <a href="" class="btn btn--primary">
                                <span>Zobacz więcej opinii</span>
                            </a>
                        </div>
                        <div class="testimonialsSwiper__nav--next">
                            @include('partials.swiper-arrow-right')
                        </div>
                        
                    </div>
                    <div class="testimonialsSwiper__nav--middle lg:hidden flex items-center justify-center mt-half-mobile">
                        <a href="" class="btn btn--primary">
                            <span>Zobacz więcej opinii</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>