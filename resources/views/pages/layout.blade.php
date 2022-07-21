@extends('layouts.app')

@section('action_title', __('Pages'))

@section('action_list')
<a href="{{ route('pages.index') }}" class="btn btn-outline-primary">Page list</a>
<a href="{{ route('pages.create') }}" class="btn btn-outline-primary">New page</a>
@endsection

@section('content')
@yield('sub_content')
@endsection

