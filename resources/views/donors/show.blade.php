@extends('layouts.appLayout');

@section('title')
  donors show
@endsection

@section('content')



<div class="container">
    <h1>{{ $donor->name }}</h1>
    <p><strong>Email:</strong> {{ $donor->email }}</p>
    <p><strong>Phone:</strong> {{ $donor->phone }}</p>
    <p><strong>Message:</strong> {{ $donor->message }}</p>
    <a href="{{ route('donors.edit', $donor->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('donors.destroy', $donor->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</div>
@endsection