@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="{{ route('admin.categories.store') }}" method="post">
        @csrf
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" type="text" name="name" placeholder="Masukkan Name" required>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <button type="submit" class="button blue">Save</button>
        </div>
    </form>
@endsection
