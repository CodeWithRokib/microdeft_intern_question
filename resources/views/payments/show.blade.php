@extends('layouts.appLayout');

@section('title')
  payment show
@endsection

@section('content')



<div class="container">
    <h1>{{ $payment->name }}</h1>
    <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</div>
@endsection