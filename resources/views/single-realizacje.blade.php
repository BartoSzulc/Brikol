@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="hero__template bg-color7 relative py-half lg:py-full">
    <div class="pointer-events-none bg-white absolute triangle-right -top-px -right-px h-20 w-20 lg:w-[160px] lg:h-[160px] z-10"></div>
    <div class="container">
        <div class="w-full mb-half-mobile lg:mb-half">
            <div class="text-h3 font-bold">
                <h1>{!! the_title() !!}</h1>
            </div>
        </div>
        <div class="bg-white p-half-mobile lg:p-half">
            <div class="h-auto lg:h-[480px] relative lg:overflow-hidden flex">
                <img class="max-lg:h-[350px] max-lg:w-full max-sm:h-[250px] relative lg:absolute object-center object-cover lg:top-1/2 lg:-translate-y-1/2" src="{{get_the_post_thumbnail_url()}}" alt="">
            </div>
            <div class="text-base lg:text-desc text-color6 mt-half-mobile lg:mt-half wysiwyg">
                {{ the_content() }}
            </div>
        </div>
    </div>
  </section>
  @endwhile
@endsection




