@extends('layouts.app')

@section('content')
<section class="home__hero overflow-hidden">
    <div class="container relative">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row lg:grid flex flex-col lg:grid-cols-12 gap-5 grid-flow-col relative bg-white h-[600px]">
                        <div class="col-span-4 flex flex-col items-start justify-center relative z-10">
                        <div class="text-h1 mt-half lg:mt-full font-extrabold">
                            <h1>Producent
                                wysokiej jakości 
                                linii do produkcji
                                Pelletu</h1>
                        </div>
                        <div class="text-desc text-color6 mt-5 lg:mt-10"> 
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum mauris odio neque lorem eget.</p>
                        </div>
                        <div class="buttons flex flex-row mt-auto">
                            <a class="btn btn--primary" href=""><span>Oferta</span></a>
                            <a class="btn btn--secondary" href=""><span>Kontakt</span></a>
                        </div>
                        </div>
                        <div class="col-span-9">
                            <div class="triangle w-[calc((515/1600)*100%)] h-[600px] absolute bottom-0 bg-white z-[1] left-[calc((399.5/1600)*100%)]"></div>
                            <img class="right-0 absolute w-[calc((1200/1600)*100%)] bottom-0 h-[600px] object-cover object-right z-0" src="{{ asset('images/home-hero-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row lg:grid flex flex-col lg:grid-cols-12 gap-5 grid-flow-col relative bg-white h-[600px]">
                        <div class="col-span-4 flex flex-col items-start  justify-center relative z-10">
                        <div class="text-h1 mt-half lg:mt-full font-extrabold">
                            <h1>Producent
                                wysokiej jakości 
                                linii do produkcji
                                Pelletu</h1>
                        </div>
                        <div class="text-desc text-color6 mt-5 lg:mt-10"> 
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum mauris odio neque lorem eget.</p>
                        </div>
                        <div class="buttons flex flex-row mt-auto">
                            <a href="#" class="btn btn--primary"><span>Oferta</span></a>
                            <a href="#" class="btn btn--secondary"><span>Kontakt</span></a>
                        </div>
                        </div>
                        <div class="col-span-9">
                            <div class="triangle w-[calc((515/1600)*100%)] h-[600px] absolute bottom-0 bg-white z-[1] left-[calc((399.5/1600)*100%)]"></div>
                            <img class="right-0 absolute w-[calc((1200/1600)*100%)] bottom-0 h-[600px] object-cover object-right z-0" src="{{ asset('images/homer-hero-second-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row lg:grid flex flex-col lg:grid-cols-12 gap-5 grid-flow-col relative bg-white h-[600px]">
                        <div class="col-span-4 flex flex-col items-start  justify-center relative z-10">
                        <div class="text-h1 mt-half lg:mt-full font-extrabold">
                            <h1>Producent
                                wysokiej jakości 
                                linii do produkcji
                                Pelletu</h1>
                        </div>
                        <div class="text-desc text-color6 mt-5 lg:mt-10"> 
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum mauris odio neque lorem eget.</p>
                        </div>
                        <div class="buttons flex flex-row mt-auto">
                            <a href="#" class="btn btn--primary"><span>Oferta</span></a>
                            <a href="#" class="btn btn--secondary"><span>Kontakt</span></a>
                        </div>
                        </div>
                        <div class="col-span-9">
                            <div class="triangle w-[calc((515/1600)*100%)] h-[600px] absolute bottom-0 bg-white z-[1] left-[calc((399.5/1600)*100%)]"></div>
                            <img class="right-0 absolute w-[calc((1200/1600)*100%)] bottom-0 h-[600px] object-cover object-right z-0" src="{{ asset('images/homer-hero-second-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="heroSwiper__pagination swiper-pagination"></div>
        </div>
      
    </div>
</section>
<section class="home__about lg:py-full py-half">
    <div class="container">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-full lg:col-span-3">
                <div class="text-h2">
                    <h2>O nas</h2>
                </div>
                <div class="text-h4 py-half-mobile lg:py-half">
                    <h3>Kompleksowe rozwiązania i technologie pozwalające na zagospodarowanie trocin i produkcję pelletu. </h3>
                </div>

                <div class="text-base text-color6">
                    <p>
                        W zakładzie wytwarzane są granulatory, suszarnie do trocin, młyny bijakowe, podajniki do trocin, zbiorniki na trociny i gotowy pellet, systemy pakujące.  
                    </p>
                    &nbsp;
                    <p>
                        Przedsiębiorstwo oferuje granulatory i linie pelletujące w zakresach wydajności od 200 do 2500 kg/h.</p>
                </div>
            </div>
            <div class="col-span-full lg:col-span-6 relative">
  
                <img class="" src="{{ asset('images/about.png') }}" alt="">
            </div>
            <div class="col-span-full lg:col-span-3 flex flex-col">
                <div class="text-h4 mb-half-mobile lg:mb-half">
                    <h3>Firma poza produkcją maszyn i wdrażaniem technologii pelletowania oferuje pełną opiekę gwarancyjną i pogwarancyjną wraz z mobilnym serwisem. </h3>
                </div>
                <div class="text-base text-color6">
                    <p>Kompleksowe centra obróbcze znajdujące się bezpośrednio w zakładzie produkcyjnym w Człuchowie zapewniają stałą dostępność do części zamiennych. Linie do produkcji pelletu pracują w wielu zakładach w Polsce i Europie."</p>
                </div>
                <div class="mt-half-mobile lg:mt-auto flex flex-col items-center justify-center">
                    <a class="btn btn--primary" href=""><span>Kontakt</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home__offer bg-color7 py-half lg:py-full">
    <div class="container">
        <div class="w-full">
            <div class="text-h2">
                <h2>Oferta</h2>
            </div>
            <div class="text-desc my-half-mobile lg:my-half text-color6">
                <p>Lorem ipsum dolor sit amet consectetur. Egestas sem sapien consectetur risus amet sagittis fringilla donec suscipit.</p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-full lg:col-span-6">
                {{-- kategoria relacja acf --}}
                <div class="bg-white w-full h-full relative flex flex-col">
                    <div class="absolute triangle -right-px -top-px z-10 w-[calc((115/790)*100%)] h-[120px] bg-color7">
                        
                    </div>
                    <div class="lg:p-half p-half-mobile flex flex-col relative z-10">
                        <div class="text-h2 mb-half-mobile lg:mb-half">
                            <h2>Linie produkcji pelletu</h2>
                        </div>
                        <div class="text-base text-color6">
                            <p>Lorem ipsum dolor sit amet consectetur. Fermentum sed venenatis pretium vulputate in laoreet quisque lacinia amet. Nisi consectetur nec urna odio pulvinar magna lorem. Varius blandit nunc tristique velit consequat elementum ornare aliquam dictum. Et nulla consectetur dui mi in euismod id ac. Turpis laoreet eget massa volutpat.</p>
                        </div>
                        <div class="lg:mt-auto lg:pt-half mt-half-mobile">
                            <a href="" class="btn btn--primary"><span>Zobacz produkty</span></a>
                        </div>
                    </div>
                    <img class="w-full h-[400px] object-center mt-auto block object-cover" src="{{ asset('images/oferta-linia.png') }}" alt="">
                </div>
               

            </div>
            <div class="col-span-full lg:col-span-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="col-span-1">
                        <div class="bg-white w-full h-full relative  flex flex-col">
                            <div class="absolute triangle -right-px -top-px z-10 w-[calc((115/385)*100%)] h-[120px] bg-color7">
                            </div>
                            <div class="lg:p-30 p-5 flex flex-col space-y-5 lg:space-y-30 relative z-10">
                                <div class="text-h4">
                                    <h2>Maszyny</h2>
                                </div>
                                <div class="text-base text-color6">
                                    <p>Lorem ipsum dolor sit amet consectetur. Fermentum sed venenatis pretium. </p>
                                </div>
                                <div class="lg:mt-auto">
                                    <a href="" class="btn btn--primary"><span>Zobacz produkty</span></a>
                                </div>
                            </div>
                            <img class="h-[134px] w-full object-center object-cover" src="{{ asset('images/oferta-maszyny.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-white w-full h-full relative  flex flex-col">
                            <div class="absolute triangle -right-px -top-px z-10 w-[calc((115/385)*100%)] h-[120px] bg-color7">
                            </div>
                            <div class="lg:p-30 p-5 flex flex-col space-y-5 lg:space-y-30 relative z-10">
                                <div class="text-h4">
                                    <h2>Granulatory</h2>
                                </div>
                                <div class="text-base text-color6">
                                    <p>Lorem ipsum dolor sit amet consectetur. Fermentum sed venenatis pretium. </p>
                                </div>
                                <div class="lg:mt-auto">
                                    <a href="" class="btn btn--primary"><span>Zobacz produkty</span></a>
                                </div>
                            </div>
                            <img class="h-[134px] w-full object-center object-cover" src="{{ asset('images/oferta-granulatory.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-white w-full h-full relative  flex flex-col">
                            <div class="absolute triangle -right-px -top-px z-10 w-[calc((115/385)*100%)] h-[120px] bg-color7">
                            </div>
                            <div class="lg:p-30 p-5 flex flex-col space-y-5 lg:space-y-30 relative z-10">
                                <div class="text-h4">
                                    <h2>Transportery taśmowe</h2>
                                </div>
                                <div class="text-base text-color6">
                                    <p>Lorem ipsum dolor sit amet consectetur. Fermentum sed venenatis pretium. </p>
                                </div>
                                <div class="lg:mt-auto">
                                    <a href="" class="btn btn--primary"><span>Zobacz produkty</span></a>
                                </div>
                            </div>
                            <img class="h-[134px] w-full object-center object-cover" src="{{ asset('images/oferta-transportery.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-white w-full h-full relative  flex flex-col">
                            <div class="absolute triangle -right-px -top-px z-10 w-[calc((115/385)*100%)] h-[120px] bg-color7">
                            </div>
                            <div class="lg:p-30 p-5 flex flex-col space-y-5 lg:space-y-30 relative z-10">
                                <div class="text-h4">
                                    <h2>Młyn bijakowy</h2>
                                </div>
                                <div class="text-base text-color6">
                                    <p>Lorem ipsum dolor sit amet consectetur. Fermentum sed venenatis pretium. </p>
                                </div>
                                <div class="lg:mt-auto">
                                    <a href="" class="btn btn--primary"><span>Zobacz produkty</span></a>
                                </div>
                            </div>
                            <img class="h-[134px] w-full object-center object-cover" src="{{ asset('images/oferta-mlyn.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center mt-half-mobile lg:mt-half">
            <a href="#" class="btn btn--secondary">
                <span>Sprawdź całą ofertę</span>
            </a>
        </div>
    </div>
</section>
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
    </div>
</section>
<section class="home__why-us pt-half lg:pt-full lg:pb-[130px] pb-20 text-white relative">
    <div class="hidden lg:block absolute triangle bg-white -right-px -top-px w-[calc((680/1920)*100%)] h-full z-[2]"></div>
    <div class="home__why-us--bg absolute bottom-0 w-full h-full bg-color1 flex z-[1]">
        <img class="mix-blend-luminosity object-bottom object-cover w-full pointer-events-none" src="{{ asset('images/why-us-bg.png') }}" alt="">
    </div>
    <div class="container">
        <div class="grid grid-cols-12 gap-5 relative z-10">
            <div class="lg:col-span-9 col-span-full">
                <div class="flex flex-col space-y-half-mobile lg:space-y-half">
                    <div class="text-h3 text-color4 font-bold">
                        <h2>Dlaczego warto?</h2>
                    </div>
                    <div class="text-h2 font-bold">
                        <h3>Firma BRIKOL istnieje na polskim rynku od kilku lat. Zajmujemy się produkcją, sprzedażą maszyn do produkcji pelletu oraz części zamiennych</h3>
                    </div>
                    <div class="text-desc font-medium opacity-70">
                        <p>W zakładzie wytwarzane są granulatory, suszarnie do trocin, młyny bijakowe, podajniki do trocin, zbiorniki na trociny i gotowy pellet, systemy pakujące.  Przedsiębiorstwo oferuje granulatory i linie pelletujące w zakresach wydajności od 200 do 2500 kg/h. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-5 relative z-10 mt-half-mobile lg:mt-half">
            <div class="col-span-1 flex items-center justify-start space-x-5">
                @svg('images/premium-quality')
                <div class="text-desc font-semibold">
                    <p>Wysoka<br/>jakość</p>
                </div>
            </div>
            <div class="col-span-1 flex items-center justify-start space-x-5">
                @svg('images/premium-quality')
                <div class="text-desc font-semibold">
                    <p>Wysoka<br/>jakość</p>
                </div>
            </div>
            <div class="col-span-1 flex items-center justify-start space-x-5">
                @svg('images/premium-quality')
                <div class="text-desc font-semibold">
                    <p>Duży wybór<br/>
                        produktów</p>
                </div>
            </div>
            <div class="col-span-1 flex items-center justify-start space-x-5">
                @svg('images/premium-quality')
                <div class="text-desc font-semibold">
                    <p>Wieloletnie <br/>
                        doświadczenie</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home__contact py-half lg:py-full" id="kontakt">
    <div class="container">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-full lg:col-span-4 flex flex-col">
                <div class="text-h3 font-bold mb-half-mobile lg:mb-half">
                    <h2>Kontakt</h2>
                </div>
                <div class="flex flex-col space-y-5">
                    <div class="text-h4 font-bold">
                        <p>BRIKOL</p>
                        <p>Marcin Poźniak</p>
                    </div>
                    <div class="text-h5 font-semibold">
                        <p>Kołdowo 72C</p>
                        <p>77-300 Kołdowo</p>
                    </div>
                    <div class="text-h6 text-color6 font-semibold">
                        <p>NIP: 9241758217</p>
                        <p>REGON: 220860666</p>
                    </div>
                </div>
                <div class="inline-flex mt-auto pt-5">
                    <a href="#" class="btn btn--primary">
                        <span>Sprawdź jak dojechać</span>
                    </a>
                </div>
            </div>
            <div class="col-span-full lg:col-span-4 relative">
                <div class="absolute triangle triangle-top -right-px -top-px z-10 w-[calc((115/520)*100%)] h-[120px] bg-white"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2363.6577616427953!2d17.328668676983344!3d53.67090155038956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47023748e3a921d1%3A0x35230bc445c91eed!2sBRIKOL%20-%20Linie%20do%20produkcji%20pelletu.%20Granulatory%2C%20pelleciarki%2C%20suszarnie%2C%20m%C5%82yny%20bijakowe.!5e0!3m2!1spl!2spl!4v1704730315781!5m2!1spl!2spl" width="100%" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="absolute triangle triangle-bottom -left-px -bottom-px z-10 w-[calc((115/520)*100%)] h-[120px] bg-white"></div>
            </div>
            <div class="col-span-full lg:col-span-3 lg:col-start-10 flex flex-col justify-end">
                <div class="flex flex-col space-y-5 lg:mb-half mb-5">
                    <a class="item flex items-center justify-start lg:space-x-30 space-x-5" href="tel:{{ removeSpaces('792 207 550') }}">
                        @svg('images/tel')
                        <span>792 207 550</span>
                    </a>
                    <a class="item flex items-center justify-start lg:space-x-30 space-x-5" href="tel:{{ removeSpaces('792 207 550') }}">
                        @svg('images/tel')
                        <span>792 207 550</span>
                    </a>
                    <a class="item flex items-center justify-start lg:space-x-30 space-x-5" href="mailto:{{ removeSpaces('sklep@brikol.pl') }}">
                        @svg('images/mail')
                        <span>sklep@brikol.pl</span>
                    </a>
                    <a class="item flex items-center justify-start lg:space-x-30 space-x-5" href="mailto:{{ removeSpaces('biuro@brikol.pl') }}">
                        @svg('images/mail')
                        <span>biuro@brikol.pl</span>
                    </a>
                </div>
                <div class="inline-flex">
                    <a href="" class="btn btn--primary">
                        <span>Kontakt</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
