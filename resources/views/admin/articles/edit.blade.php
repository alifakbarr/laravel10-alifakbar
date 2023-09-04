@extends('admin.layouts.master')

@section('title')
    {{ $articles->title }}
@endsection

@section('content')
    <form action="{{ route('admin.articles.update', $articles->id) }}" method="post">
        @csrf
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Masukkan Title" required
                    value="{{ $articles->title }}">
            </div>
        </div>
        <div class="field">
            <label class="label">Share</label>
            <div class="control">
                <div class="select">
                    <select name="share" required>
                        <option value="public" {{ $articles->share == 'public' ? 'selected' : '' }}>Public</option>
                        <option value="private" {{ $articles->share == 'private' ? 'selected' : '' }}>Private
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Status</label>
            <div class="control">
                <div class="select">
                    <select name="status" required>
                        <option value="finish" {{ $articles->status == 'finish' ? 'selected' : '' }}>Finish</option>
                        <option value="draft" {{ $articles->status == 'draft' ? 'selected' : '' }}>Draft
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Categoris</label>
            <div class="control">
                <div class="select">
                    <select name="categories[]" id="mySelect" multiple required style="height: 100px"
                        @foreach ($categories as $categori)
                    <option value="{{ $categori->id }}"
                        @foreach ($articles->categories as $value)
                        @if ($categori->id == $value->id)
                            selected
                        @endif @endforeach>{{ $categori->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea name="content" id="editor" cols="30" rows="10">{!! $articles->content !!}</textarea>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <button type="submit" class="button blue">Update</button>
        </div>
    </form>
@endsection
