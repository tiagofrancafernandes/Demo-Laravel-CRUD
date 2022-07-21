@extends('pages.layout')

@section('sub_content')
<div class="row">
    <div class="col-12 mb-4">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Active</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pages as $page)
                <tr>
                    <th scope="row" class="text-center">{{ $page->id }}</th>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->active }}</td>
                    <td class="d-flex justify-content-center">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="d-grid gap-2 m-0 p-1 mb-2"><a href="{{ route('pages.confirm_delete', $page->id) }}" class="btn btn-sm btn-danger">Delete</a></li>
                                    <li class="d-grid gap-2 m-0 p-1 mb-2"><a href="{{ route('pages.edit', $page->id) }}"           class="btn btn-sm btn-outline-primary">Edit</a></li>
                                    <li class="d-grid gap-2 m-0 p-1 mb-2"><a href="{{ route('pages.show', $page->id) }}"           class="btn btn-sm btn-outline-info">Show</a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-12 mb-4">
        {{ $pages->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
