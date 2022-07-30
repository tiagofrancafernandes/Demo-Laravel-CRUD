@extends('nomes.layout')

@section('action_title', __("Edit: {$nome->nome}"))

@section('sub_content')
<div class="row">
    <div class="col-12 mb-4">
        <form method="POST" action="{{ route('nomes.update', $nome->id) }}">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">
                    Name
                    <em class="text-muted text-small">(Leave blank if you don't want to change)</em>
                </label>
                <input
                    type="text"
                    class="form-control"
                    id="nome"
                    name="nome"
                    value="{{ old('nome') ?? $nome->nome ?? null }}"
                    aria-describedby="nomeHelp"
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
