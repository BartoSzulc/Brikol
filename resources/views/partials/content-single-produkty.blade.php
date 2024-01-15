@php
$custom_taxonomy_terms = get_the_terms(get_the_ID(), 'kategoria_produktu');

$title = isset($title) ? $title : get_the_title();
@endphp

<section class="hero__template  bg-color7 relative py-half lg:py-full overflow-hidden single-produkty">
    <div class="pointer-events-none bg-white absolute triangle-right -top-px -right-px h-20 w-20 lg:w-[160px] lg:h-[160px] z-10"></div>
    <div class="container">
        <div class="w-full mb-half-mobile lg:mb-half">
            <div class="text-h3 font-bold">
                    
                    @if ($custom_taxonomy_terms && !is_wp_error($custom_taxonomy_terms))
                        @foreach ($custom_taxonomy_terms as $term)
                            {{ $term->name }}
                        @endforeach
                    @endif
                  
            </div>
        </div>
        <div class="bg-white p-half-mobile lg:p-half">
            <div class="text-h2 font-bold mb-half-mobile lg:mb-half">
                <h2>{{ $title }}</h2>
            </div>
            <div class="text-desc text-color6 mb-half-mobile lg:mb-half">
                <p>{{ the_content() }}</p>
            </div>
            <div class="flex checkboxes">
                <div class="item" data-name="variation-1"  data-slide="1">
                    <input type="checkbox" id="variation-1">
                    <label for="variation-1">CNC BT1000+</label>
                    <div class="absolute bg-white triangle h-full -top-px -right-px w-[calc((90/335)*100%)] pointer-events-none"></div>
                </div>
                <div class="item" data-name="variation-2" data-slide="2">
                    <input type="checkbox" id="variation-2">
                    <label for="variation-2">CNC BT1000++</label>
                    <div class="absolute bg-white triangle h-full -top-px -right-px w-[calc((90/335)*100%)] pointer-events-none"></div>
                </div>
                <div class="item" data-name="variation-3" data-slide="3">
                    <input type="checkbox" id="variation-3">
                    <label for="variation-3">CNC BT1000+++</label>
                    <div class="absolute bg-white triangle h-full -top-px -right-px w-[calc((90/335)*100%)] pointer-events-none"></div>
                </div>
                <div class="item" data-name="variation-4" data-slide="4">
                    <input type="checkbox" id="variation-4">
                    <label for="variation-4">CNC BT1000++++</label>
                    <div class="absolute bg-white triangle h-full -top-px -right-px w-[calc((90/335)*100%)] pointer-events-none"></div>
                </div>
            </div>
            <div class="flex additional-checkbox mt-5">
                <div class="item-additional">
                    <input type="checkbox" id="additional-checkbox" data-slide="filtrowymiennik">
                    <label for="additional-checkbox">FILTROWYMIENNIK</label>
                    <div class="absolute bg-white triangle h-full -top-px -right-px w-[calc((90/335)*100%)] pointer-events-none"></div>
                </div>
            </div>
            <div class="swiper productSwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide w-full" data-slide="0">
                        0
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                    <div class="swiper-slide w-full" data-slide="1">
                        1
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                    <div class="swiper-slide w-full" data-slide="2">
                        2
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                    <div class="swiper-slide w-full" data-slide="3">
                        3
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                    <div class="swiper-slide w-full" data-slide="4">
                        4
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                    <div class="swiper-slide w-full" data-slide="filtrowymiennik 1">
                        1-filtro
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                    <div class="swiper-slide w-full" data-slide="filtrowymiennik 2">
                        2-filtro
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                    <div class="swiper-slide w-full" data-slide="filtrowymiennik 3">
                        3-filtro
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                    <div class="swiper-slide w-full" data-slide="filtrowymiennik 4">
                        4-filtro
                        <img src="{{ asset('images/BT1000n_v2-zw.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

