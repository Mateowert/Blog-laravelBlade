<x-layout :meta-title="$post->title" meta-description="un post">
    @session('status')
        {{session('status')}}
    @endsession
    <h1>{{ $post->title }}</h1>
    <p> {{ $post->body }} </p>
    <a href="/blog">Regresar</a>
</x-layout>