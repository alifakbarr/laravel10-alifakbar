@extends('admin.layouts.master')

@section('title')
    {{ $articles->title }}
@endsection

@section('create')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                @yield('title')
            </h1>
            <a href="{{ route('admin.articles.edit', $articles->id) }}" class="button blue">Edit</a>
        </div>
    </section>
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <b>Title : {{ $articles->title }}</b> <br>
            <b>Share : {{ $articles->share }}</b> <br>
            <b>Status : {{ $articles->status }}</b> <br>
            <b>Categories :
                @foreach ($articles->categories()->get() as $category)
                    {{ $category->name . ',' }}
                @endforeach
            </b>
            <hr>
            <b>Content :</b> <br>
            <div class="">{!! $articles->content !!}</div>
        </div>
    </div>
@endsection
