@extends('layouts.layout')

@section('nav')
    @include('layouts.nav') <!-- Inclui o arquivo de navegação -->
@endsection

@section('content')
    <section class="p-12">
        <div class="container mx-auto">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article
                    class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <div>
                        <figure>
                            <img src="{{ asset('storage/' . $post->image) }}" class="rounded-lg" alt="">
                        </figure>
                        <address class="flex items-center mb-6 not-italic pt-8">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900">
                                <img class="mr-4 w-16 h-16 rounded-full" src="{{ $post->user->image }}" alt="">
                                <div>
                                    <a href="#" rel="author"
                                        class="text-xl font-bold text-white">{{ $post->user->name }}</a>

                                    <p class="text-base text-gray-500">
                                        <span class="">Publicado em:</span>
                                        {{ \Carbon\Carbon::parse($post->user->created_at)->format('d/m/Y') }}
                                    </p>
                                </div>
                            </div>
                        </address>
                        <div class="py-4">
                            <h1 class="mb-4 text-2xl font-extrabold leading-tight text-gray-900 lg:mb-6 dark:text-white">
                                {{ $post->title }}</h1>
                            <p class="text-gray-500"> {{ $post->description }}</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="max-w-2xl mx-auto pt-8">
                <h3 class="mb-4 text-xl font-extrabold leading-tight text-gray-900 lg:mb-6 dark:text-white">
                    Posts relacionados</h3>

                @if ($relatedPosts->isEmpty())
                    <p class="text-gray-500">Nenhum post relacionado encontrado.</p>
                @endif

                @foreach ($relatedPosts as $post)
                    <div class="grid grid-cols-3 justify-between">
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ $post->image }}" alt="" />
                            </a>
                            <div class="p-5">
                                <div class="pb-4 flex gap-4 items-center">
                                    <p class="text-xs text-gray-500">{{ $post->created_at }}</p>
                                    <a href="#"
                                        class="bg-blue-900 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                                        {{ $post->category }}</a>
                                </div>
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $post->title }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
                                    {{ $post->description }}</p>
                                <div class="flex gap-4 items-center pb-4">
                                    <div>
                                        <img class="w-10 h-10 rounded-full" src="{{ $post->image }}" alt="Rounded avatar">
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-white">{{ $post->user->name }}</p>
                                    </div>
                                </div>
                                <a href="{{ route('posts.show', $post->id) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Leia mais
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
