@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Témoignages</h1>
        <a href="{{ route('temoignages.create') }}" class="btn btn-primary">Ajouter temoignage</a>
        <div class="row">
            @foreach($temoignages as $temoignage)
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        @if($temoignage->image)
                        <img class="card-img-top" src="{{ asset('images/' . $temoignage->image) }}" alt="{{ $temoignage->nom }}">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $temoignage->nom }}</h5>
                            <p class="card-text">{{ $temoignage->message }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
