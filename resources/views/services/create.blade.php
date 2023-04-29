@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Service</h1>
    <form method="POST" action="{{ route('services.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Service Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter service name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Service</button>
    </form>
</div>
@endsection
