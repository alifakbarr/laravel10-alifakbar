@extends('user.layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    {{-- <div class="w-2/4 bg-white"> --}}
    <div class="mt-10 mb-24 sm:my-24 mx-6 sm:mx-12">
        <div class="flex justify-center">
            <div class="flex justify-start block mb-2 w-full sm:w-8/12 ">
                <p class="font-bold text-lg sm:text-xl ml-6">Articles</p>
            </div>
        </div>
        @foreach ($articles as $article)
            <div class="flex justify-center mb-3">
                <a href="{{ route('home.show', $article->id) }}"
                    class="block p-6 w-full sm:w-8/12 bg-white border border-gray-200 rounded-md hover:bg-gray-50 ">
                    <div class="flex justify-start mb-4">
                        <img class="w-10 h-10 p-1 rounded-full ring-2 ring-blue-400 mr-3" src="{{ asset('img/profil.jpg') }}"
                            alt="Bordered avatar">
                        <div class="font-medium">
                            <p>alifakbar</p>
                            <p class="text-gray-500 text-sm">{{ date_format($article->created_at, 'M d, Y') }}</p>
                        </div>
                    </div>
                    <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-gray-900">{{ $article->title }}</h5>
                    @foreach ($article->categories()->get() as $categori)
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium mr-1 px-2.5 py-1 rounded-full">{{ $categori->name }}</span>
                    @endforeach
                </a>
            </div>
        @endforeach
    </div>
@endsection
