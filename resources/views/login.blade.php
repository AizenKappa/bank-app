@extends('layouts.app')

@section('title', 'Login')


@section('content')

    <main style="height: 100vh; padding: 20vh 0 0 0">
        
        <section style="max-width: 430px; background-color: rgba(117, 117, 117, 0.1); margin: 0 auto; padding: 20px 20px 5px 20px;">
            <h1 style="text-align: center">Login</h1>

            @include('forms.login')
        </section>
    </main>

@endsection
