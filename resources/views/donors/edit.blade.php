@extends('layouts.appLayout');

@section('title')
  donors edit
@endsection

@section('content')


<div class="container">
    <h1>Donor Edit</h1>

    <form action="{{ route('donors.update', $donor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $donor->name }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Email</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $donor->phone }}" required>
        </div>
        <div class="form-group">
            <label for="address">Phone</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $donor->address }}">
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" name="amount" id="amount" class="form-control" value="{{ $donor->amount }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>




@endsection