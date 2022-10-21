@extends('layouts.app')

@section('action_title', __('Users'))

@section('action_list')
<a href="{{ route('users.index') }}" class="btn btn-outline-primary">User list</a>
<a href="{{ route('users.create') }}" class="btn btn-outline-primary">New User</a>
@endsection

@section('content')
@yield('sub_content')
@endsection
