@php
$post_type = 'produkty'; 
$args = [
    'post_type' => $post_type,
    'posts_per_page' => 4,
    'orderby' => 'rand',
    'order' => 'DESC',
];
$query = new WP_Query($args);
@endphp

<section class="bg-white py-half lg:py-full">
    <div class="container">
        <div class="w-full mb-half-mobile lg:mb-half">
            <div class="text-h2 font-bold  mb-half-mobile lg:mb-half">
                <h2>Zobacz także</h2>
            </div>
            <div class="text-base lg:text-desc text-color6">
                <p>Lorem ipsum dolor sit amet consectetur. Nisi tellus dictum pharetra tempor. Nisi urna tellus et venenatis. Eget malesuada orci turpis aenean rhoncus sed. Tincidunt at odio turpis pharetra ultrices amet nibh non lectus.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:gap-20 gap-5">
            @while ($query->have_posts())
                @php $query->the_post() @endphp
                @include('partials.post-card-' . get_post_type(), ['class' => 'bg-white'])
            @endwhile
        </div>
   
</section>