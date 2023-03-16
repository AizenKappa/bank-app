@extends('layouts.app')

@section('title', 'Register')



@section('content')
<div class='mx-auto menu' style='display: grid;gap:10px;max-width: 400px;'>
    
    <div class="alert " role="alert">
        <a style="color: black; text-decoration: none" class="fw-bolder" href="{{ route('clients.index') }}">Afficher liste des clients</a>
    </div>
 
    <div class="alert " role="alert">
        <a style="color: black; text-decoration: none" class="fw-bolder" href="{{ route('clients.create') }}">Ajouter un client</a>
    </div>

    <div class="alert " role="alert">
        <a style="color: black; text-decoration: none" class="fw-bolder" href="{{ route('comptes.retrait') }}">Effectuer un retrait</a>
    </div>

    <div class="alert " role="alert">
        <a style="color: black; text-decoration: none" class="fw-bolder" href="{{ route('comptes.depot') }}">Effectuer un depot</a>
    </div>

    <div class="alert " role="alert">
        <a style="color: black; text-decoration: none" class="fw-bolder" href="{{ route('comptes.supprimer') }}">Supprimer un compte</a>
    </div>

</div>



@endsection