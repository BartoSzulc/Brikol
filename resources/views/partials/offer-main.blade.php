<section class="hero__template bg-color7 relative py-half lg:py-full overflow-hidden">
    <div class="pointer-events-none bg-white absolute triangle-right -top-px -right-px h-20 w-20 lg:w-[160px] lg:h-[160px] z-10"></div>
    <div class="container">
        <div class="w-full mb-half-mobile lg:mb-half">
            <div class="text-h3 font-bold">
                <h1>Oferta</h1>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
          @while(have_posts()) @php(the_post())
            @include('partials.post-card', ['class' => 'bg-color7'])
          @endwhile
      </div>
    </div>
</section>