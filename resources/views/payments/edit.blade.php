@extends('layouts.appLayout');

@section('title')
  payment edit
@endsection

@section('content')


<div class="container">
    <h1>payment edit</h1>

    <form action="{{ route('payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $payment->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>



@endsection