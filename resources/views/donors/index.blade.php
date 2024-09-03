@extends('layouts.appLayout');

@section('title')
  donors 
@endsection

@section('content')


<div class="container">
    <h1>Donors</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>phone</th>
                <th>addess</th>
                <th>payment method ID</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donors as $donor)
                <tr>
                    <td>{{ $donor->name }}</td>
                    <td>{{ $donor->phone }}</td>
                    <td>{{ $donor->address }}</td>
                    <td>{{ $donor->payment_method_id }}</td>
                    <td>{{ $donor->amount }}</td>
                    <td>
                        <a href="{{ route('donors.show', $donor->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('donors.edit', $donor->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('donors.destroy', $donor->id) }}" method="POST" style="display:inline;">
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