@extends('admin.layouts.master')

@section('title')
    {{ $portfolio->title }}
@endsection

@section('content')
    <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="post">
        @csrf
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Masukkan Title" required
                    value="{{ $portfolio->title }}">
            </div>
        </div>
        <div class="field">
            <label class="label">Role</label>
            <div class="control">
                <div class="select">
                    <select name="role" required>
                        <option value="project" {{ $portfolio->role == 'project' ? 'selected' : '' }}>Project</option>
                        <option value="participant" {{ $portfolio->role == 'participant' ? 'selected' : '' }}>Participant
                        </option>
                        <option value="intership" {{ $portfolio->role == 'intership' ? 'selected' : '' }}>Internship
                        </option>
                        <option value="employee" {{ $portfolio->role == 'employee' ? 'selected' : '' }}>Employee</option>
                        <option value="valunteer" {{ $portfolio->role == 'valunteer' ? 'selected' : '' }}>Valunteer
                        </option>
                        <option value="freelance" {{ $portfolio->role == 'freelance' ? 'selected' : '' }}>Freelance
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Start at</label>
            <div class="control">
                <input class="input" type="date" name="start_at" value="{{ $portfolio->start_at }}">
            </div>
        </div>
        <div class="field">
            <label class="label">Finish at</label>
            <div class="control">
                <input class="input" type="date" name="finish_at" value="{{ $portfolio->finish_at }}">
            </div>
        </div>
        <div class="field">
            <label class="label">Link</label>
            <div class="control">
                <input class="input" type="text" name="link" placeholder="Masukkan link"
                    value="{{ $portfolio->link }}">
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea name="description" id="editor" cols="30" rows="10">{!! $portfolio->description !!}</textarea>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <button type="submit" class="button blue">Update</button>
        </div>
    </form>
@endsection
