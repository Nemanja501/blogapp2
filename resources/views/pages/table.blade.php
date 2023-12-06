@extends('layout.default')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Category</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
         <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>{{ $post->category }}</td>
            <td><a href="/deletepost/{{ $post->id }}"><button>Delete</button></a></td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection