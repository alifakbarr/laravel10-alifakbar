@extends('admin.layouts.master')

@section('title')
    {{ $portfolio->title }}
@endsection

@section('create')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                @yield('title')
            </h1>
            <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="button blue">Edit</a>
        </div>
    </section>
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <p>Title : {{ $portfolio->title }}</p>
            <p>Role : {{ $portfolio->role }}</p>
            <p>Start At : {{ $portfolio->start_at }}</p>
            <p>Finish At : {{ $portfolio->finish_at }}</p>
            <p>Link : {{ $portfolio->link }}</p>
            <p>Description :</p>
            <div class="">{!! $portfolio->description !!}</div>
        </div>
    </div>
@endsection
