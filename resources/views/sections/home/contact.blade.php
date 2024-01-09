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