<x-layout 
    meta-title="Crea un post" 
    meta-description="Formulario para crear un post"
>

    <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
        Crear Post
    </h1>
    
    <form method="POST" action="{{ route('posts.store') }}"
        class="max-w-3xl mx-auto mt-10 space-y-6 bg-white p-6 rounded-lg shadow-md">
        @csrf 
        
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">
                Título
            </label>
            <input name="title" type="text" value="{{ old('title') }}"
                id="title"
                class="mt-1 w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-sky-500 focus:ring focus:ring-sky-200 focus:ring-opacity-50"
            >
            @error('title')
                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="body" class="block text-sm font-medium text-gray-700">
                Contenido
            </label>
            <textarea
                name="body"
                id="body"
                rows="6"
                class="mt-1 w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-sky-500 focus:ring focus:ring-sky-200 focus:ring-opacity-50"
            >{{ old('body') }}</textarea>
            @error('body')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button
                type="submit"
                class="rounded bg-sky-600 px-6 py-2 text-white shadow hover:bg-sky-700 active:bg-sky-800"
            >
                Crear
            </button>
        </div>
    </form>

    <a href="{{ route('posts.index') }}"
    class="fixed bottom-6 left-6 z-50 rounded-full bg-gray-700 p-4 text-white shadow-lg hover:bg-gray-800 active:bg-gray-900">
    <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
    </svg>
</a>
</x-layout>