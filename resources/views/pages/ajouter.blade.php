@extends('layouts.app')

@section('content')


  <main style="max-width: 700px; margin: 0 auto">

    <h1 class="text-center mb-3">Ajouter un client</h1>
    <form class="d-grid gap-3" method="POST" action="{{ route('clients.store') }}">

        @csrf
    
        <div class="form-group">
          <label class="fw-bold">Nom</label>
          <input type="text" class="form-control" name="nom" placeholder="john">
          @error('nom')
            <small class="text-danger mx-2">{{ $message }}</small>
          @enderror
        </div>
    
        <div class="form-group">
          <label class="fw-bold">Prenom</label>
          <input type="text" class="form-control" name="prenom" placeholder="Doe">
          @error('prenom')
            <small class="text-danger mx-2">{{ $message }}</small>
          @enderror
        </div>
    
        <div class="form-group">
          <label class="fw-bold">Cin</label>
          <input type="text" class="form-control" name="cin" placeholder="BA848067">
          @error('cin')
            <small class="text-danger mx-2">{{ $message }}</small>
          @enderror
        </div>
    
        <div class="form-group">
          <label class="fw-bold">Address</label>
          <input type="text" class="form-control" name="adresse" placeholder="1234 Main St">
          @error('adresse')
            <small class="text-danger mx-2">{{ $message }}</small>
          @enderror
        </div>
    
        <div class="form-group">
          <label class="fw-bold">Telephone</label>
          <input type="number" class="form-control" name="telephone" placeholder="+212 764576836">
          @error('telephone')
            <small class="text-danger mx-2">{{ $message }}</small>
          @enderror
        </div>
    
        <div class="mt-2">
          <button type="submit" class="btn btn-primary px-4">Valider</button>
        </div>
    
    </form>
  </main>


@endsection
