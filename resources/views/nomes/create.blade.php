@extends('nomes.layout')

@section('action_title', __('Create'))

@section('sub_content')
<div class="row">
    <div class="col-12 mb-4">
        <form method="POST" action="{{ route('nomes.store') }}">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    value="{{ old('name') ?? null }}"
                    aria-describedby="nameHelp"
                    placeholder="Your name"
                    required>
                <div id="nameHelp" class="form-text">Your name</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>
        </form>

    </div>
</div>
@endsection
