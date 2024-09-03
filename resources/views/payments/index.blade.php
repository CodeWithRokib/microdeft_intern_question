@extends('layouts.appLayout');

@section('title')
   payment
@endsection

@section('content')

<div class="container">
    <h1>Payment</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->name }}</td>
                    <td>
                        <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection