<x-layout 
    meta-title="Crea un post" 
    meta-description="Formulario para crear un post"
>
    <h1>Crear Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf 
        <label>
            Titulo
        </label>
        <input name="title" type="text" value="{{old('title')}}">

        @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
        @enderror
        <br>
        <br>
        <label>
            Body
        </label>
        <textarea name="body" cols="30" rows="10" value="{{old('body')}}"></textarea>
        @error('body')
            <br>
            <small style="color: red">{{$message}}</small>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

    <a href="{{route('blog')}}">Regresar</a>
</x-layout>