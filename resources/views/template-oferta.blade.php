@extends('layouts.app')
{{--
Template Name: Oferta
--}}
@php
$post_type = 'produkty'; 
$taxonomies = get_object_taxonomies($post_type, 'names');
$taxonomy_name = !empty($taxonomies) ? $taxonomies[0] : null;
@endphp
@section('content')
<section class="hero__template bg-color7 relative py-half lg:py-full overflow-hidden">
   <div class="pointer-events-none bg-white absolute triangle-right -top-px -right-px h-20 w-20 lg:w-[160px] lg:h-[160px] z-10"></div>
   <div class="container">
      <div class="w-full mb-half-mobile lg:mb-half">
         <div class="text-h3 font-bold mb-half-mobile lg:mb-half">
            <h1>Oferta</h1>
         </div>
         <div class="text-desc text-color6">
          <p>Lorem ipsum dolor sit amet consectetur. Egestas sem sapien consectetur risus amet sagittis fringilla donec suscipit.</p>
         </div>
      </div>
      <div class="flex flex-col gap-half-mobile lg:gap-half">
         @php
         $terms = get_terms([
              'taxonomy' => $taxonomy_name,
              'hide_empty' => false,
         ]);
         @endphp
         @if (!empty($terms) && !is_wp_error($terms))
         @foreach ($terms as $term)
         @php
         $args = [
              'post_type' => $post_type,
              'posts_per_page' => -1,
              'tax_query' => [
                  [
                      'taxonomy' => $taxonomy_name,
                      'field'    => 'term_id',
                      'terms'    => $term->term_id,
                  ],
              ],
         ];
         $query = new WP_Query($args);
         @endphp
         <div class="bg-white p-half">
            @if ($query->have_posts())
            @php
            $term_obj = get_term($term->term_id, $taxonomy_name);
            @endphp
            <div class="flex flex-col gap-half-mobile lg:gap-half mb-half-mobile lg:mb-half">
               <div class="text-h2 font-bol">
                  <h2>{{ $term_obj->name }}</h2>
               </div>
               <div class="text-desc text-color6">
                  <p>{{ $term_obj->description }}</p>
               </div>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-4 gap-5 xl:gap-half">
               @while ($query->have_posts())
               @php $query->the_post() @endphp
                  @include('partials.post-card-' . $post_type, ['class' => 'bg-white'])
               @endwhile
            </div>
            @else
            <div class="col-span-full mb-full">
               <div class="text-h3 font-bold">
                  <h2>{{_('Brak produktów')}}</h2>
               </div>
            </div>
            @endif
         </div>
         @php wp_reset_postdata() @endphp
         @endforeach
         @endif
      </div>
   </div>
</section>
@endsection