@extends('layouts.app')

@section('content')
<section class="home__hero pt-10 hidden">
    <div class="container">
        <div class="row lg:grid flex flex-col lg:grid-cols-12 gap-5 grid-flow-col">
            <div class="col-span-4 flex flex-col items-end justify-end">
            <div class="text-h1">
                <h1>Producent
                    wysokiej jakości 
                    linii do produkcji
                    Pelletu</h1>
            </div>
            <div class="text-desc text-color6"> 
                <p>Lorem ipsum dolor sit amet consectetur. Elementum mauris odio neque lorem eget.</p>
            </div>
            <div class="buttons flex flex-row">
                <a href="#" class="btn btn--primary"><span>Oferta</span></a>
                <a href="#" class="btn btn--secondary"><span>Kontakt</span></a>
            </div>
            </div>
            <div class="col-span-9">
                <img class="w-full h-[600px] object-cover object-center" src="{{ placehold_img('300x300', 'jpg', '#000', '#fff', 'Hello World'); }}" alt="">
            </div>
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
            <div class="col-span-full lg:col-span-6">
                <img src="{{ asset('images/about-clip.png') }}" alt="">
            </div>
            <div class="col-span-full lg:col-span-3 flex flex-col">
                <div class="text-h4 mb-half-mobile lg:mb-half">
                    <h3>Firma poza produkcją maszyn i wdrażaniem technologii pelletowania oferuje pełną opiekę gwarancyjną i pogwarancyjną wraz z mobilnym serwisem. </h3>
                </div>
                <div class="text-base text-color6">
                    <p>Kompleksowe centra obróbcze znajdujące się bezpośrednio w zakładzie produkcyjnym w Człuchowie zapewniają stałą dostępność do części zamiennych. Linie do produkcji pelletu pracują w wielu zakładach w Polsce i Europie."</p>
                </div>
                <div class="mt-auto flex flex-col items-center justify-center">
                    <a href="#" class="btn btn--primary">Kontakt</a>
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

            </div>
            <div class="col-span-full lg:col-span-6">

                {{-- j/w  --}}
            </div>
        </div>
        <div class="w-full flex justify-center ">
            <a href="#" class="btn btn--primary">Oferta</a>
        </div>
    </div>
</section>

@endsection
