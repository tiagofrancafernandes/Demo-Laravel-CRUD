@extends('nomes.layout')

@section('action_title', __('Create'))

@section('sub_content')
<div class="row">
    <div class="col-12 mb-4">
        <form method="POST" action="{{ route('nomes.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input
                    type="text"
                    class="form-control"
                    id="nome"
                    name="nome"
                    value="{{ old('nome') ?? null }}"
                    aria-describedby="nomeHelp"
                    placeholder="Your name"
                    required>
                <div id="nomeHelp" class="form-text">Your name</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>
        </form>

    </div>
</div>
@endsection
