@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="{{ route('admin.articles.store') }}" method="post">
        @csrf
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Masukkan Title" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Share</label>
            <div class="control">
                <div class="select">
                    <select name="share" required>
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Status</label>
            <div class="control">
                <div class="select">
                    <select name="status" required>
                        <option value="finish">Finish</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea name="content" id="editor" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <button type="submit" class="button blue">Save</button>
        </div>
    </form>
@endsection
