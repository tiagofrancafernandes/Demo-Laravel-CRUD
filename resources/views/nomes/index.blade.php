@extends('nomes.layout')

@section('sub_content')
<div class="row">
    <div class="col-12 mb-4">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center text-white">
                        <a
                            class="text-white"
                            href="{{ \App\Http\Helpers\RouteHelper::getNewDirection('id') }}">#</a>
                    </th>
                    <th scope="col" class="text-white">
                        <a
                            class="text-white"
                            href="{{ \App\Http\Helpers\RouteHelper::getNewDirection('nome') }}">Nome</a>
                    </th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($nomes as $nome)
                <tr>
                    <th scope="row" class="text-center">{{ $nome->id }}</th>
                    <td>{{ $nome->nome }}</td>
                    <td class="d-flex justify-content-center">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="d-grid gap-2 m-0 p-1 mb-2"><a href="{{ route('nomes.confirm_delete', $nome->id) }}" class="btn btn-sm btn-danger">Delete</a></li>
                                    <li class="d-grid gap-2 m-0 p-1 mb-2"><a href="{{ route('nomes.edit', $nome->id) }}"           class="btn btn-sm btn-outline-primary">Edit</a></li>
                                    <li class="d-grid gap-2 m-0 p-1 mb-2"><a href="{{ route('nomes.show', $nome->id) }}"           class="btn btn-sm btn-outline-info">Show</a></li>
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
        {{ $nomes->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
