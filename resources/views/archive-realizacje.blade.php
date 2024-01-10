@extends('layouts.app')

@section('content')
@posts
  <h2 class="entry-title">@title</h2>
  <div class="entry-content">
    {{ the_excerpt() }}
  </div>
@endposts
@endsection