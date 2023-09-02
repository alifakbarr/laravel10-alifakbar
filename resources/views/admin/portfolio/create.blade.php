@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form action="{{ route('admin.portfolio.store') }}" method="post">
        @csrf
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Masukkan Title" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Role</label>
            <div class="control">
                <div class="select">
                    <select name="role" required>
                        <option value="project">Project</option>
                        <option value="participant">Participant</option>
                        <option value="intership">Internship</option>
                        <option value="employee">Employee</option>
                        <option value="valunteer">Valunteer</option>
                        <option value="freelance">Freelance</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Start at</label>
            <div class="control">
                <input class="input" type="date" name="start_at">
            </div>
        </div>
        <div class="field">
            <label class="label">Finish at</label>
            <div class="control">
                <input class="input" type="date" name="finish_at">
            </div>
        </div>
        <div class="field">
            <label class="label">Link</label>
            <div class="control">
                <input class="input" type="text" name="link" placeholder="Masukkan link">
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea name="description" id="editor" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <button type="submit" class="button blue">Save</button>
        </div>
    </form>
@endsection
