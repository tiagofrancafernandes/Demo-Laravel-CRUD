@extends('pages.layout')

@section('action_title', __("Show: {$page->name}"))

@section('sub_content')
<div class="row">
    <div class="col-12 mb-4">
        <a href="#edit" class="btn btn-primary">Edit</a>
        <form action="#delete-{{ $page->id }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

    <div class="col-12 mb-4">
        <div class="card mb-3" style="max-width: 60%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image</text>
                    </svg>

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">User details</h5>

                        <ul class="list-group list-group-flush mb-2">
                            <li class="list-group-item"><strong>ID:</strong> {{ $page->id }}</li>
                            <li class="list-group-item"><strong>Name:</strong> {{ $page->name }}</li>
                            <li class="list-group-item"><strong>E-mail:</strong> {{ $page->email }}</li>
                            <li class="list-group-item"><strong>Created at:</strong> {{ $page->created_at }}</li>
                        </ul>

                        <p class="card-text"><small class="text-muted">Last updated: {{
                                $page->updated_at->diffForHumans() }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
