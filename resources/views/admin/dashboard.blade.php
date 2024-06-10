@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create User</a>
    <a href="{{ route('admin.messages') }}" class="btn btn-secondary">View Messages</a>
</div>
@endsection
