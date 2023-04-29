@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Our Services</h1>
    <div class="mb-3">
        <a href="{{ route('services.create') }}" class="btn btn-primary">Create a New Service</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                
                <th>Services</th>
                <th>Donateurs</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                
                <td>{{ $service->name }}</td>
                <td>
                    <ul>
                        @foreach($service->professionals as $provider)
                        <li>{{ $provider->name }} - {{ $provider->age }} years old - available at {{ $provider->available_time }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
