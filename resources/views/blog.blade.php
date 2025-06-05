<x-layout meta-title='Blog'>

    @session('status')
        {{session('status')}}
    @endsession
    <h1>Blog</h1>
    <a href="{{route('posts.create')}}">Crear nuevo post</a>
    @foreach ($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h3>
                <a href={{ route('posts.show', $post) }}>
                    {{ $post->title }}
                </a>
            </h3>
            <a href="{{route('posts.edit', $post)}}" style="margin: 10px">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</x-layout>