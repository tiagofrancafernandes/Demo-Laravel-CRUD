@extends('layouts.app')

@section('action_title', __('Nomes'))

@section('action_list')
<a href="{{ route('nomes.index') }}" class="btn btn-outline-primary">Nome list</a>
<a href="{{ route('nomes.create') }}" class="btn btn-outline-primary">New Nome</a>
@endsection

@section('content')
@yield('sub_content')
@endsection
