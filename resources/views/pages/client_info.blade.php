@extends('layouts.app')


@section('content')
    
    <main style="max-width: 800px; margin: 0 auto">

        <table class="table">

            <h3 style="margin: 20px">
                Client
                <small class="text-muted mx-2 fs-4">{{ $username }}</small>
            </h3>

            <thead class="table-dark">
                <tr>
                    <th scope="col">N° Compte</th>
                    <th scope="col">Sold</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($comptes as $compte)
                    <tr>
                        <th scope="row">{{ $compte->numero_compte }}</th>
                        <td>$ {{ $compte->sold }}</td>
                    </tr>
                @endforeach
            </tbody>
    
        </table>

        <span class="btn btn-outline-secondary float-end">Total : <span class="fw-bold">$ {{ $sold_total }}</span></span>
    </main>



@endsection

