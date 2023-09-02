@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('create')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                @yield('title')
            </h1>
            <a href="{{ route('admin.portfolio.create') }}" class="button blue">Create</a>
        </div>
    </section>
@endsection

@section('content')
    <div class="card has-table">
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $portfolio)
                        <tr>
                            <td data-label="Title">{{ $portfolio->title }}</td>
                            <td data-label="Role">{{ $portfolio->role }}</td>
                            <td data-label="Created At">
                                <small class="text-gray-500" title="Oct 25, 2021">{{ $portfolio->created_at }}</small>
                            </td>
                            <td class="actions-cell" data-label="Action">
                                <div class="buttons">
                                    <a href="{{ route('admin.portfolio.show', $portfolio->id) }}"
                                        class="button small green">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </a>
                                    <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="post">
                                        @csrf
                                        <button class="button small red"
                                            onclick="confirm('Are you sure delete this portfolio?')">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
