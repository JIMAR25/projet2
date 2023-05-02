@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nos Services</h1>
    <p>Cette partie est dédiée aux professionnels qui offrent leurs services gratuitement aux personnes dans le besoin.</p>
    <form action="{{ route('services.index') }}" method="GET">
        <div class="mb-3">
            <label for="service-filter" class="form-label">Filtrer par service:</label>
            <select class="form-select" name="service" id="service-filter">
                <option value="">Tous les services</option>
                @foreach($services as $service)
                <option value="{{ $service->id }}" {{ request('service') == $service->id ? 'selected' : '' }}>{{ $service->nom }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Filtrer</button>
        </div>
    </form>
    <div class="mb-3">
        <a href="{{ route('services.create') }}" class="btn btn-primary">Ajouter un Service</a>
    </div>
    <table class="table">
        {{-- <thead>
            <tr>
                <th>Nom du Service</th>
                <th>Prestataires</th>
            </tr>
        </thead> --}}
        <tbody>
            @foreach($services as $service)
           
            @if(request('service') == $service->id || !request('service'))
            <tr>
                {{-- <td>{{ $service->name }}</td> --}}
                <td>
                    <ul>
                        @foreach($service->professionals as $provider)
                        @if($provider->image)
                            <img class="card-img-top" src="{{ asset('images/' . $provider->image) }}" alt="{{ $provider->nom }}">
                        @endif
                        <h4> je suis {{$service->nom }} - {{ $provider->nom }} - {{ $provider->age }} ans - disponible à {{ $provider->available_time }} - mon email {{$provider->email}} - Telephone: {{$provider->telephone}}</h4>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
