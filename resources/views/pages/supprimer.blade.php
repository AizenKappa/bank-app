
@extends('layouts.app')


@section('content')
    
    <main style="max-width: 700px; margin: auto;">
        <form class="d-grid gap-3" method="POST" action="/comptes">
            <h3 class="modal-title mx-auto">Supprimer un compte</h3>

            <div class="modal-body">
                @csrf
                @method('DELETE')

                <div class="form-group">
                    <label class="fw-bold mx-1">N° Compte</label>
                    <input type="text" class="form-control mt-1" name="numero" placeholder="Saisir nuumero du compte">
                    @error('numero')
                        <small class="text-danger mx-2">{{ $message }}</small>
                    @enderror
                    </div>
            </div>

            <div><button type="submit" class="btn btn-primary float-end">Supprimer</button></div>
        </form>
    </main>

@endsection