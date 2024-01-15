@extends('layouts.app')
{{--
  Template Name: Oferta
--}}
@php
    $args = array(
        'post_type' => 'produkty',
        'posts_per_page' => -1,
    );
    $query = new WP_Query( $args );
@endphp
@section('content')
<section class="hero__template bg-color7 relative py-half lg:py-full overflow-hidden">
    <div class="pointer-events-none bg-white absolute triangle-right -top-px -right-px h-20 w-20 lg:w-[160px] lg:h-[160px] z-10"></div>
    <div class="container">
        <div class="w-full mb-half-mobile lg:mb-half">
            <div class="text-h3 font-bold">
                <h1>Oferta</h1>
            </div>
        </div>
        @if ($query->have_posts())
        <div class="grid grid-cols-3 gap-5">
            @while ($query->have_posts())
            @php $query->the_post() @endphp
                @include('partials.post-card', ['class' => 'bg-color7'])
            @endwhile 
      </div>
      @else 
      <div class="col-span-full mb-full">
        <div class="text-h3 font-bold">
          <h2>Brak produktów</h2>
        </div>
      </div>
      @endif
      @php wp_reset_postdata() @endphp
    </div>
</section>
@endsection