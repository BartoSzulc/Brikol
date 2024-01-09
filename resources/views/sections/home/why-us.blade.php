<section class="home__why-us pt-half lg:pt-full lg:pb-[130px] pb-20 text-white relative overflow-hidden">
    <div class="hidden lg:block absolute triangle bg-white right-0 -top-[0.5px] w-[calc((680/1920)*100%)] h-full z-[2]"></div>
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