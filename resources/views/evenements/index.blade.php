@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des Événements</div>
                    <a href="{{ route('evenements.create') }}" class="btn btn-primary float-right">Ajouter</a>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @foreach ($evenements as $evenement)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $evenement->title }}</h5>
                                @if ($evenement->photos)
                                    <img src="{{ asset('images/' . $evenement->photos) }}" class="img-fluid" alt="Image">
                                @endif
                                <p class="card-text">{{ $evenement->content }}</p>
                                
                                <!-- Like and Share buttons -->
                                <div class="d-flex justify-content-between">
                                    <div class="likes-count">{{ $evenement->likes->count() }} Likes</div>
                    
                                    @if ($evenement->likes->contains(auth()->user()))
                                        <button class="btn btn-primary">Liked</button>
                                    @else
                                        <form action="{{ route('like', $evenement->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-primary">Like</button>
                                        </form>
                                    @endif
                                    
                                    <button class="btn btn-outline-primary">Comment</button>
                                    <button class="btn btn-outline-secondary">Share</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    
                        {{ $evenements->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
