@extends('layout.default')


@section('content')
<div class="container">
    <img src="{{ $post->image_url }}" />
    <h1>{{ $post->title }} </h1>
    <p>{{ $post->body }}</p>
    <small>{{ $post->category }}</small>

    <br><br><br>
    @include('components.createcomment')
    @include('components.comment')
</div>

@endsection