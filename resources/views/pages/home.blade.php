@extends('layouts.app')

@section('title', 'Register')



@section('content')
<div class='mx-auto menu' style='display: grid;gap:10px;max-width: 400px;'>
    
    <div class="alert " role="alert">
        <a href="{{ route('clients-list') }}">Afficher liste des clients</a>
    </div>
 
    <div class="alert " role="alert">
        <a href="{{ route('ajouter-client') }}">Ajouter un compte</a>
    </div>

    <div class="alert " role="alert">
        Effectuer un retrait
    </div>

    <div class="alert " role="alert">
        Effectuer un depot
    </div>
    
    <div class="alert " role="alert">
        Supprimer un compte
    </div>
 
</div>



@endsection