@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Dashboard</h1>
    <a href="{{ route('user.announcements') }}" class="btn btn-primary">View Announcements</a>
    <a href="{{ route('user.messages.create') }}" class="btn btn-secondary">Send Message to Admin</a>
</div>
@endsection
