{{--
  Template Name: Serwis
--}}

@extends('layouts.app')

@section('content')

  <section class="hero__template bg-color7 relative py-half lg:py-full overflow-hidden">
    <div class="pointer-events-none bg-white absolute triangle-right -top-px -right-px h-20 w-20 lg:w-[160px] lg:h-[160px] z-10"></div>
    <div class="container">
        <div class="w-full mb-half-mobile lg:mb-half">
            <div class="text-h3 font-bold">
                <h1>Serwis</h1>
            </div>
        </div>
        <div class="bg-white pt-half-mobile lg:p-half relative">
          <div class="absolute bg-white w-[calc(100%+40px)] h-full z-0 inset-0 -left-5 lg:hidden"></div>
            <div class="relative z-10">
              <div class="text-base lg:text-desc text-color6 mb-half-mobile lg:mb-half relative">
                <p>Wszystkie nasze urządzenia objęte są gwarancją. W przypadku awarii lub problemów z działaniem urządzenia, prosimy o kontakt z naszym serwisem. Nasi specjaliści pomogą Państwu w rozwiązaniu problemu.
                    Lorem ipsum dolor sit amet consectetur. Bibendum pharetra nec in dapibus risus morbi vehicula. Ornare lectus dolor vulputate elementum ac et pretium eget arcu. Ut volutpat mi libero dictum feugiat et fermentum. Fringilla fames sit vulputate tellus vulputate auctor id. Placerat neque mi tristique consectetur hendrerit. Enim consequat diam morbi ac nulla orci sed. Cursus commodo mauris malesuada adipiscing. Faucibus convallis lectus id egestas libero mauris. Sem sit in quisque.</p>
              </div>
              <div class="h-auto lg:h-[480px] relative lg:overflow-hidden flex">
                  <img class="max-lg:h-[350px] max-lg:w-full max-sm:h-[250px] relative lg:absolute object-center object-cover lg:top-1/2 lg:-translate-y-1/2" src="{{ asset('images/serwis-bg.jpeg') }}" alt="">
              </div>
              <div class="bg-color7 pb-0 pt-half-mobile lg:py-half relative">
                <div class="absolute bg-color7 w-[calc(100%+40px)] h-full z-0 inset-0 -left-5 lg:hidden"></div>
                {!! do_shortcode('[contact-form-7 id="ab62bac" title="Formularz 1"]') !!}
              </div>
            </div>
        </div>
    </div>
  </section>
@endsection







