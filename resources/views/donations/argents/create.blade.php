@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">{{ __('Faire un don d\'argent') }}</div>
            <div class="panel-body">
                <form method="GET" action="{{ route('paiement.create') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Montant du don') }}</label>

                        <div class="col-md-6">
                            <input id="amount" type="text" class="form-control" name="amount" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom complet') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message (optionnel)') }}</label>

                        <div class="col-md-6">
                            <textarea id="message" class="form-control" name="message"></textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Faire un don') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection