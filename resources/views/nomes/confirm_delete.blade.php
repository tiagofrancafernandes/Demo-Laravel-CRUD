@extends('layouts.app')

@section('action_title', __('Confirm delete nome'))

@section('content')
<div class="row d-flex justify-content-center mb-4">
    <div class="col-8 mb-4 d-flex justify-content-center">
        <h3>Are you sure you want to delete nome {{ $nome->name }} - #{{ $nome->id }}</h3>
    </div>

    <div class="col-8 mb-4">

        <form action="{{ route('nomes.delete', $nome->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <div class="d-flex justify-content-evenly">
                <a href="{{ route('nomes.index') }}" class="btn btn-primary">No - keep nome</a>
                <button type="submit" class="btn btn-outline-danger">Yes - Delete</button>
            </div>
        </form>
    </div>
</div>
@endsection
