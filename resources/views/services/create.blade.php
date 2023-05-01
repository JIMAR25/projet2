@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Service</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom du Service</label>
            <select class="form-select" name="name" id="name">
                <option value="" selected>Choisir un service</option>
                @foreach($services as $service)
                <option value="{{ $service->name }}">{{ $service->name }}</option>
                @endforeach
            </select>
            <p>ou</p>
            <input type="text" class="form-control" id="new_service" name="new_service">
        </div>
        <div class="mb-3">
            <label for="provider-name" class="form-label">Nom du Prestataire</label>
            <input type="text" class="form-control" id="provider-name" name="provider_name" required>
        </div>
        <div class="mb-3">
            <label for="provider-age" class="form-label">Âge du Prestataire</label>
            <input type="number" class="form-control" id="provider-age" name="provider_age" required>
        </div>
        <div class="mb-3">
            <label for="provider-time" class="form-label">Disponibilité du Prestataire</label>
            <input type="text" class="form-control" id="provider-time" name="provider_time" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
