@extends('app')

@section('content')
<div class="container px-3 py-5">
    <h1>{{ $post->title }}</h1>

    <hr>

    <p>
        {{ $post->body }}
    </p>
</div>
@endsection