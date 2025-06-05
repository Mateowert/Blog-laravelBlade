<x-layout :meta-title="$post->title" meta-description="un post">
    <h1>Formulario de edición</h1>
    
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf @method('PATCH')
        <label>
            Titulo
        </label>
        <input name="title" type="text" value="{{ old('title', $post->title) }}">

        @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
        @enderror
        <br>
        <br>
        <label>
            Body
        </label>
        <textarea name="body" cols="30" rows="10" >{{ old('body', $post->body)}}</textarea>
        @error('body')
            <br>
            <small style="color: red">{{$message}}</small>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

    <a href="/blog">Regresar</a>
</x-layout>