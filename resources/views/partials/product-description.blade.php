@php
    $elements = get_field('elements');
@endphp

<div class="bg-white p-half-mobile lg:p-half pt-0 lg:pt-0 flex flex-col space-y-half-mobile lg:space-y-half product-description">
   
        @foreach ($elements as $element)
        @php
            $heading = $element['heading'];
            $content = $element['content'];
        @endphp
        <div class="flex flex-col space-y-half-mobile lg:space-y-half">
            @if (!empty($heading))
                <div class="text-h4 font-bold">
                    <h2>{{ $heading }}</h2>
                </div>
            @endif
            @if (!empty($content))
                <div class="text-base lg:text-desc text-color6">
                    {!! $content !!}
                </div>
            @endif
        </div>
        @endforeach
        
</div>

