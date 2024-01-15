@query([
    'post_type' => 'realizacje',
    'posts_per_page' => 3,
])

<section class="home__realizations bg-white py-half lg:py-full">
    <div class="container">
        <div class="w-full">
            <div class="text-h2">
                <h2>Realizacje linii produkcyjnych</h2>
            </div>
            <div class="text-desc my-half-mobile lg:my-half text-color6">
                <p>Portfolio / Sprawdź jak działamy</p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
            @posts
            @include('partials.post-card')
            @endposts
        </div>
    </div>
</section>