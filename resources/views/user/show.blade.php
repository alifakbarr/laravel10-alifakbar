@extends('user.layouts.master')
@section('title')
    {{ $article->title }}
@endsection
@section('content')
    {{-- <div class="w-2/4 bg-white"> --}}
    <div class="mt-10 mb-24 sm:my-24 mx-6 sm:mx-12">
        <div class="flex justify-center">
            <div class="block py-9 sm:py-16 px-6 sm:px-12 w-full sm:w-9/12 bg-white border border-gray-200 rounded-sm ">
                <div class="flex justify-start mb-4">
                    <img class="w-10 h-10 p-1 rounded-full ring-2 ring-blue-400 mr-3" src="{{ asset('img/profil.jpg') }}"
                        alt="Bordered avatar">
                    <div class="font-medium">
                        <p>alifakbar</p>
                        <p class="text-gray-500 text-sm">{{ date_format($article->created_at, 'M d, Y') }}</p>
                    </div>
                </div>
                <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl">
                    {{ $article->title }}</h1>
                @foreach ($article->categories()->get() as $categori)
                    <span
                        class="bg-blue-100 text-blue-800 text-xs font-medium mr-1 px-2.5 py-1 rounded-full">{{ $categori->name }}</span>
                @endforeach
                <article class="pt-14 prose max-w-none prose-p:tracking-tight">
                    {!! $article->content !!}
                </article>
            </div>
        </div>
    </div>
@endsection
