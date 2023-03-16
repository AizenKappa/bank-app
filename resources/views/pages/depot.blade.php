
@extends('layouts.app')


@section('content')
    
    <main style="max-width: 700px; margin: auto;">
        <form class="d-grid gap-3" method="POST" action="/compte/depot">
            <h3 class="modal-title mx-auto">Effectuer un depot</h3>

                @csrf

                <div class="form-group">
                    <label class="fw-bold mx-1">N° Compte</label>
                    <input type="text" class="form-control mt-1" name="numero" placeholder="Saisir nuumero du compte">
                    @error('numero')
                        <small class="text-danger mx-2">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="fw-bold mx-1">Montant</label>
                    <input type="number" class="form-control mt-1" name="montant" placeholder="Saisir montant">
                    @error('montant')
                        <small class="text-danger mx-2">{{ $message }}</small>
                    @enderror
                </div>


            <div><button type="submit" class="btn btn-primary float-end">Supprimer</button></div>
        </form>
    </main>

@endsection